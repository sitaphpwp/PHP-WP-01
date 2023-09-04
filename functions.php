<?php


include_once './db.php';


/**
 * Addtion function.
 *
 * @param integer $a
 * @param integer $b
 * @param integer $c
 * @return integer
 */
function addition($a = 0, $b = 0, $c = 0): int
{
    return $a + $b + $c;
}

/**
 * subtraction function.
 *
 * @param integer $a
 * @param integer $b
 * @param integer $c
 * @return integer
 */
function subtraction($a = 0, $b = 0, $c = 0): int
{
    return $a - $b - $c;
}

/**
 * String function.
 *
 * @return string
 */
function aboutPHP(): string
{
    return "PHP is Web Server Scripting language";
}



//  function return type 

//  int , float , string, array 

//  type hinting 


/**
 * Get all city function.
 *
 * @return array
 */
function cityName(): array
{
    $cityname = array("Sylhet", "Dhaka");
    return $cityname;
}
