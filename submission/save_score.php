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
$user_id=$_SESSION['user_id'];
$wpm=$_POST['wpm'];
$cpm=$_POST['cpm'];
$accuracy=$_POST['accuracy'];

$sql="INSERT INTO progress (sno,wpm,cpm,accuracy) VALUES ('$user_id','$wpm','$cpm','$accuracy')";
$result=mysqli_query($conn,$sql);
if(!$result){
    echo ("Error:".mysqli_error($conn));
    exit;
}
else{
    echo "Score saved successfully";
}
$sql1="SELECT * FROM progress WHERE sno='$user_id'";
$result1=mysqli_query($conn,$sql1);
if(!$result1){
    echo ("Error:".mysqli_error($conn));
    exit;
}
$row=mysqli_fetch_assoc($result1);
if($row){
    echo "Hii Every thing is going fine";
    $_SESSION['wpm']=$row['wpm'];
    $_SESSION['cpm']=$row['cpm'];
    $_SESSION['accuracy']=$row['accuracy'];

}
?>