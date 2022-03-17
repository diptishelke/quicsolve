<?php


$x="5";
$y="3";
$z=bcsub($x,$y);
echo $z;

$b=bcmul($x,$y);
echo"<br>", $b;

$c=div($x,$y);
echo"<br>", $c;
function div($x,$y){
$z=$x/$y;
echo "<br>",$z;
}
div(20,2);

function sum($x,$y){
$z=$x+$y;
echo "<br>",$z;
}
sum(10,20);
sum(30,6);

?>