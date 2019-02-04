<?php
$n = readline("Enter number of questions to ask:");
$count = 0;
$questions = array("totque"=>array(),"totans"=>array(),"totuserans"=>array());

for($i=1; $i <= $n; $i++)
{
    $a = rand(5,10);
    $b = rand(10,20);
    $question = $a."+".$b."=?";
    array_push($questions['totque'],$question);
    $ans = $a+$b;
    array_push($questions['totans'],$ans);
    echo $question;
    echo"\n";
    $userans = readline();
    array_push($questions['totuserans'],$userans);
        if($ans==$userans)
            {
              echo "your answer is correct!!\n";
              $count++;
            }
         else
           {
             echo "your answer is wrong\n";
           }
}

echo "\nYour Score Card";
$no = 1;
for($i=0; $i < $n; $i++)
{
    echo "\n$no.".$questions['totque'][$i];
    echo"\nyour answer:".$questions['totans'][$i];
    echo "\nCorrect answer is:".$questions['totuserans'][$i];
     $no++; 
}
echo "\nyour  total score is:$count";
?>