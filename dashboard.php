<?php
session_start();
$user_id=$_SESSION['user_id'];
$name=$_SESSION['name'];
$desc=$_SESSION['desc'];
$wpm=$_SESSION['wpm'];
$cpm=$_SESSION['cpm'];
$accuracy=$_SESSION['accuracy'];
echo $name ."<br>";
echo $desc."<br>";
echo $wpm."<br>";
echo $cpm."<br>";
echo $accuracy."<br>";

$sql="SELECT * FROM progress WHERE sno='$user_id'";

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/dashboard.css">
</head>
<body>

</body>
</html>


