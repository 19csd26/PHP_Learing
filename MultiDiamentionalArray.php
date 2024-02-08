<?php
$students = array(
    "amit" => array(
        "Physics" => 77,
        "Chemistry" => 86,
        "Maths" => 84
    ),
    "aman" => array(
        "Physics" => 77,
        "Chemistry" => 86,
        "Maths" => 84
    ),
    "sumit" => array(
        "Physics" => 77,
        "Chemistry" => 86,
        "Maths" => 84
    )
);

foreach ($students as $student => $subjects) {
    foreach ($subjects as $subject => $mark) {
        echo $student . " has scored " . $mark . " in " . $subject . "<br>";
    }
}
