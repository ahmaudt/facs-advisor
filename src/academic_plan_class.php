<?php
    class AcademicPlan
    {
        public $recommended_courses;
        public $alt_courses;
        public $student;
        public $advising_session;
        public $current_term;
        public $advising_term;


        public function __construct($student, $current_term, $advising_term, $recommended_courses, $alt_courses)
        {
            $this->student = new Student($firstName, $lastName, $myid, $major, $matricTerm, $gradTerm);
            $this->current_term = $_POST['advising_session']['currentTerm'];
            $this->advising_term = $_POST['advising_session']['advisingTerm'];
            $this->recommended_courses = array_filter($_POST['recommended_courses']);
            $this->alt_courses = array_filter($_POST['alt_courses']);
        }

        public function savePlan(\PDO $pdo)
        {
            $this->conn = $pdo;
            if(isset($_POST['submit'])) 
            {
                try
                {
                    $sql = "INSERT INTO student_plans (`preferred_name`, `last_name`, `myid`, `majorId`, `matric_term`, `grad_term`) VALUES ('$this->preferredName', '$this->lastName', '$this->myid', (SELECT `majorId` FROM `majors` WHERE '$this->major' = `name`), (SELECT `termId` FROM `academic_terms` WHERE '$this->matricTerm' = CONCAT(`term`, ' ', `year`)), (SELECT `termId` FROM `academic_terms` WHERE '$this->gradTerm' = CONCAT(`term`, ' ', `year`)))";
                    
                    $this->conn->exec($sql);
                }   catch(PDOException $error)
                    {
                        echo $this->sql . "<br>" . $error->getMessage();
                    }
            }
        }

    }
?>