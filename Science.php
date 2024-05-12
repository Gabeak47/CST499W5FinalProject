<?php
    include_once 'Classes_DB.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
</head>
</head>
<nav>

<body>
    <h1>Student Portal</h1>
    <a href="Homepage.php">Home</a>
    <br />
    <a href="Contact.php">Contact Us</a>
    <br />
    <a href="Login.php">Login</a>
    <br />
    <a href="Registration_page.php">Registration</a>
    <br />
    <a href="Classes.php">Classes</a>
    <br />
<?php

Echo "Science is a way of learning about what is in the natural world, how the natural world works, and how the natural world got to be the way it is."
?>

<form action-"Classes.php" method="POST">

<button type="register" name="register">Register</button>
<?php
if(isset($_POST['register']))
{
     $SQL = "INSERT INTO table_name (Class_Number, Class_Name) VALUES (1, English 101)";
     $result = mysqli_query($SQL);
}
?>
<button type="delete" name="delete">Delete Class</button>
<?php
if(isset($_POST['delete']))
{
     $SQL = "DELETE FROM table_name (Class_Number, Class_Name) VALUES (1, English 101)";
     $result = mysqli_query($SQL);
}
?>