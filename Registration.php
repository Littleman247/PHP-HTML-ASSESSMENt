<!DOCTYPE html>
<html>
<head>
    <!-- title of page -->
    <title> Registration</title> 
</head>
<body>
    <div class="container"><!-- creates a class to later be called upon with css style sheet -->
        <div class="header"><!-- creates a class to later be called upon with css style sheet -->
            <h2>
                Register
            </h2>
        </div>
        <!-- action="Registration.php" -->
        <form action="Reg.php" method = "post">

            <?php //include('errors.php') ?>

            <div>
                    <label for="username"> Username : </label>
                    <input type="text" name="username" required>
            </div>

            <div>
                    <label for="email"> Email : </label>
                    <input type="text" name="email" required>
            </div>

            <div>
                    <label for="password_1"> Password : </label>
                    <input type="text" name="password_1" required>
            </div>

            <div>
                    <label for="password_2"> Confirm Password</label>
                    <input type="text" name="password_2" required>
            </div>
        
            <button type="submit" name="reg_user"> Submit </button>

            <p>Already a User? <a href="login.php">Log In</a></p>
    
        </form>
    
    </div>
</body>
</html>
