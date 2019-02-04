<?php
$x=10;
$y=20;
function mytest(){
    global $x,$y;
    $y=$x+$y;
}
mytest();
echo $y;
echo "today is ".date("Y/m/d");
&copy; 2010-echo date("Y");
?>