<?php

$hostname = 'localhost';
$username = 'root';
$userpassword = '';
$database = 'charity';

$con = mysqli_connect($hostname, $username, $userpassword, $database);

if($con){
    //echo "Database connection established";
}
else{
    echo "Database connection error!!";
}