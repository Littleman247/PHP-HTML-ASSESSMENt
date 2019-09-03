<?php
session_start();
?>
<DOCTYPE html>
<html>

<head>
<link rel="stylesheet" type="text/css" href="style.css">
<?php
$servername = "localhost:6003";
$dbusername = "root";
$dbpassword = "root";
$dbname = "ds";
    
    // Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
?>
<div class"mainImage"><!-- creates a class to later be called upon with css style sheet -->
<img src="images/Planets.jpg" width="80%" height="auto">
</div>
</head>
<body>

<?php include("SideBar.php")?>

<div class="content"><!-- creates a class to later be called upon with css style sheet -->

    <?php   
    $results = mysqli_query($conn,"SELECT * FROM products");
    if ($results->num_rows >0)
    {
        //output data of each row
        while($row = $results->fetch_assoc())
        {
            echo '<div class="gallery" >';
            echo '<div class="title" >';
            echo $row['product_name'];
            echo '</div>';
            echo '<a href="ProductDetail.php?product_id=' .$row['product_id'] .'"><img src="'. $row['imageSrc'] . '" alt="' . $row['product_name'] . '" width="600" height="400"></a>';
            echo '</a>';
            echo '<div class="desc">' . $row['description'] . '</div>';
            echo '</div>';
        }
    }
    ?>
</div>


    
</body>
</html>