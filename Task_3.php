<?php
function sortGradesDescending($grades) {
    rsort($grades);
    
    print_r($grades);
}

$grades = array(68, 42, 76, 85, 93);

sortGradesDescending($grades);
?>
