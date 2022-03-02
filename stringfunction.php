<?php 
$txt= addcslashes("Hello World!","W");
echo($txt); 
$str = addslashes('What do you mean?');
echo"<br/>",($str); 
$arr = array('Hello','World!','Beautiful','Day!');
echo "<br/>",join(" ",$arr);

$str = "Hello World!";
echo $str . "<br>";
echo ltrim($str,"Hello");
?>