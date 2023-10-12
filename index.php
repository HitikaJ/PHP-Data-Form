<?php
  
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$name=$_POST['name'];
    $pass=$_POST['pass'];
	
	$servername = "localhost";
	$username = "root";
	$password = "";
	$database = "login_db";
	
	$connect = mysqli_connect($servername,$username, $password,$database);
    if(!$connect){
        die('Connection Failed : '.mysqli_connect_error());
    }
     else{
        $query ="INSERT INTO `login` (`username`, `password`, `date`) VALUES ( '$name' , '$pass', current_timestamp())";
        $result = mysqli_query($connect,$query);
        if($result){
            header("location: data.php");

        }
        else{
            echo "error";
        }
        }
	}
?>

