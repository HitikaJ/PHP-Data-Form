<?php
include("connect.php");

$id=$_GET["id"];
$query ="SELECT * FROM `login` WHERE `id` = '$id'";
$result = mysqli_query($connect,$query);
while($row=mysqli_fetch_assoc($result)){

    $id_update=$row['id'];
    $username_update=$row['username'];
    $password_update=$row['password'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Form </title>
    <link rel="stylesheet" type="text/css" href="style.css">
    
</head>
<body>
    <div class="container">
        <div class="login-form">
            <h2>Update Deatils of Id <?php echo $id_update?></h2>
            <form action="update.php?id=<?php echo $id_update ?>" method="post">
                <div class="mb-3">
                    <label for="username" class="form-label">Username</label>
                    <input type="text" class="form-control" id="username" name="name" value="<?php echo $username_update?>">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" name="pass" value="<?php echo $password_update?>">
                </div>
                <button class="btn btn-primary" name="update">Update</button>
            </form>
       
        </div>
    </div>
    
</body>    

</html>
