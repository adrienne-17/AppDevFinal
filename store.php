<?php 
    $title = "Pokemon Webstore";
    session_start();
    require_once("..\\include\\header.php"); 
    require_once("connect.php");
    require_once("products.php");
?>
<style>
    body {
        margin-top: 20px;
        background: radial-gradient(circle at 0.3% 1.3%, rgb(235, 217, 221) 0%, rgb(216, 174, 211) 45.1%, rgb(145, 130, 196) 100.2%);
    }
    .row{
        align-content: center;
    }
    .card {
        height: 400px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        padding: 10px;
        padding-top: 20px;
    }
    .card-body {
        display: flex;
        flex-direction: column;
    }
    .card-title {
        flex-grow: 1;
    }
    .card-text {
        flex-grow: 2;
    }
    .form-group {
        flex-grow: 1;
    }
    .product-image {
        align-self: center;
        width: 30%;
        height: auto;
    }
</style>
<div class="container">
    <div class="row">
        <?php if (isset($_GET['error'])) { ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
        <?php } ?>     
        <h2>Items</h2>
        <hr>          
        <?php
            foreach($records as $record){
        ?>
        <div class="col col-md-4">
            <?php                               
                if(empty($_SESSION['email'])):
            ?>
                <form action="login.php" method="post">
            <?php 
                endif;
                if(!empty($_SESSION['email'])):
            ?>
                <form action="addProduct.php" method="post">
            <?php 
                endif;
            ?>           
                <div class="card mb-3">
                    <input type="hidden" name="product_id" id="product_id" value="<?= $record["product_id"] ?>">
                    <input type="hidden" name="product_name" id="product_name" value="<?= $record["product_name"] ?>">
                    <input type="hidden" name="product_price" id="product_price" value="<?= $record["product_price"] ?>">
                    <input type="hidden" name="product_image" id="product_image" value="<?= $record["product_image"] ?>">                                
                    <img src="<?= $record["product_image"]; ?>" class="card-img-top product-image">
                    <div class="card-body">
                        <h5 class="card-title"><?= $record["product_name"]; ?></h5>
                        <p class="card-text"><?= "₱".$record["product_price"]; ?></p>
                        <div class="form-group">
                            <input type="text" name="quantity" id="quantity" value="1" size="2" class="form-control" />
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Add to Cart</button>
                    </div>
                </div>
            </form>
        </div>
        <?php
            }
        ?>                    
    </div>
</div>   
<?php 
    require_once("..\\include\\footer.php"); 
?>
