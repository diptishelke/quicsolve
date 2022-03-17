<?php
function sum($arr,$s)
{
$sum=0;
for($i=0;$i<$s;$i++)
$sum+=$arr[$i];
return $sum;
}
$arr=array(3,5,7,5,8);
$s=sizeof($arr);
echo "sum of given array is",sum($arr,$s);
?>