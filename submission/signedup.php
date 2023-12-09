<?php
    session_start();
    $db_hostname="localhost";
    $db_username="root";
    $db_password='';
    $db_name= "quick";
    $conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
    if(!$conn){
        echo "Connection Failed Occurred :".mysqli_connect_error();
        exit;
    }
$name=$_POST['name'];
$username=$_POST['username'];
$password=$_POST['password'];
$description=$_POST['description'];

$sql="INSERT INTO users(name,username,password,description) VALUES ('$name','$username','$password','$description')";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo ("Error:".mysqli_error($conn));
    exit;
}
else{
    echo "<h1 class='message'>Registration Successful</h1>";
}
mysqli_close($conn);
?>    
