
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Portal</title>
</head>
<?php
echo "All Class Registration"
?>
<br/>
<a href="Science.php">Science</a>
<br />
<a href="Math.php">Math</a>
<br />
<a href="English.php">English</a>
<br />
<?php
$sql = "SELECT * FROM classes;";
$results = mysqli_query($conn); 
    ?>
<br />
<br />
<br />
<?php
echo strlen ("Scheduled Classes");
    include_once 'Classes_DB.php';
    $result = mysqli_query($conn,"SELECT * FROM table_name");

?>