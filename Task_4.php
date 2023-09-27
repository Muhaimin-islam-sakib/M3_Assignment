<?php
function calculateAverageGrades($studentGrades) {
    $averageGrades = array();

    foreach ($studentGrades as $student => $grades) {
        $average = array_sum($grades) / count($grades);

        $averageGrades[$student] = $average;
    }

    foreach ($averageGrades as $student => $average) {
        echo "Student: $student, Average Grade: $average\n";
    }
}

$studentGrades = array(
    "Student 1" => array("Math" => 73, "English" => 94, "Science" => 84),
    "Student 2" => array("Math" => 93, "English" => 83, "Science" => 85),
    "Student 3" => array("Math" => 33, "English" => 92, "Science" => 46),
);

calculateAverageGrades($studentGrades);
?>
