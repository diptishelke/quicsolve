<?php
$array=array("dipti","trupti","tanvi","nilesh");
echo var_dump($array);
echo "<br/>",var_dump(implode(", ",$array));
if(in_array("trupti",$array))
{
echo "<br/>","present";
}else{
echo "absent";
}
$text="hii my name is dipti";
echo"<br/>" ,$text;
echo"<pre>";
print_r(explode(',',$text));

echo"<br>".count($array);


?>