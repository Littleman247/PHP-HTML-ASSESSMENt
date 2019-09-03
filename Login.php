<?php
session_start();
?>
<!DOCTYPE html>
<html>
<style>
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}

input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
<head>
    <title> Log In</title>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>
                Log in
            </h2>
        </div>
<!--    form action="Login.php method = "post""   "-->
        <form action="LoginPass.php" method = "post">

            <div>
                    <label for="username"> Username : </label>
                    <input type="text" name="username" placeholder="Your Username..." required>
            </div>


            <div>
                    <label for="password_1"> Password : </label>
                    <input type="text" name="password_1" placeholder="Your password... "required>
            </div>
        
            <button type="submit" name="login_user"><a href="LoginPass.php">Submit</a></button>

            <p>Not a User? <a href="Registration.php">Register here.</a></p>
    </form>
</div>


</body>
</html>
