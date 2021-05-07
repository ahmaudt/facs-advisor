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
            // $this->student = new Student($firstName, $lastName, $myid, $major, $matricTerm, $gradTerm);
            $this->current_term = $_POST['student']['advising_session']['currentTerm'];
            $this->advising_term = $_POST['student']['advising_session']['advisingTerm'];
            $this->recommended_courses = array_filter($_POST['recommended_courses']);
            $this->alt_courses = array_filter($_POST['alt_courses']);
            $this->myid = $_POST['student']['myId'];
            $this->major = $_POST['student']['major'];
        }

        public function savePlan(\PDO $pdo)
        {
            $this->conn = $pdo;
            if(isset($_POST['submit'])) 
            {
                try
                {
                    $recs = implode(", ", $this->recommended_courses);
                    $alts = implode(", ", $this->alt_courses);
                    $term_now = strtolower($this->current_term);
                    echo "<pre>";var_export($this->current_term);echo "</pre>";
                    $advised_for = strtolower($this->advising_term);
                    $sql = "INSERT INTO student_plans (`recommended_courses`, `alt_courses`, `studentId`, `majorId`, `departmentId`, `collegeId`, `advising_term`, `current_term`) 
                    VALUES ('$recs', '$alts', (SELECT `studentId` FROM `students` WHERE '$this->myid' = `myid`),
                    (SELECT `majorId` FROM `majors` WHERE '$this->major' = `name`),
                    (SELECT `departmentId` FROM majors WHERE '$this->major' = `name`),
                    (SELECT `collegeId` FROM majors WHERE '$this->major' = `name`),
                    (SELECT `termId` FROM academic_terms WHERE '$advised_for' = CONCAT(`term`, ' ', `year`)),
                    (SELECT `termId` FROM academic_terms WHERE '$term_now' = CONCAT(`term`, ' ', `year`))
                    )";
                    
                    $this->conn->exec($sql);
                }   catch(PDOException $error)
                    {
                        echo $this->sql . "<br>" . $error->getMessage();
                    }
            }
            
        }

        public function getPlans(\PDO $pdo)
        {
            $this->conn = $pdo;
            if(isset($_POST['submit'])) 
            {
                try
                { 
                    $stmt = $this->conn->prepare("SELECT studentId FROM students WHERE myid=?"); 
                    $stmt->execute([$this->myid]); 
                    if ($student_id = $stmt->fetchColumn()) 
                    {

                    } else {

                    }

                } catch(PDOException $error)
                 {
                     echo $this->sql . "<br>" . $error->getMessage();
                 }
            }
        }

        // TODO: display all plans for individual student by term. multiple plans may be displayed for a term
        // NOTE: Need ability to select plan for audit from list of plans
        // TODO: set advisor on new plan with session advisor
    }
?>