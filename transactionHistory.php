<?php
$title = "Pokemon Webstore";
session_start();

require_once("..\\include\\header.php");
require_once("connect.php");
require_once("getTransactions.php");
?>
<style>
    body {
        background: radial-gradient(circle at 0.3% 1.3%, rgb(235, 217, 221) 0%, rgb(216, 174, 211) 45.1%, rgb(145, 130, 196) 100.2%);
    }
</style>
<div class="container">
    <form action="store.php" method="post">
        <table class="table opacity-75">
            <thead>
                <th>Date</th>
                <th>Email</th>
                <th>GCash Number</th>
                <th>Products</th>
                <th>Total Amount</th>
            </thead>
            <tbody>
                <?php
                foreach ($transactions as $transaction) :
                ?>
                    <tr>
                        <td><?= $transaction['date_time'] ?></td>
                        <td><?= $transaction['email_address'] ?></td>
                        <td><?= $transaction['gcash_num'] ?></td>
                        <td>
                            <dl>
                                <?php
                                foreach ($products as $product) :
                                    if ($transaction['transaction_id'] == $product['transaction_id']) :
                                ?>

                                        <dt><?= $product['product_name'] ?></dt>
                                        <dd>- <?= $product['quantity'] ?> x</dd>
                                <?php
                                    endif;
                                endforeach;

                                ?>
                            </dl>
                        </td>
                        <td><?= $transaction['total_amount'] ?></td>
                    <?php
                endforeach;
                    ?>
            </tbody>
        </table>

        <button type="submit" name="submit" class="btn btn-danger">Back</button>
    </form>
</div>
<?php
require_once("..\\include\\footer.php");
?>