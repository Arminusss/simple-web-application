<?php
error_reporting(E_ERROR | E_PARSE);
$url="user panel.php";
$servername="localhost";
$username="root";
$password="";
$database="project";
$conn=mysqli_connect($servername,$username,$password,$database);
if($conn){
    echo"  database connection success";
}
else{
    die("error" . mysqli_connect_error());
}
$txtUsername = $_POST['txtUsername'];
$txtPassword = $_POST['txtPassword'];
$sql = "select *from user_info where username = '$txtUsername' and password = '$txtPassword'";
$rs = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($rs, MYSQLI_ASSOC);  
$count = mysqli_num_rows($rs);  
  
if($count == 1){  
    echo "<h1><center> Login successful </center></h1>";
    echo "<h2><center><a href='$url'>start posting here</a></center><h2>";
    
}  
else{  
    echo "<h1> Login failed. Invalid username or password.</h1>";  
}     