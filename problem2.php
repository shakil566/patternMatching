<?php

function countWord($str, $word)
{
    
    $arr = explode(" ", $str);
 
    // search pattern
    $count = 0;
    for ($i = 0; $i < sizeof($arr); $i++)
    {
         
    // if pattern match , count increment
    if ($word == $arr[$i])
        $count++;
    }
 
    return $count;
}

$str = "tadadattaetadadadafa";
$word = "dada";
echo (countWord($str, $word));
 
?>