<?php

function func($arg)  {
 $result = 0;
 for($i=0; $i<$arg; $i++) {
    // print($i);
   $result = $result + $i;
   print($result);
 }
 return $result;
}
echo func(5);