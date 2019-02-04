<?php
$cars=array("volvo","benz","bmw");
foreach ($cars as $value){
echo "$value";
}
$colors=array("red","green","blue");
echo "i like $colors[0] $colors[2]";
$colors=array("red","green","blue");
sort($colors);
$length=count($colors);
for($x=0;$x<$length;$x++){
echo $colors[$x];
echo "\n";
}
?>