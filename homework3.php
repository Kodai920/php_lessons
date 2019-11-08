<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP</title>
</head>
<body>

<h2>No.1</h2>
<p>Write a PHP program to compute the sum of the prime numbers less than 100.<br>
 Note: There are 25 prime numbers are there in less than 100.</p><br>
<?php
$sum=array();
$prime=false;
for($i=2;$i<100;$i++){
    $prime=true;
    for($a=2;$a<=($i/2);$a++){
        if($i%$a==0){
            $prime=false;
            break;
        }
    }
    if($prime){
        array_push($sum,$i);
    }
    if(count($sum)==100){
        break;
    }
}
echo array_sum($sum);
?>

<hr>
<h2>No.2</h2>
<p>Write a PHP program to compute the sum of the digits of a number.<br>
Input : 45<br>
Output :Sum of digits of 45 is 9. </p>
<?php

function sum($i){
    $a = 0;
    for($b = 0;$b < strlen($i);$b++){
        $a += $i[$b];
    }
    return $a;
}
echo "Sum of digits of 45 is ".sum('45').".";

?>

<hr>
<h2>No.3</h2>
<p>Write a PHP program to check if a given positive integer is a power of two. <br>
 Input : 4<br>
 Output :4 is power of 2 </p>

 <?php

 function two($i){
     if(($i & ($i - 1))==0){
         return "$i is power of 2";
     }else{
         return "$i is not power of 2";
     }
 }
 print_r (two(4));

 ?>

 <hr>
 <h2>No.4</h2>
 <p>Write a PHP program to print the number of prime numbers which are less than or equal to a given integer. </p>

<?php

$a = array_fill(0, 100, true);
$a[0] = $a[1] = false;

for($i = 2; $i * $i < 100; $i++){
    if(!$a[$i]) continue;
    for($j = $i * $i; $j < 100; $j += $i){
        $a[$j] = false;
    }
}

$sum = array_fill(0, 100, 0);

for($i = 1; $i < 100; $i++){
    $sum[$i] += $sum[$i - 1];
    if($a[$i]) $sum[$i]++;
}

echo $sum[70];
?>

<hr>

<h2>No.5</h2>
<p>Write a PHP program to convert word to digit. <br>
 Input: zero;three;five;six;eight;one<br>
 Output: 035681</p>

<?php

function num($word){
    $number = explode(";",$word);
    $change='';
    foreach($number as $value){
        switch ($value){
            case 'zero';
            $change .= '0';
            break;
            case 'one';
            $change .= '1';
            break;
            case 'two';
            $change .= '2';
            break;
            case 'three';
            $change .= '3';
            break;
            case 'four';
            $change .= '4';
            break;
            case 'five';
            $change .= '5';
            break;
            case 'six';
            $change .= '6';
            break;
            case 'seven';
            $change .= '7';
            break;
            case 'eight';
            $change .= '8';
            break;
            case 'nine';
            $change .= '9';
            break;
        }
    }
    return $change;
}

echo num("zero;three;five;six;eight;one");

?>

<hr>
<h2>No.6</h2>
<p> Write a PHP program to replace a string "Python" with "PHP" and "Python" with "PHP" in a given string. <br>
<b>Sample Input:</b>
PHP is popular than Python <br>
<b>Sample Output:</b>
Python is popular than PHP.
</p>

<?php

    $string="PHP is popular than Python";

    $result = str_ireplace("PHP","Python",$string);
    $cal = substr_replace($result,"PHP",23,6);


    echo $cal;

?>

<hr>
<h2>No.7</h2>
<p>Write a program to calculate and print the factorial of a number using a for loop. The factorial of a number is the product of all integers up to and including that number, so the factorial of 4 is 4*3*2*1= 24. </p>

<?php

$a=5;
$b=1;
for($x=1;$x<=$a-1;$x++){
    $b*=($x+1);
}
echo $b;
?>

<hr>
<h2>No.8</h2>
<p>Calculate the difference between two dates using PHP OOP approach. <br>
 Sample Dates : 1981-11-03, 2013-09-04 <br>
 Expected Result : Difference : 31 years, 10 months, 1 days</p>

 <?php

 $date1 = new DateTime("1981-11-03");
 $date2 = new DateTime("2013-09-04");
 $bet = $date1->diff($date2);
 echo "Difference : ".$bet->y." years, ".$bet->m." months, ".$bet->d." days ";
 ?>

 <hr>
 <h2>No.9</h2>
 <p>Write a PHP class that calculates the factorial of an integer.</p>

<?php



?>

<hr>
<h2>No.10</h2>
<p>Create a script to construct the following pattern, using nested for loop. <br>
   *  <br>
    * *  <br>
    * * *  <br>
    * * * *  <br>
    * * * * *  <br>
    </p>

<?php

for($x=1;$x<=5;$x++){
    for($y=1;$y<=$x;$y++){
        echo " * ";
    }
    echo "<br>";
}
?>

<hr>
<h2>No.11</h2>
<p>Create a script to construct the following pattern, using nested for loop. <br>
   * * * * *  <br>
    * * * * <br>
    * * *  <br>
    * *   <br>
    *  <br>
</p>

<?php

for($i=5;$i>=1;$i--){
    for($x=1;$x<=$i;$x++){
        echo " * ";
    }
    echo "<br>";
}
?>

<hr>
<h2>No.12</h2>
<p> Create a script to construct the following pattern, using nested for loop. <br>
   1  <br>
    2 3  <br>
    4 5 6  <br>
    7 8 9 10  <br>
</p>

<?php

$n = 4;
$count = 1;
for ($x = $n; $x > 0; $x--)
{
  for ($y = $x; $y < $n + 1; $y++)
   {
     printf("%4s", $count);
     $count++;
   }
    echo "<br>";
   }
?>

<hr>
<h2>No.13</h2>
<p>Create a simple HTML form and accept the user name and display the name through PHP echo statement. </p>

<?php
$name = $name_err = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){

if(empty($_POST["name"])){
  $name_err = "Please enter a name";
}else{
  $name = $_POST["name"];
  echo " <h3>Hello {$name}</h3> ";
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
      .help-block{color:red;}
    </style>
</head>
<body>
<form action="<?php echo $_SERVER["PHP_SELF"];?>" method="POST">
<h2>Please input your name:</h2>
<input type="text" name="name" value="<?php echo $name; ?>">
<span class="help-block">*<?php echo $name_err; ?></span>
<input type="submit" value="Submit Name">
</form>
</body>
</html>


<hr>
<h2>No.14</h2>
<p>Create a script to construct the following pattern, using nested for loop. <br>
   5 5 5 5 5  <br>
    4 4 4 4 <br>
    3 3 3  <br>
    2 2   <br>
    1  <br>
</p>

<?php?>

<hr>
<h2>No.15</h2>
<p>Create a script to construct the following pattern, using nested for loop. <br>
           *
          * * *
        * * * * *
      * * * * * * *
    * * * * * * * * *
</p>


</body>
</html>
