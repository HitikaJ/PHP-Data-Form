<?php
    include("connect.php");
    
    if(isset($_POST['update'])){
        
        $id=$_GET['id'];
        $name=$_POST['name'];
        $pass=$_POST['pass'];

        $query ="UPDATE `login` SET `username` = '$name', `password` = '$pass' WHERE `login`.`id` = '$id'";
        $result = mysqli_query($connect,$query);  
        
        if($result){
            header("location: /aayushbharat/data.php");
        }
        else{
            echo "error";
        }  

    }
?>    
