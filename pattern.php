<?php
$m=readline("enter m value:");
$n=readline("enter n value:");
$value=1;
for($i=1;$i<=$n;$i++)
{
for($j=0;$j<$m;$j++)
{
echo "$value";
$value=$value+$n;
}
$value=$i+1;
echo"\n";
}
?>