<!DOCTYPE html>
<html lang="em">
    <head>
    <link rel="stylesheet" href="home_page_server_style.php">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title> Delneveshteh...</title>
    <meta charset="utf-8">
    </head>
</html>
<?php
$url="home page.php";
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
$sql = "SELECT *FROM post";
$result = $conn->query($sql);

echo"<table> <center>";

while($row=mysqli_fetch_array($result)){
  echo "<h2><center><tr><td>" .htmlspecialchars($row['post_id']). "</td><td>" .htmlspecialchars($row['post_title']). "</td><td>" .htmlspecialchars($row['post_message']). "</td><td>" .htmlspecialchars($row['post_author']). "</td><td>" .htmlspecialchars($row['post_date']). "</td></tr></center><h2>";
}

echo"</table> </center>";

$conn->close();
echo "<h2><center><a href='$url'>return to home page</a></center><h2>";