<?php 
    session_start();
    require_once("connect.php");

    if(isset($_POST["submit"])){
        $email = $_SESSION['email'];
        $gcash_num = $_POST['gcash_num'];
        $total_amount = $_POST['total_amount'];

        $sql = "INSERT INTO tbl_transactions (email_address, gcash_num, total_amount) VALUES (?, ?, ?)";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssd", $email, $gcash_num, $total_amount);
        $stmt->execute();

        $query = "SELECT transaction_id FROM tbl_transactions WHERE total_amount = $total_amount";
        $result = $conn->query($query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        $transaction_id = $row['transaction_id'];

        $query2 = "SELECT product_name, quantity FROM tbl_cart";
        $result2 = $conn->query($query2);

        if ($result2->num_rows > 0){
            $records = $result2->fetch_all(MYSQLI_ASSOC);
        } else{
            $records = [];
        }

        foreach($records as $record){    
            $sql = "INSERT INTO tbl_quantity (transaction_id, product_name, quantity) VALUES (?, ?, ?)";
            $stmt = $conn->prepare($sql);             
            $stmt->bind_param("isi", $transaction_id, $record['product_name'], $record['quantity']);
            $stmt->execute();
        }

        $sql = "TRUNCATE TABLE tbl_cart";
        $result = $conn->query($sql);
        
        $stmt->close();

        header("Location: store.php");
    }
?>