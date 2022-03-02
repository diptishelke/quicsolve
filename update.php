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


?><form method="post" action="sqlsubmit.php">
    <label>Firstname</label>
    <input type='text' name='firstname' />

    <label>Lastname</label>
    <input type='text' name='lastname' />

    <label>Address</label>
    <input type='text' name='address' />

    <label>City</label>
    <input type='text' name='city' />
<label>Gender</label>
    <input type="radio" name="gender" value="male"/>Male
<input type="radio" name="gender" value="female"/>Female<br/><br/>
Hobbies<input type="checkbox" name="hobbies" value="cricket"/>Cricket
<input type="checkbox" name="hobbies" value="sleeping"/>Sleeping
<input type="checkbox" name="hobbies" value="dancing"/>Dancing
<input type="checkbox" name="hobbies" value="singing"/>Singing<br/><br/>

    <input type='submit' value="Add" />
</form>