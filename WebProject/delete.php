<?php
//including the database connection file
require_once("config.php");
 
//get id of the record from url using supergloabl variable $_GET['id']
$id = $_GET['id'];
 
//deleting the row from table
$sql = "Delete from users where id=$id";
$result = mysqli_query($mysqli,$sql);

//redirecting to the home page (index.php in our case)
header("Location: index.php");
?>