<?php
    include("connect.php");
    
    if(isset($_GET['del'])){
        
        $id_del=$_GET['del'];
        $query ="DELETE FROM `login` WHERE `login`.`id` = '$id_del'";
        $result = mysqli_query($connect,$query);  
        
        if($result){
            header("location: /aayushbharat/data.php");
        }
        else{
            echo " error";
        }  
    }
    
?>    
