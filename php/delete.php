<?php

/* This code is used to connect with database */
$servername = "localhost";
$username = "root";
$password = "";

$conn=new mysqli($servername,$username,$password);
if ($conn->connect_error){
die("connection failed: " .$conn->connect_error);
}
echo"connected succesfully";
$dbname = "quicsolve";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);



// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
$sql="DELETE from person where ID=".$GET['personID'];
echo $sql;exit;
if (mysqli_query($conn,$sql)){
echo "new record created sucessfully";
header('location:sqlsubmit.php');
}else{
echo "Error:".$sql."<br>".mysqli_error($conn);
}