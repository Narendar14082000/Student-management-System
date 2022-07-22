
<!DOCTYPE html>
<html>
<body>
<?php
    require('db.php');
	session_start();
	if (isset($_SESSION['username'])) {        
	$username = $_SESSION['username']; 
	}
$sql = "SELECT stid,stname,stcourse,styear,stsub1,stsub2 FROM `student` where stid = '$username'";
$result = mysqli_query($con, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["stid"]. " <br> Name: " . $row["stname"]."<br>";
        echo "course: " . $row["stcourse"]. " <br> year: " . $row["styear"]."<br>";
        echo "subject1-marks: " . $row["stsub1"]. " <br> subject2-marks: " . $row["stsub2"]."<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($con);
?>
   
</body>
<a href="logout.php" class="previous"> Logout</a>
</html>
