<?php
session_start();
include "db.php";
if (!isset($_SESSION["name"])) {
    header("Location:index.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<?php
include "header.php";
?>

<body>
    <nav class="navbar fixed-top navbar-expand-lg bg-primary">
        <a class="navbar-brand text-white" href="index.php">Sai Grocery Store</a>
    </nav>
    <section class="container">
        <div class="mx-auto col-sm-6 p-3 m-5 shadow-lg rounded">
            <form action="function_db.php" method="POST">
                <h2 class="text-center pt-2">OTP verification</h2>
                <?php if (isset($_GET["msg"])) { ?>
                    <div class="text-danger text-center mb-2"><?php echo $_GET["msg"]; ?></div>
                <?php } ?>
                <div class="form-group row">
                    <label for="otp" class="col-sm-2 col-form-label h1">OTP</label>
                    <div class="col-sm-10">
                        <input type="text" name="u_otp" class="form-control" placeholder="Enter OTP" id="otp">
                        <?php if (isset($_GET["otp_error"])) { ?>
                            <span class="text-danger mt-1"><?php echo $_GET["otp_error"]; ?></span>
                        <?php } ?>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" name="otp_submit" class="btn-block btn btn-primary">Submit</button>
                        <button type="submit" name="re_otp" class="btn-block btn btn-danger">Resend</button>
                    </div>
                </div>
        </div>
    </section>
    <div class="fixed-bottom footer-copyright bg-primary text-white text-center py-1">Copyright © 2020 Reserved by Sai Grocery Store</div>
</body>

</html>
