<?php

require('db.php');
require('homepage.html');

if ($_POST['submit']) {
    $id = $_POST['id'];
    $name = $_POST['name'];

    // 2. Do a query
    $query  = "INSERT INTO staff (id, name) "; 
    $query .= "VALUES ('$id', '$name') ";
    echo $query;


    $result = mysqli_query($connection, $query);
    header('location: staff.php');
}

?>

<form action="addstaff.php" method="post">
    Name: <input type="text" name="name"> <br/>
    <input type="submit" name="submit">
</form>