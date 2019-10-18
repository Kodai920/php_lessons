<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>homework2</title>
</head>
<body>
    <h2>No.1</h2>
    <?php
    
    class Kodai{
        var $cap;

        public function getCap(){
            echo $this->cap."<br>";
        }

        public function setCap($cap){
            $this->cap.=$cap;
        }
    }

    $cap = new Kodai();

    $cap->setCap("MyClass class has initialized !");

    $cap->getCap();

    ?>
    <hr>

    <h2>No.2</h2>
    <?php

    class Mycalculator{
        var $_big, $_small;
        public function __construct($big,$small){
            $this->_big=$big;
            $this->_small=$small;

        }

        public function add(){
            return $this->_big + $this->_small;
        }
        public function subtract(){
            return $this->_big - $this->_small;
        }
        public function multiply(){
            return $this->_big * $this->_small;
        }
        public function divide(){
            return $this->_big / $this->_small;
        }
    }

    $cal = new Mycalculator(25,19);
    echo $cal->add()."<br>";
    echo $cal->subtract()."<br>";
    echo $cal->multiply()."<br>";
    echo $cal->divide()."<br>";
    ?>
    
    // <hr>

    <h2>No.3</h2>
    <?php
    
    class Cruse{
        var $arr;
        public function __construct(array $arr){
            $this->arr=$arr;
        }
        public function sort(){
            $kodai = $this->arr;
            sort($kodai);
            return $kodai;
        }
    }
    $arr = new Cruse(array(11, -2, 4, 35, 0, 8, -9));
    print_r($arr->sort())."<br>";


    ?>
    <hr>

    <h2>No.4</h2>
    <?php
    
    class Message{
        var $message = "Hello All, I am ";
        public function introduce($name){
            return $this->message.$name;
        }
    }

    $message = new Message();
    echo $message->introduce("Scott");


    ?>
    <hr>



</body>
</html>