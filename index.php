<?php


// $str1 = 'Hello';
// $str2 = "World";
// $str3 = $str1 . " " .  $str2;


// $about = 'Hello Wolrd\'s';
// echo $about;
// echo $str3;


// echo <<<END
//     Hello 
//     Wolrd
//       Sylhet
// \n
// END;


// strlen 

// $str = "Hello World";

// $len = strlen($str);
// echo $len;


//  array 

// is_array => if is it  an array?
//  in_array => seraching 



$cityName = array('Dhaka', 'Sylhet');

$serach = in_array('Dhakgfhfghgfa', $cityName);

if ($serach) {
    echo "found it";
} else {
    echo "Not found";
}



if (is_array($cityName)) {

    foreach ($cityName as  $value) {

        echo $value;
    }
} else {
    echo "not array";
}
