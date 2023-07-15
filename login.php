<?php
$title = "Pokemon Webstore";
require_once("..\\include\\header.php");
require_once("connect.php");
?>

<div class="vh-100" style="background: radial-gradient(circle at 0.3% 1.3%, rgb(235, 217, 221) 0%, rgb(216, 174, 211) 45.1%, rgb(145, 130, 196) 100.2%);">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://bloximages.chicago2.vip.townnews.com/annistonstar.com/content/tncms/assets/v3/editorial/b/8b/b8b587d8-571f-11e6-8d4c-2ba8b2c1a1f6/579df80b9154d.image.jpg?resize=1200%2C1514" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">

                                <?php if (isset($_GET['error'])) { ?>
                                    <p class="error"><?php echo $_GET['error']; ?></p>
                                <?php } ?>
                                <form action="loginCheck.php" method="post">
                                    <h2>Log-In Form</h2>
                                    <div class="mb-3">
                                        <label for="email">E-Mail Address</label>
                                        <input type="email" name="email" id="email" placeholder="Enter e-mail address..." class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <label for="password">Password</label>
                                        <input type="password" name="password" id="password" placeholder="Enter password..." class="form-control" required>
                                    </div>
                                    <div class="mb-3">
                                        <button type="submit" class="btn btn-info" name="submit">Login</button>
                                    </div>
                                    <div style="margin-top: 10px; margin-bottom: 5px;">
                                        <i>
                                            <h6>Don't have an account yet? <a href="registration.php" style="text-decoration:none">Register</a></h6>
                                        </i>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
require_once("..\\include\\footer.php");
?>