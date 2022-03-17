<?php
if(count($_POST)>0)
{    
include 'db.php';
$name = $_POST['name'];

$email = $_POST['email'];
$address = $_POST['address'];
$city = $_POST['city'];
$pincode= $_POST['pincode'];
if(empty($_POST['id'])){
$query = "INSERT INTO user (name,email,address,city,pincode)
VALUES ('$name','$email','$address','$city','$pincode')";
}else{
$query = "UPDATE user set id='" . $_POST['id'] . "', name='" . $_POST['name'] . "', email='" . $_POST['email'] . "',address='" . $_POST['address'] . "',city='" . $_POST['city'] . "', pincode='" . $_POST['pincode'] . "' WHERE id='" . $_POST['id'] . "'"; 
}
$res = mysqli_query($dbCon, $query);
if($res) {
echo json_encode($res);
} else {
echo "Error: " . $sql . "" . mysqli_error($dbCon);
}
}
?>