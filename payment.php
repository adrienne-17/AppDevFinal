<?php 
    session_start();
    require_once("..\\include\\header.php"); 
    require_once("connect.php");
?>
    <style>
        
    </style>
    <div class="container">
        <div class="col col-md-4">
            <?php if (isset($_GET['error'])) { ?>
                <p class="error"><?php echo $_GET['error']; ?></p>
            <?php } ?>
            <form action="transaction.php" method="post">
                <h2>Payment Checkout</h2>
                <hr>
                <div class="mb-3">
                    <label for="gcash_num">GCash Number</label>
                    <input type="text" name="gcash_num" id="gcash_num" placeholder="Enter GCash number..." class="form-control" required>
                </div>
                <div class="mb-3">
                    <label>Total Amount to be Paid :</label>                                       
                    <label for="total_amount">₱<?= $_POST['total_amount'] ?></label>
                    <hr>
                </div>
                <div class="mb-3">
                    <button type="submit" name="submit">Confirm</button>
                </div>

                <input type="hidden" name="total_amount" id="total_amount" value="<?= $_POST['total_amount'] ?>">
            </form>

            <a href="cart.php" class="btn btn-danger">Cancel</a>   
        </div>
    </div>  

<?php 
    require_once("..\\include\\footer.php"); 
?>