<?php
$url="simple login.php";
error_reporting(E_ERROR | E_PARSE);
$servername="localhost";
$username="root";
$password="";
$database="project";
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn){
    echo" connection success";
}
else{
    die("error" . mysqli_connect_error());
}
$txtUsername = $_POST['txtUsername'];
$txtPassword = $_POST['txtPassword'];
$txtEmail = $_POST['txtEmail'];
$sql = "INSERT INTO `user_info` ( `username`, `password`, `email`) VALUES ( '$txtUsername', '$txtPassword', '$txtEmail')";
$rs = mysqli_query($conn, $sql);
if($rs)
{
	echo "<h1><center> sign up successful </center></h1>";
    echo "<h2><center><a href='$url'>sign in here</a></center><h2>";
}
else{
    echo "failed";
}