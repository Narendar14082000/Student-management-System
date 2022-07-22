<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}

/* Set height of body and the document to 100% */
body, html {
  height: 100%;
  margin: 0;
  font-family: Arial;
}

/* Style tab links */
.tablink {
  background-color: #555;
  color: white;
  float: left;
  border: none;
  outline: none;
  cursor: pointer;
  padding: 14px 16px;
  font-size: 17px;
  width: 20%;
}

.tablink:hover {
  background-color: #777;
}

/* Style the tab content (and add height:100% for full page content) */
.tabcontent {
  color: white;
  display: none;
  padding: 100px 20px;
  height: 100%;
}


#Home {background-color: red;
background-image: url("photographer.jpg");
height: 500px; /* You must set a specified height */
  background-position: center; /* Center the image */
  background-repeat: no-repeat; /* Do not repeat the image */
  background-size: cover; }
#Registration {background-color: green;
}
#Login {background-color: skyblue;}
#Contact {background-color: blue;}
#About {background-color: orange;}
</style>
</head>
<body>

<button class="tablink" onclick="openPage('Home', this, 'red')">Home</button>

<button class="tablink" onclick="openPage('Login', this, 'skyblue')">Login</button>

<button class="tablink" onclick="openPage('Registration', this, 'green')">Admissions</button>

<button class="tablink" onclick="openPage('Registration', this, 'green')">Academics</button>

<button class="tablink" onclick="openPage('Contact', this, 'blue')">Contact</button>

<div id="Home" class="tabcontent">
  <h1  style="text-align: center;">Welcome to ABC University</h1>
  <h2 style="text-align: center;">Happy Learning!<h2>
  <p></p>
</div>

<div id="Login" class="tabcontent">
  <?php include 'login.php';?>
</div>

<div id="Admissions" class="tabcontent">
  <?php include 'admissions.php';?> 
</div>

<div id="Academics" class="tabcontent">
  <?php include 'courses.php';?> 
</div>

<div id="Placements" class="tabcontent">
  <?php include 'placements.php';?> 
</div>

<div id="Contact" class="tabcontent">
  <h3>Contact</h3>
  <h2>Get in touch</h2>
</div>

<div id="UserOperations" class="tabcontent">
  <h3>UserOperations</h3>
  <br><button onclick="window.location.href='adminlogin.php'" align="center">AdminLogin</button></br>
  </div>

<script>
function openPage(pageName,elmnt,color) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablink");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
  elmnt.style.backgroundColor = color;
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>

  
</body>
</html> 
