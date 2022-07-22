<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>Login</title>
<link rel="stylesheet" href="style.css"/>
</head>
<body>
<?php
    require('db.php');
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        
        $username = $_POST['username'];    
        $password = $_POST['password'];
               
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
        $result = mysqli_query($con, $query) or die(mysql_error());
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
			
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='select_login.php'>Login</a> again.</p>
                  </div>";
        }
    }
	else {
?>		
    <form method="post" name="login">
		<div class="form">
        <h1 class="login-title">Login</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
		</div>
	</form>
<?php
	}
?>
</body>

</html>
