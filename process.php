<?php

if (isset($_POST['submit'])) {
    // var_dump($_POST);

    // $name = $_POST['username'];
    // $password = $_POST['password'];

    $name = $_POST['username'] ? $_POST['username'] : '';
    $password = $_POST['password'] ? $_POST['password'] : '';
    echo "Your Uername is : " . " = " . $name;
    echo "<br>";
    echo "Your Password is : " . " = " .   $password;
} else {
    echo "not found";
}
