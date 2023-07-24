<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "login_sample_db";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpassword,$dbname)) //if it not works it can (die)
{
    die("failed to connect!"); //if connection does not connect it can show this 
}