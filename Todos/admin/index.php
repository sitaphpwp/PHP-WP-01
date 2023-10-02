<?php include_once './includes/header.php';
include_once '../admin/DB/db.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['login'])) {

    // print_r($_POST);

    $email = isset($_POST["email"]) ? $_POST["email"] : "";
    $password = isset($_POST['password']) ?  $_POST['password'] : '';

    $query = "SELECT * FROM `users` WHERE email = ?";
    $stmt = $con->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $row = $result->num_rows;

    // var_dump($row);

    if ($row > 0) {
        $data = $result->fetch_assoc();
        //var_dump($data);

        $useremail =  $data['email'];
        $userpass =  $data['password'];

        if ($useremail == $email && $userpass == $password) {
            echo "login ok";
        } else {
            echo "Login failed";
        }


        // foreach ($data as $user) {
        //     print_r($user);
        // }
    }

    //var_dump($row);

    // if ($result->num_rows == 1) {
    //     $row = $result->fetch_assoc();
    //     //$email = $row['emial']
    // }
}
?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <?php include_once './auth/login.php'; ?>
        <div class="col-md-3"></div>
    </div>
</div>
<?php include_once './includes/footer.php'; ?>