<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="/lgm/css/successful.css">
</head>
<body>
<div class="container">

    <?php
session_start();
$db_hostname="127.0.0.1";
$db_username="root";
$db_password="";
$db_name="quick";
$conn=mysqli_connect($db_hostname,$db_username,$db_password,$db_name);
if(!$conn){
    echo "Connection failed:".mysqli_connect_error();
    exit;
}
$username=$_POST['username'];
$password=$_POST['password'];
$sql="SELECT * FROM users WHERE username='$username' AND password='$password'";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo "Error:".mysqli_error($conn);
    exit;
}
$row=mysqli_fetch_assoc($result);
if($row)
{
    echo "<h1 class='message'>Hello <span id='owner'>".$row["name"]."</span>.<br>";
    echo "You are successfully logged in.</h1>";
    $_SESSION['user_id']=$row['sno'];
    $_SESSION['name']=$row['name'];
    $_SESSION['desc']=$row['description'];
    
    header("location:/quick/game.php");
    ?>
    <?php

}else{
    echo "Login Failed";
}

mysqli_close($conn);
?>
</div>
    
</body>
</html>
