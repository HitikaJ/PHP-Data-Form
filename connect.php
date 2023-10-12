<?php
    $servername = "localhost";
	$username = "root";
	$password = "";
	$database = "login_db";
	
	$connect = mysqli_connect($servername,$username, $password,$database);
    if(!$connect){
        die('Connection Failed : '.mysqli_connect_error());
    }
?>    