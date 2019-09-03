<?php
session_start();
?>
<!DOCTYPE html>
<html>
<meta http-equiv="Refresh" content="5; url=Login.php"/>
<head>
    <title> Log In Bypass</title>
<?php  
$servername = "localhost:6003";
$dbusername = "root";
$dbpassword = "root";
$dbname = "ds";
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
?>
<script>
function myFunction() {
    setTimeout(function(){ alert("Redirecting Now"); }, 1000);
}
</script>
</head>
<body>

<?php
$login_username = $_POST['username'];
$login_password = $_POST['password_1'];

$st = ("SELECT * FROM user WHERE username='$login_username'");
$results = $conn->query($st);
if ($results->num_rows >0){
        while($row = $results->fetch_assoc()){
            if($row['pword'] == $login_password){
                echo "<br>Welcome User: " . $row["username"]. " <br>Id: " . $row["id"]. "<br>";
                echo "You Logged in Successfully";
                $_SESSION['user_id'] = $row['id'];
                ?>
                <button onclick="myFunction()"><a href="index.php">Enter Shop</a></button>
                <?php
            }else{
    echo "Error: " . $sql . "<br>" . $conn->error . "<br><br><br>";
    echo "No User found with these credentials<br> Make Sure these are accurate or <a href='Registration.php'> register here </a> ";
                }
            }
        }


?>

</body>
</html>
