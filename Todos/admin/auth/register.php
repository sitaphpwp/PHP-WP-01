<?php
include_once '../DB/db.php';
include_once '../includes/header.php';
include_once '../validation/validation.php';
?>

<?php
$errors = array();

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['register'])) {

    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $password = isset($_POST['password']) ?  $_POST['password'] : '';
    //$password = isHashedPassword($password);
    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $fullname = isset($_POST["fullname"]) ? $_POST["fullname"] : "";

    // print_r($_POST); // geting data

    //validation 

    // empty 
    if (empty($username) || empty($password) || empty($email) || empty($fullname)) {
        $errors[] = "Input fileds empty are not allowed";
    }

    if (!isEmailValid($email)) {
        $errors[] = "Email is not valid";
    }

    // if (!isHashedPassword($password)) {
    //     $errors[] = "Password is not hashed";
    // }

    if (strlen($password) < 7) {
        $errors[] = "Password length minimum 7";
    }

    if (is_numeric($fullname)) {
        $errors[] = "pure numeric value is not allow";
    }

    if (!isEmailUinique($con, $email)) {
        $errors[] = "Email already exits try with new email";
    }

    if (!isUserNameUinique($con, $email)) {
        $errors[] = "Username already exits try with new username";
    }

    $date = date('Y-m-d H:i:s');
    // now insert data 
    $query = "INSERT INTO `users` (username,password,email,full_name,created_at)
    VALUES(?,?,?,?,?)";
    $stmt = $con->prepare($query);
    $stmt->bind_param('sssss', $username, $password, $email, $fullname, $date);
    if (empty($errors)) {
        $stmt->execute();
        echo "Registration successfully";
    }
}


?>




<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="padding-top: 100px;">
            <h3 class="text-primary text-center">Sign Up</h3>
            <br />
            <?php if (isset($errors['common'])) echo $errors['common']; ?>
            <form method="POST" action="">
                <div class="form-group row">
                    <label for="username" class="col-sm-2 col-form-label">Username</label>
                    <div class="col-sm-10">
                        <input type="text" name="username" class="form-control" id="username">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="password" class="col-sm-2 col-form-label">Password</label>
                    <div class="col-sm-10">
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="eamil" class="col-sm-2 col-form-label">Email</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" id="email">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="fullname" class="col-sm-2 col-form-label">FullName</label>
                    <div class="col-sm-10">
                        <input type="text" name="fullname" class="form-control" id="fullname">
                    </div>
                </div>
                <div class="form-group row text-center">
                    <div class="col-sm-10">
                        <button type="submit" class="btn btn-primary" name="register">Sign in</button>
                    </div>
                </div>
            </form>
            <?php

            foreach ($errors as $error) {
                echo $error . "<br/>";
            }

            ?>
            <a href="../index.php">Sign In Now!</a>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<?php include_once '../includes/footer.php'; ?>