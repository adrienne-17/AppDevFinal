<?php 
    $title = "Pokemon Webstore";
    session_start();
    require_once("..\\include\\header.php"); 
    require_once("connect.php");
?>
<style>
    body {
        background: radial-gradient(circle at 0.3% 1.3%, rgb(235, 217, 221) 0%, rgb(216, 174, 211) 45.1%, rgb(145, 130, 196) 100.2%);
    }
</style>
    
<div class="vh-100">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col col-xl-10">
                <div class="card" style="border-radius: 1rem;">
                    <div class="row g-0">
                        <div class="col-md-6 col-lg-5 d-none d-md-block">
                            <img src="https://bloximages.chicago2.vip.townnews.com/annistonstar.com/content/tncms/assets/v3/editorial/b/8b/b8b587d8-571f-11e6-8d4c-2ba8b2c1a1f6/579df80b9154d.image.jpg?resize=1200%2C1514" alt="login form" class="img-fluid" style="border-radius: 1rem 0 0 1rem; height: 100%;" />
                        </div>
                        <div class="col-md-6 col-lg-7 d-flex align-items-center">
                            <div class="card-body p-4 p-lg-5 text-black">
                            <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <form action="passwordCheck.php" method="post">
                        <h2>User Profile</h2>
                        <hr>
                        <input type="hidden" name="id" id="id" value="<?= $_SESSION['id'] ?>">
                        <input type="hidden" name="password" id="password" value="<?= $_SESSION['password'] ?>">
                    <div class="sub-entry">
                        <div class="mb-3">

                            <label>Information</label><br>
                            <label for="email">Email: <?= $_SESSION['email'] ?></label><br>
                            <label for="player_id">Player ID: <?= $_SESSION['player_id'] ?></label>                        
                        </div>
                        <div>
                            <a onclick="del(<?= $_SESSION['id']; ?>)" class="btn btn-danger">Delete Account</a>
                        </div><br>
                    </div>
                    <div class="sub-entry">
                            <label>RESET PASSWORD</label>
                        <div class="mb-3">
                            <label for="cur_pass">Enter Current Password:</label>
                            <input type="password" name="cur_pass" id="cur_pass" placeholder="Enter current password..." class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="cur_pass">Enter New Password:</label>
                            <input type="password" name="new_pass" id="new_pass" placeholder="Enter new password..." class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="cur_pass">Re-Enter New Password:</label>
                            <input type="password" name="new_confirm_pass" id="new_confirm_pass" placeholder="Re-enter new password..." class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <button type="submit" name="submit" class="btn btn-danger">Reset Password</button>
                        </div>
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

<script type="text/javascript">
    function del(id) {
        if(confirm('Confirm Delete?')){
            window.location.href = 'delete.php?id=' + id;
        } else{
            window.location.href = 'profile.php';
        }
    }
</script>    

<?php 
    require_once("..\\include\\footer.php"); 
?>