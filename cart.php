<?php
$title = "Pokemon Webstore";
session_start();

require_once("..\\include\\header.php");
require_once("connect.php");
require_once("getProducts.php");

$total_amount = 0;
?>
<style>
    body {
        background: radial-gradient(circle at 0.3% 1.3%, rgb(235, 217, 221) 0%, rgb(216, 174, 211) 45.1%, rgb(145, 130, 196) 100.2%);
    }

    .button-cover {
        position: relative;
        overflow: hidden;
        border: 1px solid #18181a;
        color: #18181a;
        display: inline-block;
        font-size: 15px;
        line-height: 15px;
        padding: 18px 18px 17px;
        text-decoration: none;
        cursor: pointer;
        background: #fff;
        user-select: none;
        -webkit-user-select: none;
        touch-action: manipulation;
    }

    .button-cover span:first-child {
        position: relative;
        transition: color 600ms cubic-bezier(0.48, 0, 0.12, 1);
        z-index: 10;
    }

    .button-cover span:last-child {
        color: white;
        display: block;
        position: absolute;
        bottom: 0;
        transition: all 500ms cubic-bezier(0.48, 0, 0.12, 1);
        z-index: 100;
        opacity: 0;
        top: 50%;
        left: 50%;
        transform: translateY(225%) translateX(-50%);
        height: 14px;
        line-height: 13px;
    }

    .button-cover:after {
        content: "";
        position: absolute;
        bottom: -50%;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: darkblue;
        transform-origin: bottom center;
        transition: transform 600ms cubic-bezier(0.48, 0, 0.12, 1);
        transform: skewY(9.3deg) scaleY(0);
        z-index: 50;
    }

    .button-cover:hover:after {
        transform-origin: bottom center;
        transform: skewY(9.3deg) scaleY(2);
    }

    .button-cover:hover span:last-child {
        transform: translateX(-50%) translateY(-100%);
        opacity: 1;
        transition: all 900ms cubic-bezier(0.48, 0, 0.12, 1);
    }

    .button-cover img {
        width: 60%;
    }

    table img {
        width: 40%;
        display: block;
        margin-left: auto;
        margin-right: auto;
    }
</style>
<div class="container">
    <form action="payment.php" method="post">
        <?php
        if (!empty($records)) :
        ?>
            <table class="table">
                <thead>
                    <th><a href="emptyCart.php" class="btn btn-danger">Empty Cart</a></th>
                    <th>Name</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Total</th>
                    <th>Edit</th>
                    <th>Remove</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($records as $cart) :
                        $total = $cart['product_price'] * $cart['quantity'];
                    ?>
                        <tr>
                            <td><img src="<?= $cart['product_image'] ?>"></td>
                            <td><?= $cart['product_name'] ?></td>
                            <td><input type="text" name="quantity" id="quantity" value="<?= $cart['quantity'] ?>" size="2" /></td>
                            <td>₱<?= $cart['product_price'] ?></td>
                            <td>₱<?= $total ?></td>
                            <td>
                                <button type="submit" name="submit" class="btn btn-warning" formaction="updateProduct.php">Update</button>
                            </td>
                            <td>
                                <a href="removeProduct.php?product_id=<?= $cart['product_id']; ?>" class="btn btn-danger">Delete</a>
                            </td>
                        </tr>

                        <input type="hidden" name="product_id" id="product_id" value="<?= $cart["product_id"] ?>">
                        <input type="hidden" name="product_name" id="product_name" value="<?= $cart["product_name"] ?>">
                        <input type="hidden" name="total_amount" id="total_amount" value="<?= $total_amount += $total ?>">
                    <?php
                    endforeach;
                    ?>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td>Overall Amount</td>
                        <td>₱<?= $total_amount ?></td>
                        <td></td>
                        <td><button type="submit" name="submit" class="button-cover"><span class="text">Check Out</span><span><img src="https://api.triviacreator.com/v1/imgs/quiz/Migikarp-trivia-16c10b10-dd9b-4828-9943-3edadb446a00.webp"></span></button></td>
                    </tr>
                </tbody>
            </table>

        <?php
        endif;
        if (empty($records)) :
        ?>
            <h3>Cart is Empty</h3>
        <?php
        endif;
        ?>

        <a href="store.php" class="btn btn-danger">
            < Back</a>
                <?php
                if (!empty($records)) :
                ?>

                <?php
                endif;
                ?>
    </form>
</div>
<?php
require_once("..\\include\\footer.php");
?>