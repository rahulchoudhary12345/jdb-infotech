<?php
$servername="localhost";
$username="root";
$password="";
$dbname="jdb";
$conn=new mysqli($servername,$username,$password,$dbname);
if ($conn->connect_error) {
  die("connection failed:".$conn->connect_error);
}
else{
  echo "connection successfully";
}
$id=$_GET['id'];

$delete = "DELETE from slider WHERE id='$id'";
$run_update=mysqli_query($conn, $delete);
header("Location: jdbsliderrecord.php");

?>