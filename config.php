<?php

session_start();

$conn = mysqli_connect("localhost", "root", "labas", "blog_php");

if (!$conn){
        die("Error connecting to database: " . mysqli_connect_error());
}

define ('ROOT_PATH', realpath(dirname(__FILE__)));
define('BASE_URL', 'http://192.168.1.187/Ca/');







