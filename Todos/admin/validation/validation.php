<?php


function isEmailValid($email)
{
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function isHashedPassword($password)
{
    return password_hash($password, PASSWORD_BCRYPT);
}


function isEmailUinique($con, $email)
{

    $query = "SELECT `id` FROM `users` WHERE email = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $stmt->store_result();
    return $stmt->num_rows == 0;
}


function isUserNameUinique($con, $username)
{
    $query = "SELECT `id` FROM `users` WHERE username = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $stmt->store_result();
    return $stmt->num_rows == 0;
}
