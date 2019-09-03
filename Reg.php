<!DOCTYPE html>
<html>
<head>

</head>
<body>

<?php
//db handshaking

$servername = "localhost:6003";
$dbusername = "root";
$dbpassword = "root";
$dbname = "ds";
    
    // Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
    
    // Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully<br>"; 

$uname = $_POST['username'];
$em = $_POST['email'];
$pword1 = $_POST['password_1'];
$pword2 = $_POST['password_2'];

$check_user = ("SELECT username from user WHERE username='$uname'");
$check_user_result = $conn->query($check_user);

echo "checkpoint <br><br><br>";
if ($check_user_result->num_rows >0){
    //output data of each row
    echo "test<br>";
	while($row = $check_user_result->fetch_assoc()){
		if ($row["username"] === $uname){
           ?><p>User already exsist, Please <a href="login.php">Log In</a></p><?php
            }
        }
    }else{
        echo"test2<br>";
        //this works: INSERT INTO user (username, email, pword) VALUES ('aa', 'aa', 'aa')
    $create_user = ("INSERT INTO user (username, email, pword) VALUES ('$uname', '$em', '$pword1')");
    if ($conn->query($create_user) === TRUE) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . $conn->error . "<br><br><br>";
            }
          
    
}




//this returns the correct value : SELECT id FROM user WHERE username='aa'
$find_user_id_query = ("SELECT id FROM user WHERE username='$uname'");
$user_id_results = $conn->query($find_user_id_query);
if ($user_id_results->num_rows >0){
    while($row = $user_id_results->fetch_assoc()){
        //$user_session_id == $row["id"]
        //echo "id: ". $row["id"];
    }
}
?>

<button type="submit" name="reg_user"><a href='Login.php'> Register User </a></button>

</body>
</html>
