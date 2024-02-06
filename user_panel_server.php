<?php
$url="home_page_server.php";
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
$post_title = $_POST['title'];
$post_message = $_POST['message'];
$post_writer = $_POST['author'];
$date = date("Y-m-d H:i:s");
$sql = "INSERT INTO `post` ( `post_title`, `post_message`, `post_author`, `post_date`) VALUES ( '$post_title', '$post_message', '$post_writer', '$date')";
$rs = mysqli_query($conn, $sql);
if($rs)
{
	echo "<h1><center> new post has been added </center></h1>";
    echo "<h2><center><a href='$url'>view your post here</a></center><h2>";
}
else{
    echo "failed";
}