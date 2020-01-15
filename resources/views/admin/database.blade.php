<?php

$link = mysqli_connect("localhost", "root", "", "event");
//mysqli_connect("127.0.0.1:3306", "u218414932_root", "gaplink2010173158", "u218414932_gap");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

?>