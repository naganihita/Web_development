<?php
session_start();
if (isset($_COOKIE['selectedValue'])) {
    $_SESSION['selectedValue'] = $_COOKIE['selectedValue'];
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>REVIVE</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  
  <style>

.nav_body {
      font-family: 'Roboto', sans-serif;
      background-color: #f8f9fa;
    }
    
    .navbar {
      background-color: #A92223;
    }
    
    .navbar-brand {
      font-size: 24px;
      font-weight: 700;
      color: #FFFFFF;
    }
    
    .navbar-toggler {
      border: none;
    }
    
    .navbar-toggler-icon {
      background-color: #FFFFFF;
    }
    
    .nav-link {
      color: #FFFFFF;
      font-size: 18px;
      transition: color 0.3s;
     padding:0.5rem 1rem;
    }
    
    .nav-link:hover {
      color: #F3F200;
      background:grey;
    }

     body {
      font-family: 'Roboto', sans-serif;
      background: linear-gradient(rgba(255, 255, 255, 0.625), rgba(255, 255, 255, 0.625)), url('blood2.jpg');
      background-size: cover;
      background-repeat: no-repeat;
      color: black;
    }
    .card {
      width: 18rem;
      margin-top: 20px;
      box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.2);
    }
    .alert {
      margin-top: 20px;
    }
   .heading1{
      font-size:50px;
}
  </style>
</head>




  <?php
 
if(isset($_POST['sub'])){ 
$mysqli=mysqli_connect("localhost:3307","root","");
$query1="USE REVIVE_LOGIN;";
$result1=mysqli_query($mysqli,$query1);
 $email= $_POST['email'];
 $password= $_POST['password'];
$stmt1="CREATE TABLE IF NOT EXISTS revivelogin(email VARCHAR(100) ,password VARCHAR(100) );";
$result_stmt1=mysqli_query($mysqli,$stmt1);
$query1="SELECT * from revivelogin ;";
$result_query1=mysqli_query($mysqli,$query1);
$entry=array();
while($row=mysqli_fetch_assoc($result_query1)){
	$key=$row['email'];
	$entry[$key]=$row['password'];
	
};
if(isset($entry[$email]) ){
  if($entry[$email]==$password){
    
	echo '<div class="nav_body">
  <nav class="navbar  navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="1_revivelogin_page.php">REVIVE</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="5_revive.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="3_wt_aug7.php">Donor Page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Recipient Page</a>
          </li>
   <li class="nav-item">
            <a class="nav-link" href="about.html">About  Us</a>
          </li>
        </ul> 
      </div>
    </div>
  </nav>
  

</div>';
  	echo '<div class="row">
	<div class="col-lg-4">
			<div class="card" style="width: 20rem;">
			<a href="/MYSITE/5_revive.php"><img src="b17.png" class="card-img-top"></a>
			</div>
	</div>

	<div class="col-lg-5">
				
			<label for="exampleDataList" class="form-label"><h1 class="heading1"><center><br>Find your blood donor</h1></center></label>
				<div class="row">
						<div class="col-lg-8">
						<input class="form-control-lg" list="datalistOptions" id="exampleDataList" placeholder="Type your bloodgroup">
						<datalist id="datalistOptions">
						   	<option value="A+">
							<option value="A-">
							<option value="B+">
							<option value="B-">
							<option value="AB+">
							<option value="AB-">
							<option value="O+">
							<option value="O-">
							<option value="Bombay Bloodgroup">
							<option value="Golden Bloodgroup">
							<option value="A1+">
							<option value="A1-">
							<option value="A1B+">
							<option value="A1B-">
							<option value="A2+">
							<option value="A2-">
							<option value="A2B+">
							<option value="A2B-">
						 </datalist> 
						</div>
						<div class="col-9-lg">
						<div id="searchResults" class="col-lg-9" style="font-size:50px;">
						</div>
						</div>
						<br>
					</div>
	</div>
					<div class="col-lg-3"><br><br><br><br><br><br><button id="searchButton" class="btn btn-danger" value="search" name="search">Search</button></div>
	</div>

<script>
document.addEventListener("DOMContentLoaded", function () {
    const searchButton = document.getElementById("searchButton");
    const searchInput = document.getElementById("exampleDataList");
    const searchResults = document.getElementById("searchResults");

    searchButton.addEventListener("click", function () {
        const selectedValue = searchInput.value;
        document.cookie = "selectedValue=" + encodeURIComponent(selectedValue);
	var element = document.getElementById("searchResults");

	var anchorTag = document.createElement("a");
	anchorTag.href = "7_revive.php";
	anchorTag.textContent =selectedValue ;

	element.appendChild(anchorTag); 

    });
});

</script>
';



echo    '</div><div class="footer-bottom pt-5 pb-5  text-dark">
    
          
            &COPY; Copyright 2023 <a href="5_revive.php">REVIVE</a> | Created by <a href="5_revive.php" target="_blank">PASALA NAGA NIHITA</a>
       
</div>';
}
 else{
	echo  '<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Hey User!</strong> Please check your password is incorrect!!
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
	echo "<a href='/MYSITE/1_revivelogin_page.php' class='btn btn-danger'>LOG IN HERE</a>";
  }
} 
else{
 	echo '<button type="button" class="btn btn-secondary" data-bs-container="body" data-bs-toggle="tooltip" data-bs-placement="right" data-bs-content="your new account created.Login again with same credentials to continue">
  Not existing user
</button>
';
	
		// Prepare the SQL statement with placeholders
$stmt = $mysqli->prepare("INSERT INTO  revivelogin(email,password) VALUES (?,?)");

// Bind the parameters to the prepared statement
$stmt->bind_param("ss",$email,$password);

// Execute the prepared statement
$stmt->execute();

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    echo "Record inserted successfully.";
} else {
    echo "Error inserting record: " . $mysqli->error;
}

echo "<a href='/MYSITE/1_revivelogin_page.php'>LOG IN HERE</a>";

// Close the prepared statement and database connection
$stmt->close();
 
}


$mysqli->close();
}
  ?>



</html>

