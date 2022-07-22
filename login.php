<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <form class="form" method="post" name="login" action="select_login.php">
        <h1 class="login-title">Choose Login Type:</h1>
		<p>
		<select id="login_type">
		  <option value="student">student</option>
		  <option value="faculty">faculty</option>
		  <option value="parent">parent</option>
		  <option value="payment">payment</option>
		  <option value="admin" selected>admin</option>
		</select>
        </p>
		
        <input type="text" class="login-input" name="username" placeholder="UseId" autofocus="true"/>
        <input type="password" class="login-input" name="password" placeholder="Password"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p class="link">Don't have an account? <a href="registration.php">Registration Now</a></p>
		</div>
	</form>
</body>

</html>
