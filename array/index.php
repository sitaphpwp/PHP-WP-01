<?php

// array 
// Numeric Types 
// Associative array 
// Multidimensional Array 

// An array stores multiple values in one single variable:

//  syntax

// benefits
// string, integer , float  



// $city = [
//     'Dhaka',
//     'Sylhet',
//     10 
// ];



// array index start => 0

// numeric array 
//$city = array('Dhaka', 'Sylhet', 10, 10.25);
// echo $city;

//print_r($city);



//$city_count = count($city);
// var_dump($city);
// echo $city[1];
// echo $city[3];

// for ($i = 0; $i < $city_count; $i++) {
//     echo $city[$i]."\n";
// }

// foreach ($city as $cname) {
//     echo $cname . "\n";
// }

// In PHP, an array is a data structure that allows you to store multiple values of the same or different data types under a single variable name. Arrays provide a way to organize and manage collections of data efficiently. Each value in an array is called an element, and each element has a unique index or key that identifies its position within the array.


// Associtive array 

// key value pair 

// $city = array('Dhaka', 'Sylhet', 10, 10.25); // numeric 
// $city[0];
$bio = array('fnmae' => 'Mr A', 'lname' => 'Mr B'); // associtive  key vaue pair
//print_r($bio);

// foreach ($bio as $bio_name) {
//     echo $bio_name . "\n";
// }

// echo $bio[1];


// foreach ($variable as $key => $value) {
//     # code...
// }

// foreach ($bio as $bio_key => $bio_name) {
//     echo $bio_key . " = " . $bio_name . "\n";
// }

// Multidimensional Arrays: These are arrays that contain other arrays as elements. They can be used to represent more complex data structures.

// $cities = array(

//     'subcity' => array(
//         'c1' => 'test1',
//         'c2' => 'test2',
//         'skills' => array('php', 'js')
//     )
// );

// $cars = array(10,20,5,8);
// $cars = array(array(10, 1), array(15, 2), array(25, 2), array(10, 9));
// echo $cars[0][0];
// array(),array(), array(),
// echo $cars[0][1];

$contact1 =
    array(
        "name" => "John Doe",
        "phone" => "123-456-7890",
        "email" => "john@example.com"
    );

$contact2 =
    array(
        "name" => "Jane Smith",
        "phone" => "987-654-3210",
        "email" => "jane@example.com"
    );

$contact3 =
    array(
        "name" => "Robert Johnson",
        "phone" => "555-123-4567",
        "email" => "robert@example.com"
    );


$contact = array($contact1, $contact2, $contact3);
// echo $contact;

// print_r($contact);

//var_dump($contact);


// foreach ($contact as $contact) {
//     echo "Name : " . $contact['name'] . "\n";
//     echo "Phone : " . $contact['phone'] . "\n";
//     echo "Email : " . $contact['email'] . "\n";
// }


// String to Array
// Storing the order as a string with comma delimiter $orderString = "T-shirt,Jeans,Sneakers";


// $order = "T-shirt,Jeans,Sneakers";
// var_dump($order); // get string 

// need to convert array 

// $order_Details = explode(",", $order);
//var_dump($order_Details);

//print_r($order_Details);

// foreach ($order_Details as  $details) {
//     echo $details . "\n";
// }


// Array to String

// Array containing the ordered items $confirmedItems = array("T-shirt", "Jeans", "Sneakers");

// $confirmedItems = array("T-shirt", "Jeans", "Sneakers");
// $str_confirmedItems = implode(",", $confirmedItems);

// echo "Your orders are : " . $str_confirmedItems;

//var_dump($str_confirmedItems);


// Associtive array to string conversation serilize

// $data = array(
//     "name" => "John Doe",
//     "age" => 25,
//     "email" => "john@example.com"
// );

// $data_serilized = serialize($data);

// // make it unserialize 
// $data_serilized = unserialize($data_serilized);
// print_r($data_serilized);


// Associtive array to string conversation json

// JSON (JavaScript Object Notation) is a lightweight data interchange format that is easy for humans to read and write, and easy for machines to parse and generate

$data =
    array(
        "name" => "John Doe",
        "age" => 25,
        "email" => "john@example.com"
    );

// print_r($data);

// $json_encode = json_encode($data);
// // var_dump($json_encode);
// $json_decode  = json_decode($json_encode, true);


// foreach ($json_decode as $json_value) {
//     echo $json_value . "<br>";
// }

//  functions & strings 

// var_dump($json_decode);

// super global varibale 
// session 
// cookies 
// form 
