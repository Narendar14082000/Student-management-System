<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
	<?php
	    require('db.php');
		session_start();
		if (isset($_SESSION['username'])) {        
        $username = $_SESSION['username']; 
		}
	?>
		<p>Hey, <?php echo $username; ?>!</p>
        <p>You are in user dashboard page.</p>
	<?php
		$sql = "SELECT login_type FROM `users` where username = '$username'";
		$result = mysqli_query($con, $sql);
		while($row = mysqli_fetch_array($result)) {
			if ($row["login_type"]=='parent'){
	?>
		<p><a href="parent.php">user details</a></p>
	<?php
			}else if ($row["login_type"]=='student'){
	?>
		<p><a href="student.php">user details</a></p>
	<?php
			}else if ($row["login_type"]=='faculty'){
	?>
		<p><a href="faculty.php">user details</a></p>
	<?php
			}
		}
	?>
</body>
</html>