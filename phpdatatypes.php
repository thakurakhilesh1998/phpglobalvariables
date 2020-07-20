<?php

//string type
$myName='Akhilesh Thakur';
//give information about a data type
echo var_dump($myName).'<br>';

$mobile_number=7018516983;
echo var_dump($mobile_number);

$percentage=80.18888;
echo var_dump($percentage).'<br>';

$bool=true;
echo var_dump($bool).'<br>';

$subjectlist=Array('Gk','CP');
echo var_dump($subjectlist).'<br>';

//functions
echo strlen($myName).'<br>';
echo str_word_count($myName).'<br>';
echo strrev($myName).'<br>';
echo strpos($myName,' ').'<br>';
echo str_replace('Thakur','Suryavanshi',$myName).'<br>';

//function on numericals
$number=Array(48,23,100,43,35,23);
echo max($number).'<br>';

echo min($number).'<br>';

//random number generator
echo rand().'<br>';

//random number in a range
echo rand(4,15).'<br>';

//today date is 
echo 'today date is:'.date('y/m/d').'<br>';
echo 'current time is:'.time();
?>