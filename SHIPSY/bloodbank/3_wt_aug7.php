<!DOCTYPE html>
<html lang="en">

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

    h1 {
      color: #b30000;
    }

    .box {
      width: 100%;
      height: 250px;
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


<div class="nav_body">
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
            <a class="nav-link" href="1_revivelogin_page.php">Recepient page</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="about.html">About  Us</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
  

</div>


  <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12 col-lg-6">
        <div class="container bg-light p-3 rounded">
          <h1 class="text-center mb-4">Blood Donation</h1>
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne"><b>WHY THIS PROJECT REVIVE?</b></button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>
                    <h1>Reviving hope, compassion, and support for individuals</h1>
                    Blood is undeniably vital for all of us, as we cannot survive without it. In critical situations at
                    hospitals, there is an inevitable need for blood transfusions. However, we cannot predict the exact
                    time, place, or circumstances in which a patient may require it. Unfortunately, there may be instances
                    when the required blood group is unavailable. In today's fast-paced world, blood donation faces
                    challenges due to busy lifestyles and time constraints. However, many compassionate individuals
                    continue to donate, understanding the critical impact it has on saving lives. Raising awareness and
                    promoting the importance of blood donation can inspire more people to come forward.</strong>
                </div>
              </div>
            </div>
          </div>
          <div class="box">
<div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="2000">
     <img src="b11.png" class="d-block w-100" height="250" >
    </div>
    
    <div class="carousel-item" data-bs-interval="2000">
      <img src="b13.jpeg" class="d-block w-100" height="250">
    </div>
    <div class="carousel-item" data-bs-interval="2000">
      <img src="b14.jpg" class="d-block w-100" height="250">
    </div>
    <div class="carousel-item">
      <img src="b15.jpg" class="d-block w-100" height="250" >
    </div>
  </div>
</div>





</div>
<div onmouseenter="ChangeContent()">
          <i>Tomorrow's Lifeline</i><br>
          </div>
        </div>
      </div>
      <div class="col-lg-6 col-sm-12">
        <div class="container bg-light p-3 rounded">
          <h2 class="text-center mb-4" id="h2"onmouseenter="changeColor()" onmouseout="ChangeColor()";>Blood Donation Form</h2>
          <form name="form" id="form" action="6_revive.php" method="post" onsubmit="return validate()">
            <div class="form-group">
              <label for="name">Full Name</label>
              <input type="text" class="form-control" id="name" name="name" required><span id="uerror"></span>
            </div>
            <div class="form-group">
              <label for="location">Location pincode</label>
              <input type="number" class="form-control" id="location" name="location" required><span id="lerror"></span>
            </div>
            <div class="form-group">
              <label for="phone">Phone</label>
              <input type="tel" class="form-control" id="phone" name="phone" required><span id="perror"></span>
            </div>
            <div class="form-group">
              <label for="bloodGroup">Blood Group</label>
              <select class="form-select" id="bloodGroup" name="bloodGroup" required>
                <option value="">Select Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
                <option value="Bombay Bloodgroup">Bombay Bloodgroup</option>
                <option value="Golden Bloodgroup">Golden Bloodgroup</option>
		<option value="A1+">A1+</option>
		<option value="A1-">A1-</option>
		<option value="A1B+">A1B+</option>
		<option value="A1B-">A1B-</option>
		<option value="A2+">A2+</option>
		<option value="A2-">A2-</option>
		<option value="A2B+">A2B+</option>
		<option value="A2B-">A2B-</option>
              </select><span id="berror"></span>
            </div>
            <div class="form-group">
              <label for="donationDate">Preferred Donation Date</label>
              <input type="date" class="form-control" id="donationDate" name="donationDate" required>
            </div><br>
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

