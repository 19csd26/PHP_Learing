<?php
    //this is an example of an associative array
    //is this we store the data in key & value pairs
    $year = array("AMAN"=>2001,"RAM"=>2000,"SHAYAM"=>2002);
    foreach($year as $k => $v) {
        //nl2br() is used to print in new line
        echo nl2br("". $k ."". $v ."\r\n");
    };
    foreach($year as $k => $v) {
        //br tag is used to print in new line
        echo ("". $k ."". $v ."<br>");
    };

?>
