<?php

function var_dump_pre($mixed = null) {
    echo '<pre>';
    var_dump($mixed);
    echo '</pre>';
    return null;
  }

  function var_log(&$varInput, $var_name='', $reference='', $method = '=', $sub = false) {

    static $output ;
    static $depth ;

    if ( $sub == false ) {
        $output = '' ;
        $depth = 0 ;
        $reference = $var_name ;
        $var = serialize( $varInput ) ;
        $var = unserialize( $var ) ;
    } else {
        ++$depth ;
        $var =& $varInput ;
       
    }
       
    // constants
    $nl = "\n" ;
    $block = 'a_big_recursion_protection_block';
   
    $c = $depth ;
    $indent = '' ;
    while( $c -- > 0 ) {
        $indent .= '|  ' ;
    }

    // if this has been parsed before
    if ( is_array($var) && isset($var[$block])) {
   
        $real =& $var[ $block ] ;
        $name =& $var[ 'name' ] ;
        $type = gettype( $real ) ;
        $output .= $indent.$var_name.' '.$method.'& '.($type=='array'?'Array':get_class($real)).' '.$name.$nl;
   
    // havent parsed this before
    } else {

        // insert recursion blocker
        $var = Array( $block => $var, 'name' => $reference );
        $theVar =& $var[ $block ] ;

        // print it out
        $type = gettype( $theVar ) ;
        switch( $type ) {
       
            case 'array' :
                $output .= $indent . $var_name . ' '.$method.' Array ('.$nl;
                $keys=array_keys($theVar);
                foreach($keys as $name) {
                    $value=&$theVar[$name];
                    var_log($value, $name, $reference.'["'.$name.'"]', '=', true);
                }
                $output .= $indent.')'.$nl;
                break ;
           
            case 'object' :
                $output .= $indent.$var_name.' = '.get_class($theVar).' {'.$nl;
                foreach($theVar as $name=>$value) {
                    var_log($value, $name, $reference.'->'.$name, '->', true);
                }
                $output .= $indent.'}'.$nl;
                break ;
           
            case 'string' :
                $output .= $indent . $var_name . ' '.$method.' "'.$theVar.'"'.$nl;
                break ;
               
            default :
                $output .= $indent . $var_name . ' '.$method.' ('.$type.') '.$theVar.$nl;
                break ;
               
        }
       
        // $var=$var[$block];
       
    }
   
    -- $depth ;
   
    if( $sub == false )
        return $output ;
       
}


class Student
{
    // TODO: Create instance variables

    public $preferredName;
    public $lastName;
    public $myid;
    public $major;
    public $matricTerm;
    public $gradTerm;
    public $conn;
    public $sql;
    
    // TODO: Create method for instance construct

    public function __construct(&$preferredName, $lastName, &$myid, $major, $matricTerm, $gradTerm) 
    {
        $this->preferredName = $_POST['student']['firstName'];
        $this->lastName = $_POST['student']['lastName'];
        $this->myid = $_POST['student']['myId'];
        $this->major = $_POST['student']['major'];
        $this->matricTerm = $_POST['student']['matricTerm'];
        $this->gradTerm = $_POST['student']['gradTerm'];
    }

    // TODO: Create method to create database table


    
    // TODO: Create method to get records from database table



        public function saveStudent(\PDO $pdo)
        {
            $this->conn = $pdo;
            if(isset($_POST['submit'])) 
            {
                try
                {
                    $stmt = $this->conn->prepare("SELECT studentId FROM students WHERE myid=?"); 
                    $stmt->execute([$this->myid]); 
                    if ($student_id = $stmt->fetchColumn()) {
                        $sql = "UPDATE students SET `grad_term` = (SELECT `termId` FROM `academic_terms` WHERE '$this->gradTerm' = CONCAT(`term`, ' ', `year`)) WHERE  $student_id = `studentId`";
                    } else {
                    $sql = "INSERT INTO students (`preferred_name`, `last_name`, `myid`, `majorId`, `matric_term`, `grad_term`) VALUES ('$this->preferredName', '$this->lastName', '$this->myid', (SELECT `majorId` FROM `majors` WHERE '$this->major' = `name`), (SELECT `termId` FROM `academic_terms` WHERE '$this->matricTerm' = CONCAT(`term`, ' ', `year`)), (SELECT `termId` FROM `academic_terms` WHERE '$this->gradTerm' = CONCAT(`term`, ' ', `year`))) ON DUPLICATE KEY UPDATE `grad_term` = (SELECT `termId` FROM `academic_terms` WHERE '$this->gradTerm' = CONCAT(`term`, ' ', `year`))";
                    }
                    $this->conn->exec($sql);
                    echo "<pre>"; var_dump($student_id) ;echo "</pre>";
                }   catch(PDOException $error)
                    {
                        echo $this->sql . "<br>" . $error->getMessage();
                    }
            }
        }

        public function getStudent(\PDO $pdo, $myid)
        {
            $this->conn = $pdo;
            if(isset($_POST['submit'])) 
            {
                try
                {
                    $data = $pdo->query(
                        "SELECT studentId, preferred_name, last_name, myid, 
                        (SELECT CONCAT(`term`, ' ', `year`) FROM academic_terms WHERE `matric_term` = `termId`), 
                        (SELECT CONCAT(`term`, ' ', `year`) FROM academic_terms WHERE `grad_term` = `termId`) FROM students WHERE '$this->myid' = `myid`")->fetchAll(PDO::FETCH_UNIQUE);
                    // echo "<pre>"; var_dump($data) ;echo "</pre>";
                    echo "<pre>"; echo var_log($data); echo "</pre>";

                }   catch(PDOException $error)
                    {
                        echo $this->sql . "<br>" . $error->getMessage();
                    }
            }
        }

}
?>