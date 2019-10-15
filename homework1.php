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






</body>
</html>