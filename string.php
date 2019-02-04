<?php
echo "program for reverse number";
$revnum=0;
$num = readline();
while($num>1)
{
$rem=$num%10;
$revnum=($revnum*10)+$rem;
$num=$num/10;
}
echo"\n\rReverse number for given number is :$revnum";
?>