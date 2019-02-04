<?php
$numberOfQuestions = readline("How many questions would you like to answer: ");
echo "I will give you a total of $numberOfQuestions questions.\n";
$q=array("question"=>array(),"correctanswer"=>array(),"useranswer"=>array());
for($i=1;$i<=$numberOfQuestions;$i++)
{
    $a=rand(20,50);
    $b=rand(10,40);
    $answer=$a+$b;
    echo "\n $a+$b=?";
    $c=readline();
    e
}
$questionnumber=1;
   for($i=0;$i<$numberOfQuestions;$i++)
   {
    echo"\n YOUR SCORECARD:";
    echo"\n$questionnumber. $a+$b=?";
    echo"\n your answer is:";
    echo"\n correct answer is ";
   }
   ?>