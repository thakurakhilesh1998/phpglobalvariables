<h1>    
<?php
echo "hello<br>";

//constants
define('name','akhilesh thakur');
echo name;
?>
</h1>
<?php
//varibales in
$name="thakur akhilesh<br>";
echo $name;
$number=7018516983;
echo 'my name is '.$name.' and my phone number is:'.$number.'<br>';
?>

<?php

//array example
$city_name=Array('Shimal','Mandi','Bilaspur','Kangra');

for($i=0;$i<sizeof($city_name);$i++)
{
    echo 'my city is: '.$city_name[$i].'<br>';
}
?>

<?php
    //Associative array
    $nameage=Array('Akhilesh'=>22,'Ram'=>21,'Thakur','24');
    echo $nameage['Akhilesh'].'<br>';
    //echo sizeof($nameage);
?>
<?php
//define function
function display()
{
    return 'Hello it is php function'.'<br>';
}

//calling funciton
echo display();

//for each loop example

$colorlist=Array('Red','Black','White','Green');
foreach($colorlist as $colorsname)
{
    echo 'Colors are: '.$colorsname.'<br>';
}
?>



