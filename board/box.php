<?php

// class my_class{
//     var $foo = array();
//     function my_class($val){
//         $this->foo[] = $val;
//     }

//     function store($val){
//         print_r($this->foo);
//         $this->foo = $val;
//     }
// }

// $m = new my_class("mona");
// $m->foo[] = "anik";
// $m->store("kotha");
// // $m->my_class("d");
// echo gettype($m->foo);
// print_r($m->foo);


//  $global_obj = null;
// class my_class
// {
//     var $value;
//     function my_class()
//     {
//         global $global_obj;
//         $global_obj = &$this;
//     }
// }

// $a = new my_class;
// $a->my_value = 5;

// $global_obj->my_value = 10;
// echo $a->my_value; 

function gcd($a, $b) {
    return ($b > 0) ? gcd($b, $a % $b) : $a;
} 

function reduce_fraction($a,$b) {
    $gcd = gcd($a,$b);

    $a /= $gcd; /// $a = $a / $gcd
    $b /= $gcd;
    
    $p = <<<EOT
   
    A    {$a}
    - =  -
    B    {$b}

EOT;

echo $p;
} 

reduce_fraction(25,55);

// $a = 12;
// $a /= 2;
// echo $a;
$a = 55;
$b = 25;
echo $a%$b;

function lcm($a,$b){
    return ($a*$b) / gcd($a,$b);
}

echo lcm(4,8);

// function modifyArray (&$array) 
// {
//     foreach ($array as &$value)
//     {
//         echo "Entry : " .$value . PHP_EOL; // 1,2,3
        
//          $value = $value + 2; //1+2 = 3, 2+2=4,3+2 =5
         
//         echo "After sum : " . $value . PHP_EOL; //3,4,5
//     } 
//     //$value = $value + 3; 
//  } 
// $array = array (1, 2, 3); 
// modifyArray($array); 
// print_r($array);

$arr = array(1, 2, 3, 4);
foreach ($arr as &$value) {
    $value = $value * 2;
    echo $value . PHP_EOL;
}
// $value = $value + 3;
$value = 22;
// $arr is now array(2, 4, 6, 8)
print_r($arr);
print($value);

echo PHP_EOL;
echo PHP_EOL;

class A {
    public static function foo() {
    echo static::who();
    }
    public static function who() {
    return 'A';
    }
   }
   class B extends A {
    public static function test() {
    A::foo();
    parent::foo();
    self::foo();
    }
   }
   class C extends B {
    public static function who() {
    echo 'C';
    }
   }
   C::test();