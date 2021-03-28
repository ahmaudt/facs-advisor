<?php
$rootDir = dirname(__DIR__) . "";
$srcDir = dirname(__DIR__) . DIRECTORY_SEPARATOR . '/vendor';
require $srcDir . DIRECTORY_SEPARATOR . 'autoload.php';
include $rootDir . "/resources/includes/header.php";
include $rootDir . "/resources/includes/common.php";
include $rootDir . "/resources/includes/Parsedown.php";
$Extra = new ParsedownExtra();





/**
 * database connection config
 * 
 * 
 * 
 */

?>
<!doctype html>
<html lang='en'>
  <head>
    <title></title>
    <!-- Required meta tags -->
    <meta charset='utf-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1, shrink-to-fit=no'>
    <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
    <link rel='stylesheet' href='https://maxst.icons8.com/vue-static/landings/line-awesome/font-awesome-line-awesome/css/all.min.css'>
    <link rel='stylesheet' href='https://maxst.icons8.com/vue-static/landings/line-awesome/line-awesome/1.3.0/css/line-awesome.min.css'>
    <!-- Bootstrap CSS -->
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
    <style type='text/css'>
        a {color:azure;}
        a:hover {color:ghostwhite;}
        
    </style>
  </head>
  <body>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src='https://code.jquery.com/jquery-3.3.1.slim.min.js' integrity='sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo' crossorigin='anonymous'></script>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js' integrity='sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1' crossorigin='anonymous'></script>
    <script src='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js' integrity='sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM' crossorigin='anonymous'></script>
<div class='container'>

    <table class='table table-borderless table-sm border-0'>
        <tbody>
            <tr class='my-0 py-0'>
                <td><input form='plan' class='form-control form-control-sm rounded-0' type='text' name='student[firstName]' placeholder='First Name'></td>
                <td><input form='plan' class='form-control form-control-sm rounded-0' type='text' name='student[lastName]' placeholder='Last Name'></td>
                <td><input form='plan' class='form-control form-control-sm rounded-0' type='text' name='student[myId]' placeholder='MyID'></td>
                <td><input form='plan' class='form-control form-control-sm rounded-0' type='text' name='student[ugaId]' placeholder='UGA 81x'></td>
                <td><input form='plan' class='form-control form-control-sm rounded-0' type='text' name='student[major]' placeholder='Major'></td>
            </tr>
            <tr class='my-0 py-0'>
                <td><input form='plan' class='form-control form-control-sm rounded-0' type='text' name='student[advising_session][currentTerm]' value='<?=$currentTerm?>'></td>
                <td><input form='plan' class='form-control form-control-sm rounded-0' type='text' name='student[advising_session][advisingTerm]' value='<?=$advisingTerm?>'></td>
                <td><input form='plan' class='form-control form-control-sm rounded-0' type='text' name='student[matricTerm]' placeholder='Matriculation Term'></td>
                <td><input form='plan' class='form-control form-control-sm rounded-0' type='text' name='student[gradTerm]' placeholder='Graduation Term'></td>
                <td><input form='plan' class='form-control form-control-sm rounded-0 toCalculate' type='text' name="earnedHrs" id="earned" placeholder='earned hours' /></td>
                <td><input form='plan' class='form-control form-control-sm rounded-0 total text-weight-bold' type='text' name='remainingHrs'/></td>
            </tr>
        </tbody>
    </table>


<form class='form' id='plan' action='test_output.php' method='post'>
    <div class='col-lg-5' >
    <div class='form-group'>
    <?php
    for($p = 0; $p <= 8; $p++) { ?>
    <?php
    echo 
    "<div class='form-row'>
        <div class='col'>
            <select name='petition[$p]' class='py-1'>
                <option value='' selected>Select Petition Type</option>
                <option value='Permit-Override' name='permit_override'>Permit-Override</option>
                <option value='Exception' name='exception'>Exception</option>
                <option value='Substitution' name='substitution'>Substitution</option>
                <option value='Waiver' name='waiver'>Waiver</option>
                <option value='Curriculum Change' name='curriculum_change'>Curriculum Change</option>
                <option value='Other' name='other'>Other</option>
            </select>
        </div>
        <div class='col px-0'>
            <input class='form-control form-control-sm rounded-0' name='petition[$p][item]' placeholder='Item'>
            <input type='hidden' name='requested' value='requested'>
        </div>
        <div class='col'>
            <input class='form-control form-control-sm rounded-0' name='petition[$p][action]' placeholder='Action'>
        </div>
        <div class='col'>
            <input class='form-control form-control-sm rounded-0' name='petition[$p][detail]' placeholder='Info'>
        </div>
    </div>";
    }
    ?>
