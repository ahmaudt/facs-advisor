<?php

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
                    $data = $pdo->query("SELECT preferred_name, last_name, (SELECT `term` FROM academic_terms WHERE ), grad_term FROM students WHERE '$this->myid' = myid ")->fetchAll(PDO::FETCH_UNIQUE);
                    echo "<pre>"; var_dump($data) ;echo "</pre>";
                }   catch(PDOException $error)
                    {
                        echo $this->sql . "<br>" . $error->getMessage();
                    }
            }
        }

}
?>