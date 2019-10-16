<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP HOMEWORK!</title>
</head>
<body>
<h5>No.1</h5>
<?php

$var ='<h3>PHP Tutorial</h3>
PHP, an acronym for Hypertext Preprocessor, is a widely-used open source general-purpose scripting language. It is a cross-platform, HTML embedded server-side scripting language and is especially suited for web development.
Go to the PHP Tutorial.
';
echo "$var";

?>

<hr>
<h5>No.2</h5>

<?php
$d = "A00";

echo ++$d."<br>";
echo ++$d."<br>";
echo ++$d."<br>";
echo ++$d."<br>";
echo ++$d."<br>";
?>

<hr>
<h5>No.3</h5>

<?php

$x = 16;

echo sqrt($x);

?>

<hr>
<h5>No.4</h5>

<?php

$str = 'PHP Exercises';
printf('Input：%s<br>', $str);

$arr = explode(' ', $str);
while (($check = array_pop($arr)) !== NULL) {
 if (trim($check) === '') continue;
 printf('Output：%d<br>', strlen($check));
 break;
}

?>

<hr>
<h5>No.5</h5>
<?php

$url = 'https://www.google.co.jp';
$html = '<a href="'.$url.'" target="_blank">Google</a>';

echo $html;

?>

<hr>
<h5>No.6</h5>
<?php

$z=5;

if($z % 2 == 0){
    echo "Even";
}else{
    echo "Odd";
}

?>
<hr>
<h5>No.7</h5>
<?php

$fuel = 21;
  echo $fuel > 10? "$fuel is greater than 10 ":"$fuel is smaller than 10";
  echo "<br>";
  echo $fuel > 20? "$fuel is greater than 20 ":"$fuel is smaller than 10";
  echo "<br>";
  echo $fuel > 30? "$fuel is greater than 30 ":"$fuel is smaller than 10";
  echo "<br>";

?>

<hr>
<h5>No.8</h5>
<?php

$a = 30 ;
$b = 7;

if($a > $b)
echo "a is bigger than b<br>";

if($a > $b){
    echo $a. " is greater than ".$b. "<br>";
    $c = $b;
    $b = $a;
    $a = $c;
    echo "a=".$a.",b=".$b;
}

?>

<hr>

<h5>No.9 2019/10/16↓</h5>
<?php

$color = array('white', 'green', 'red', 'blue', 'black');
echo "The memory of that scene for me is like a frame of film forever frozen at that moment: the ".$color[2]." carpet, the ".$color[1]." lawn, the ".$color[0]." house, the leaden sky. The new president and his first lady. - Richard M. Nixon"

?>

<hr>

<h5>No.10</h5>
<?php

$color = array(4 => 'white', 6 => 'green', 11=> 'red');
echo reset($color);

?>

<hr>

<h5>No.11</h5>
<?php

$ceu = array( "Italy"=>"Rome", "Luxembourg"=>"Luxembourg", "Belgium"=> "Brussels", "Denmark"=>"Copenhagen", "Finland"=>"Helsinki", "France" => "Paris", "Slovakia"=>"Bratislava", "Slovenia"=>"Ljubljana", "Germany" => "Berlin", "Greece" => "Athens", "Ireland"=>"Dublin", "Netherlands"=>"Amsterdam", "Portugal"=>"Lisbon", "Spain"=>"Madrid", "Sweden"=>"Stockholm", "United Kingdom"=>"London", "Cyprus"=>"Nicosia", "Lithuania"=>"Vilnius", "Czech Republic"=>"Prague", "Estonia"=>"Tallin", "Hungary"=>"Budapest", "Latvia"=>"Riga", "Malta"=>"Valetta", "Austria" => "Vienna", "Poland"=>"Warsaw") ;

foreach($ceu as $con => $cap){
    echo "The capital of ".$con." is ".$cap."<br>";
}
?>

<hr>

<h5>No.12</h5>

<?php

$age = array("Sophia"=>"31","Jacob"=>"41","William"=>"39","Ramesh"=>"40");

echo " a) ascending order sort by value";

ksort($age);
echo "<pre>";
print_r($age);
echo "</php>";

echo " b) ascending order sort by Key";

asort($age);
echo "<pre>";
print_r($age);
echo "</php>";

echo "c) descending order sorting by Value";

krsort($age);
echo "<pre>";
print_r($age);
echo "</pre>";

echo " d) descending order sorting by Key";

arsort($age);
echo "<pre>";
print_r($age);
echo "</pre>";

?>

<hr>



</body>
</html>