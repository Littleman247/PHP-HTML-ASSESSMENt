<DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style.css">

<?php
//creating new connectino
$servername = "localhost:6003";
$dbusername = "root";
$dbpassword = "root";
$dbname = "ds";
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

//saving passed through product_id value to call upo later
$product_id = htmlspecialchars($_GET['product_id']);
?>
<script>
function addToCart() {
    setTimeout(function(){ alert("Redirecting Now"); }, 1000);
}
</script>
<?php

$stmt = $conn->prepare("SELECT * FROM products WHERE product_id='$product_id'");
$stmt->execute();
$result = $stmt->get_result();
$row = $result->fetch_assoc();

echo "<div class='title'>";
print_r ($row['product_name']);
echo"</div>";
echo "<br>"
?>


</head>

<body>
<?php include("SideBar.php")?>
<div class="content"><!-- creates a class to later be called upon with css style sheet -->

    <div class="detailWrapper"><!-- creates a class to later be called upon with css style sheet -->
        <div class="image"><!-- creates a class to later be called upon with css style sheet -->
            <!-- pull left -->
            <?php  
                echo '<img src="' . $row['imageSrc'] . '" width="100%" height="auto">';
            ?>
            </div><!-- image-->
        <div class="infoWrapper"><!-- pull right --><!-- creates a class to later be called upon with css style sheet -->

            <div class="cartButton"><!-- creates a class to later be called upon with css style sheet -->
                <form name="addtocart" method="post" action="cart.php">
                    <input type="hidden" name="p_id" value="<?php echo "$product_id" ?>"><br>
                    <input type="text" name="test" value="<?php echo "$product_id" ?>">
                    <input type="submit" name="addtocart" value="addToCart">   
                </form>
            </div>
                <div class='cartButton'><!-- creates a class to later be called upon with css style sheet -->
                    <?php
                    echo "Available Stock: <br>";
                    print_r ($row['Stock']);
                    ?>
                </div><!--stockprice-->
        </div><!-- infowrapper -->
    </div><!-- detailwrapper -->

    <div class="Fulldetail"><!-- creates a class to later be called upon with css style sheet -->
        <?php 
        print_r($row['Full_Description']);
        ?>
    </div><!-- fulldetail -->
</div><!-- content -->
</body>

</html>







