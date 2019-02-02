<?php
$numberOfQuestions = readline("How many questions would you like to answer: ");
echo "I will give you a total of $numberOfQuestions questions.\n";

for($i=1;$i<=$numberOfQuestions;$i++)
{
    $a=rand(20,50);
    $b=rand(10,40);
    $answer=$a+$b;
    echo "\n $a+$b=?";
    $c=readline();

$h=array
(
    array($i,$answer,$c),
    
);
echo $h=[0][0].":correct answer: ".$h[0][1].",user's answer: ".$h[0][2]."\n";
}

?>