</div>
        <div class='form-group'>
        <div class='row'>
            <div class='col-lg-7 mb-5'>
                <?php
                // $new_plan = new AcademicPlan($_POST['advising_session']['currentTerm'], $_POST['advising_session']['advisingTerm'], $_POST['recommended_courses'], $_POST['alt_courses'], $_POST['petition']);
                for($i = 1; $i <= 8; $i++) { ?>
                <?php   
                    // if (!isset($_POST['recommended_courses'][$i]) || empty ($_POST['recommended_courses'][$i])) {
                    //     echo "";
                    // } else {
                echo 
                        "<div class='form-row'>
                            <div class='col-6'>
                                <input class='typehead form-control form-control-sm mx-0 my-0 py-0 rounded-0' type='text' name='recommended_courses[$i]' placeholder='register for'>
                            </div>
                            <div class='col-6'>
                                <input class='typehead form-control form-control-sm my-0 py-0 rounded-0' type='text' name='alt_courses[$i]' placeholder='options if full'>
                            </div>
                        </div>";
                    // }
                } 
                ?>
            </div>
        </div>
    </div>
        <button type='submit' class='btn btn-primary' name='submit' value='submit' >Submit</button>
    </form>    
    <?php

//     if(isset($_POST['submit'])) 
//     {
//         try 
//         {
//             $host = "localhost";
//             $username = "root";
//             $password = "ez?cbFeYiP4";
//             $dbname = "facs_dev";
//             $dsn = "mysql:host=$host;dbname=$dbname";
//             $options = array(
//                 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
//             );
//             $connection = new PDO($dsn, $username, $password);
//             $recs = implode(", ", $new_plan->recommended_courses);
//             $alts = implode(", ", $new_plan->alt_courses);
//             $term_now = $new_plan->current_term;
//             $advised_for = $new_plan->advising_term;
//             $sql = "INSERT INTO students(`studentId`, `preferred_name`, `last_name`, `myid`, `majorId`, `matric_term`, `grad_term`) 
//                     VALUES (NULL, '$add_student->preferredName', '$add_student->lastName', '$add_student->myid', (SELECT `majorId` FROM `majors` WHERE '$major' = name), (SELECT `termId` FROM `academic_terms` WHERE '$add_student->matricTerm' = CONCAT(`term`, ' ', `year`)), (SELECT `termId` FROM `academic_terms` WHERE '$add_student->gradTerm' = CONCAT(`term`, ' ', `year`));
//                     INSERT INTO student_plans(`recommended_courses`, `alt_courses`, `current_term`, `advised_term`)
//                     VALUES ('$recs', '$alts', (SELECT `termId` FROM `academic_terms` WHERE '$term_now' = CONCAT(`term`, ' ', `year`)), (SELECT `termId` FROM `academic_terms` WHERE '$advised_for' = CONCAT(`term`, ' ', `year`)))";

//             // TODO: Check to see if student already exists. If student exists, pull info from database and show in form.

//             // TODO: Insert data from petition into database
            

//             $statement = $connection->prepare($sql);
//             $statement->execute();
//             // $statement->execute($new_user);
//         } 
//         catch(PDOException $error) 
//         {
//             echo $sql . "<br>" . $error->getMessage();
//         }
//     }
    
    
    
//     echo "<pre>"; var_dump($add_student) ;echo "</pre>";


   
// echo "<pre>";var_export($new_plan);echo "</pre>";
// echo "<pre>";var_export($new_plan->recommended_courses);echo "</pre>";

    ?>
</div>
