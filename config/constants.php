<?php 
    //Start Session
    session_start();

    //Create constants to store Non Repeating Values
    define('SITEURL', 'http://localhost:81/food-order/');
    define('LOCALHOST', 'localhost');
    define('DB_USERNAME', 'root');
    define('DB_PASSWORD', '');
    define('DB_NAME', 'food-order');

    $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error()); // db connection | root = username, '' = password
    $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error()); //Selecting db

?>