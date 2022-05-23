<?php
$dbhost='localhost:3306';
$dbuser='root';
$conn=mysqli_connect($dbhost,$dbuser,'','newDB');

    if(!$conn)
    {
        die(' Please Check Your Connection'.mysqli_error($con));
    }
?>