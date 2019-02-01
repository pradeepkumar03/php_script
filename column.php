<?php
$n=readline("enter the row value");
$m=readline("enter the column value");
$value=1;
for($i=1;$i<=$n;$i++)
{
    for($j=1;$j<=$m;$j++)
       {
        echo "$value";
        $value=$value+$n;
         }
         echo "\n";
         $value=$i+1;
        }
?>