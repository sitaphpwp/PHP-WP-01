<?php
include_once '../DB/db.php';
include_once '../includes/header.php';
?>
<div class="container">
    <div class="row">
        <div class="col-md-3"></div>
        <div class="col-md-6" style="padding-top: 100px;">
            <h3 class="text-primary text-center">Sign Up</h3>
            <br />
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
            <a href="../index.php">Sign In Now!</a>
        </div>
        <div class="col-md-3"></div>
    </div>
</div>

<?php include_once '../includes/footer.php'; ?>