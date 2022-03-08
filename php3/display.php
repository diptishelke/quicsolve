<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "quicsolve";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if(isset($_POST['displaySend'])){

if(isset($_POST['displaySend'])){
    $table='<table class="table">
    <thead class="thead-dark">
    <tr>
    <th scope="col">id</th>
    <th scope="col">Programmer Name</th>
    <th scope="col">Programmer Skill</th>
    </tr>
    </thead>';
          


    $sql="select * from `programmer`";
    $result=mysqli_query($conn,$sql);
    while($row=mysqli_fetch_assoc($result)){
        
        $id=$row['programmer_id'];
        $name=$row['programmer_name'];
        $skill=$row['programmer_skill'];
        $table.='<tr>
        <td scope="row">'.$id.'</td>
        <td>'.$name.'</td>
        <td>'.$skill.'</td>
        </tr>';
        
}
$table.='</table>';
echo $table;
}
}
?>