<?php
session_start();
?>
<DOCTYPE html>
<html>
<head>
<?php
$servername = "localhost:6003";
$dbusername = "root";
$dbpassword = "root";
$dbname = "ds";
$conn2 = new mysqli($servername, $dbusername, $dbpassword, $dbname);
?>
</head>
<body>
<?php
//$p_id = htmlspecialchars($_GET['product_id']);
$pid = $_POST['p_id'];
echo ($pid);
//echo "($p_id)";
$p1 = $pid;
$u1 = $_SESSION['user_id'];
echo "1";

$addToCart = ("INSERT INTO checkout (product_id, ur_id) VALUES ($p1, $u1)");
if ($conn2->query($addToCart) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br><br><br>";
}

echo "2";

echo"3";

//$addToCart->execute();

echo "test";

// $joinToCart = ("SELECT products.product_id, products.price, products.stock FROM product INNER JOIN checkout ON product.product_id = checkout.product_id");
// $joinToCart->execute();
// echo "test ";
?>

</body>
</html>