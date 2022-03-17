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
/* This code is used to connect with database */
$sql = "INSERT INTO Person(FirstName, LastName, Address, City,Gender,Hobbies)
VALUES ('".$_POST['firstname']."', '".$_POST['lastname']."', '".$_POST['address']."', '".$_POST['city']."','".$_POST['gender']."','".$_POST['hobbies']."')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
$sql="SELECT*FROM person;";
$data=mysqli_query($conn,$sql);
while($row=mysqli_fetch_assoc($data)){
$records[]=$row;

echo "<pre>";
print_r($row);
}

mysqli_close($conn);
?>


<table class="table"border="1">
<thead>
<tr>
<th>ID</th>
<th>FirstName</th>
<th>LastName</th>
<th>Address</th>
<th>City</th>
<th>Gender</th>
<th>Hobbies</th>
<th>Action</th>
</tr>
</thead>
<tbody>
<?php foreach($records as $val){?>
<tr>
<td><?=$val['personID']?></td>
<td><?=$val['FirstName']?></td>
<td><?=$val['LastName']?></td>
<td><?=$val['Address']?></td>
<td><?=$val['City']?></td>
<td><?=$val['Gender']?></td>
<td><?=$val['Hobbies']?></td>
 
<td><a href="update.php?personID=<?=$val['personID'];?>,fn=<?=$val['FirstName'];?>,ln=<?$val['LastName'];?>,ad=<?=$val['Address'];?>,ct=<?$val['City'];?>,gd=<?=$val['Gender'];?>,hb=<?=$val['Hobbies'];?>">Edit/update</a></td>
<td><a href="delete.php?ID<?=$val['personID'];?>">delete</a></td>
<?php
}?>
</tbody>
</table>