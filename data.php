<?php
include("connect.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

    <title>Database</title>
</head>
<body>

<form method="post">
    <label for="filter">Filter by Username:</label>
    <input type="text" name="filter" id="filter" placeholder="Enter username">
    <input type="submit" name="applyFilter" value="Apply Filter">
</form>

<form method="get">
    <label for="sort">Sort by:</label>
    <select name="sort" id="sort">
        <option value="id">Sno.</option>
        <option value="username">Username</option>
        <option value="password">Password</option>
    </select>
    <input type="submit" name="applySort" value="Apply Sort">
</form>

<table>
    
    <tr>
        <th>Sno.</th>
        <th>Username</th>
        <th>Password</th>
        <th>Update</th>
        <th>Delete</th>
    </tr>
    <?php
    $query = "SELECT * FROM `login`";
    

    if (isset($_POST['applyFilter'])) {
        $filter = mysqli_real_escape_string($connect, $_POST['filter']);
        $query .= " WHERE username LIKE '%$filter%'";
    }

    
    if (isset($_GET['applySort'])) {
        $sort = $_GET['sort'];
        $query .= " ORDER BY $sort";
    }

    $result = mysqli_query($connect, $query);
    $sno=0;
    while ($row = mysqli_fetch_array($result)) {
        $sno=$sno+1;
        ?>
        <tr>
            <td><?php echo $sno ?></td>
            <td><?php echo $row['username']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><a class="btn btn-primary" href="edit.php?id=<?php echo $row['id']; ?>" role="button">Update</a></td>
            <td><a class="btn btn-primary" href="delete.php?del=<?php echo $row['id']; ?>" role="button">Delete</a></td>
             
            
        </tr>
        <?php
    }
    ?>
</table>
<a class ="btn btn-primary" href="login.html" role="button"> Add New </a>
   
</body>
</html>
