<?php

//  function

/**
 * code of block
 * 
 * syntax :
 * 
 * function function_name(){
 *  statment;
 * } 
 */



//  example: 


//  function defination 
// function addtion()
// {
//     // echo "";
//     // return 
// }



// function call 

// addtion();


// function defination 
// function addition()
// {
//     $a = 10;
//     $b = 20;
//     $output = $a + $b;
//     echo $output;
//     return $output;
// }

// addition();

// function_exists()

//  fanction calling / invkoing 

// $output = addition();

// if ($output == 30) {
//     echo "Value is 30";
// } else {
//     echo "value is not 30";
// }



// echo $output;
// var_dump($output);


// / conditionl functio 

// $is_true = true;

// function subtraction()
// {
//     echo 'Test';
// }

// if ($makefoo) {
//     subtraction();
// } else {
//     function add()
//     {
//         echo "Hello";
//     }
// }


//  function parameter & arguments 

//  $name = "variable" arguments
// $city = array('dhaka','sylhet);


// function Addition($a, $b, $c) // arguments
// {
//     echo $output = $a + $b + $c;
// }

// Addition(10, 20, 30); //parameter


// function addition($a, $b,  $c)
// {
//     echo $output =  $a + $b + $c;
// }


// addition(10, 20, 3);


//  include_once()  // include 
// require_once ()  // require 

//require_once './functions.php';
include_once './functions.php';
include_once './db.php';


aboutPHP() . "\n";
echo PHP_EOL;

$add = addition(10, 20, 10);
echo PHP_EOL;
$sub = subtraction(10, 20, 60);
echo $sub;
echo $add;

echo PHP_EOL;

echo "================================";
echo "<br>";
$city = cityName();
foreach ($city as $value) {
    echo  $value . "<br>";
}

// print_r($city);
