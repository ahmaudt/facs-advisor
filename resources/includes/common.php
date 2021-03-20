<?php 
/**
 * escapes html in output
 */

function escape($html) {
    return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

// identify the advising term for input to form
$num_month = date("n");
if ($num_month >= 2 && $num_month < 8) {
    $advisingTerm = "Fall-".(date("Y"));
} else {
    $advisingTerm = "Spring-".(date("Y") +1);
}

if ($num_month >= 2 && $num_month < 5) {
    $currentTerm = "Spring-".(date("Y"));
} elseif ($num_month >= 4 && $num_month < 8) {
    $currentTerm = "Summer-".(date("Y"));
} else {
    $currentTerm = "Fall-".(date("Y"));
}

 

// if ($semester = "Fall " . (date("Y")))
//     $semester2 = "Spring " . (date("Y") + 1);
// if ($semester2 = "Spring " . (date("Y") +1))
//     $semester3 = "Summer " . (date("Y") +1);


$term_summer = date("n");
if ($term_summer >= 2 && $term_summer < 5)
    $semester = "Summer ";

//     if ($num_month >= 8)
// 	$semester .= date("Y") + 1;
// else
// 	$semester .= date("Y");


    @$myId = "";
    $matricTerm = "";
    $firstName = "";
    $lastName = "";
    $major = "";
    $proTrack = "";
    $gradTerm = "";
    $planNotes = "";
?>

