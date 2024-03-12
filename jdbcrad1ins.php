<?php
$servername="localhost";
$username="root";
$password="";
$dbname="jdb";
$conn=new mysqli($servername,$username,$password,$dbname);
if($conn->connect_error){
	die("connection failed:".$conn->connect_error);
}
else{
	echo "connection successfully";
}
if(isset($_POST['submit'])){

	
   $title=$_POST['title'];
    $image=$_FILES['image']['name'];
	$description=$_POST['description'];
	$query = "INSERT INTO card1(title,image,description)VALUES('$title','$image','$description')";
$query_run = mysqli_query($conn,$query);


if ($query_run) {
	move_uploaded_file($_FILES["image"]["tmp_name"], "jdbimg/".$_FILES["image"]["name"]);
	header('Location: jdbcard1.php');
}
}
?>