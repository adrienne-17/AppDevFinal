<?php 
    require_once("connect.php");

    if(isset($_POST["submit"])){
        $product_id = $_POST['product_id'];
        $product_image = $_POST['product_image'];
        $product_name = $_POST['product_name'];
        $product_price = $_POST['product_price'];
        $quantity = $_POST['quantity'];

        $query = "SELECT quantity FROM tbl_cart WHERE product_id = $product_id";
        $result = $conn->query($query);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);

        if(isset($row['quantity'])) {
            $quantity += $row['quantity'];
            $sql = "UPDATE tbl_cart SET quantity=? WHERE product_id = $product_id";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("i", $quantity);
            $stmt->execute();
            $stmt->close();

            header("Location: cart.php");            
        }
        else {
            $sql = "INSERT INTO tbl_cart (product_id, product_image, product_name, product_price, quantity) VALUES (?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param("issdi", $product_id, $product_image, $product_name, $product_price, $quantity);
            $stmt->execute();
            $stmt->close();

            header("Location: cart.php");
        }

    }
    else{
        header("Location: store.php?error=Quantity is empty!");

        exit();
    }
?>