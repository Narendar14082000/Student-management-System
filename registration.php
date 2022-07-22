<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>

<?php
    require('db.php');
	session_start();
	// When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
		$username = $_POST['username'];
		$email    = $_POST['email'];
		$password = $_POST['password'];
		$create_datetime = date("Y-m-d H:i:s");
		$login_type = $_POST['login_type'];
        $query    = "INSERT into `users` (username, password, email, create_datetime,login_type)
                     VALUES ('$username', '$password', '$email', '$create_datetime','$login_type')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
    } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <input type="password" class="login-input" name="password" placeholder="Password">
		<p>Login Type:
		<select name="login_type">
		  <option value="student">student</option>
		  <option value="faculty">faculty</option>
		  <option value="parent">parent</option>
		  <option value="payment">payment</option>
		  <option value="admin" selected>admin</option>
		</select>
        </p>
        <input type="submit" name="submit" value="Register" class="login-button">
        <p class="link">Already have an account? <a href="login.php">Login here</a></p>
    </form>
<?php
    }
?>
</body>
</html>
