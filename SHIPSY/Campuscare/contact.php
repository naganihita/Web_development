<!DOCTYPE html>
<html lang="en">
<?php
	session_start();
?>
<head>
 
  <title>REVIVE</title>
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <style>
    body {
      font-family: 'Roboto', sans-serif;
      background-color: #f5f5f5;
    }

    i {
      font-size: 1.2rem;
    }

    h3 {
      color: #b30000;
    }

    .box {
      width: 100%;
      height: 350px;
      border-radius: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    }

    p {
      color: #b300b3;
      font-size: 1.3rem;
      font-family: "Trebuchet MS", verdana, sans-serif;
    }

    .accordion-item {
      border: none;
      border-radius: 10px;
      background-color: #f0f0f0;
      margin-bottom: 10px;
      box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
    }

    .accordion-button {
      background-color: #b30000;
      color: #fff;
    }

    #h2{
	 border-radius: 30px;
	}
    .btn-success {
      background-color: #28a745;
      border-color: #28a745;
    }

    .btn-danger {
      background-color: #dc3545;
      border-color: #dc3545;
    }
   span{
color:red;
font-family:system-ui;
font-size:10px;
font-weight:normal;
}


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
    
    .form-control {
      border: none;
      border-radius: 20px;
    }

    
  </style>
</head>


<body class="threebody">





  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12 col-lg-6">
        <div class="container bg-light p-3 rounded">
          <h1 class="text-center mb-4">Visualization</h1>
         
          <div class="box" height=800px>
<div id="carouselExampleSlidesOnly" class="carousel slide">
  <?php
// Database connection parameters
$servername = "localhost"; // Replace with your MySQL server hostname
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "campuscare"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT category, COUNT(*) AS count FROM queries GROUP BY category";
$result = $conn->query($sql);

// Prepare data for the pie chart
$labels = [];
$data = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $labels[] = $row["category"];
        $data[] = $row["count"];
    }
}

// Close connection
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complaints Pie Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <div style="width: 75%;">
        <canvas id="pieChart" width="400" height="400"></canvas>
    </div>
    <script>
        var pieData = {
            labels: <?php echo json_encode($labels); ?>,
            datasets: [{
                data: <?php echo json_encode($data); ?>,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)'
                ],
                borderWidth: 1
            }]
        };

        var pieCtx = document.getElementById('pieChart').getContext('2d');
        var pieChart = new Chart(pieCtx, {
            type: 'pie',
            data: pieData
        });
    </script>
</body>
</html>

</div>

 <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne"><b>How this Issue Reporting Form Works?</b></button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>
                    <h3>Confidential and Accessible mechanism to voice your concerns, feedbacks</h3>The main purpose of a complaint form is to provide individuals with a structured and accessible means to communicate grievances, issues, or concerns to organizations, facilitating effective resolution and accountability.By using this issue reporting form we collect your issue related to
                    </strong>
                </div>
              </div>
            </div>
          </div>



</div>
<div onmouseenter="ChangeContent()">
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <div class="container bg-light p-3 rounded">
          <h2 class="text-center mb-4" id="h2"onmouseenter="changeColor()" onmouseout="ChangeColor()";>Issue Reporting Form</h2>
          <form name="form" id="form"  action="success.php" method="post" >
	    <div class="form-group">
              <label for="name">Student ID</label>
              <input type="text" class="form-control" id="id" name="id" required><span id="uerror"></span>
            </div>
            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" class="form-control" id="name" name="name" required><span id="uerror"></span>
            </div>
            <div class="form-group">
              <label for="location">Email</label>
              <input type="text" class="form-control" id="email" name="email" required><span id="lerror"></span>
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" id="phone" name="phone" required><span id="perror"></span>
            </div>
	    <div class="form-group">
              <label for="name">Hostel Name</label>
              <input type="text" class="form-control" id="hostelname" name="hostelname" required><span id="uerror"></span>
            </div>
            <div class="form-group">
              <label for="location">Dorm No</label>
              <input type="text" class="form-control" id="dormno" name="dormno" required><span id="lerror"></span>
            </div>
            <div class="form-group">
              <select class="form-select" id="category" name="category" required>
                <option value="">Problem Catogary</option>
                <option value="Electrical">Electrical</option>
                <option value="Water">Water</option>
                <option value="Outpass">Outpass</option>
                <option value="Outpass">Health</option>
                <option value="Others">Others</option>
              </select><span id="berror"></span>
            </div>
	    <br>
            <div class="form-group">
              <textarea cols=43 placeholder="describe your problem here...." name="problem"></textarea>
            </div>
            <div class="text-center">
              <button type="submit" name="submit" value="submit" class="btn btn-success">Submit</button>
              <button type="reset" name="reset" class="btn btn-danger">Reset</button>
            </div>
<div id="errorContainer"></div>
          </form>
        </div>
      </div>
    </div>
  </div>

 <script type="text/javascript">
const form = document.querySelector("form");
        const uerror=document.getElementById("uerror");
         const lerror=document.getElementById("lerror");
         const perror=document.getElementById("perror");
         const berror=document.getElementById("berror");

function validate()
{
var n = document.form.name.value;
if( n == "" || n.length< 3 )
{
	uerror.innerText= "Please enter valid name minimum length 3 characters and maximum length 80 characters !" ;
       return false;
}
else{
	uerror.innerText="";
}

var location =document.getElementById("location").value;
if( location == ""||location.length!=6 )
{
	lerror.innerText= "Please provide your location pincode correctly!" ;
	return false;
}
else{
	lerror.innerText="";
}

const phone=document.getElementById("phone").value;
const pattern=/^[6-9][0-9]{9}$/;
let check=pattern.test(phone);
if(check!=true){
	perror.innerText="Please provide correct phone number";
	return false;
}
else{
	perror.innerText="";
}


return true ;
}
function ChangeContent()
{
var i=document.querySelector('i');
i.innerText="Bleeding together for tomorrow";

}
function changeColor(){
document.getElementById("h2").style.backgroundColor="#dc3545"
}
function ChangeColor(){
document.getElementById("h2").style.backgroundColor="#ffffff"
}

  </script>


</body>

</html>

