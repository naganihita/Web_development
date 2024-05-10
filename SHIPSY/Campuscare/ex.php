<?php
    session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  <title>About Us - Blood Bank</title>
<style>
body{
 font-family:'Open Sans',sans-serif;
 background:linear-gradient(rgba(255,255,255,0.65),rgba(255,255,255,0.65));
 background-repeat: no-repeat;
 background-size:cover;
 color:black;
}
 .nav_body {
      font-family: 'Roboto', sans-serif;
      background-color: #f8f9fa;
    }
    
    .navbar {
      background-color: #e93535;
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
      color: black;
      background:transparent;
    }
    
    .form-control {
      border: none;
      border-radius: 20px;
    }
    
 
    .container-fluid {
      padding: 20px;
      border-radius: 10px;
      background-color: #FFFFFF;
      box-shadow: 2px 3px 6px rgba(1, 0, 0, 0.1);
    }

</style>
</head>
<body>
  <div class="nav_body">
  <nav class="navbar  navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">Campus Care</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.php">HOME</a>
          </li>
      <li class="nav-item">
            <a class="nav-link" href="#">ABOUT</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
  

</div>
<div class="container mt-5 text-dark">
  <div class="row">
    <div class="col-lg-6">
      <h2><b>Our Mission</b></h2>
      <p>At CampusCare, our mission is to provide unwavering support and assistance to students residing in hostels, ensuring their well-being and comfort throughout their academic journey. We are dedicated to fostering a conducive living environment by promptly addressing and resolving hostel-related concerns, empowering students to thrive in their educational pursuits without the burden of accommodation worries. Through personalized care, reliable assistance, and innovative solutions, we aim to enhance the overall hostel experience, creating a home away from home where students can focus on their studies and personal growth with confidence and peace of mind.</p>
    </div>
    <div class="col-lg-6">
      <h2><b>Friendly CAREtakers!</b></h2>
      <p>With years of experience in hostel management and a deep understanding of the needs of students, our team is committed to delivering top-notch services that prioritize your comfort, safety, and well-being. We believe that by taking care of the little things, we can make a big difference in your hostel experience.

What sets CampusCare apart is our dedication to personalized care and attention. We don't just see you as residents; we see you as part of our campus family. That's why we strive to foster a sense of community and belonging, where every student feels valued and supported.</p>
    </div>
  </div>
</div

<div class="container mt-5">
  <div class="row">
    <div class="col-lg-4">
      <div class="card" style="margin-left:80px;">
        <div class="card-body">
          <h5 class="card-title"><b>Our Facility</b></h5>
          <p class="card-text">We make every student feel this Hostel as their home. We serve you a good hospitality 24/7.</p>
	<div class="card-body text-light" style="background-color:#63b89cf5;">
	 <font face="arial" color="black" size="10"><h5 class="card-title display-4">CONTACT US</h5></font>
  <p class="card-text"><font face="arial" color="black" size="5"><b>Tharun Yetti</b></p>
      <p class="card-link"><a href="tharunyetti24@gmail.com" style="color:black; font-size:20px;text-decoration:none;">caretaker1@gmail.com</a></p>
	<p class="card-link"><a href="tel:7075690330" style="color:black;font-size:20px;text-decoration:none;">7075690330</a></p></font>
	 <p class="card-text"><font face="arial" color="black" size="5"><b>Sharanya Jakkula</b></p>
      <p class="card-link"><a href="tharunyetti24@gmail.com" style="color:black; font-size:20px;text-decoration: none;">caretaker2@gmail.com</a></p>
	<p class="card-link"><a href="tel:7075690331" style="color:black;font-size:20px;text-decoration: none;">7075690331</a></p></font>
        </div>
      </div>
    </div>
</div>
    <div class="col-lg-3 text-dark">
     <div class="card">
     <img src="voice.jpeg" class="card-img-top" >
        <div class="card-body">
          <h3 class="card-title" ><b class="text-capitalize fw-bold">Raise Your Voice</b></h3>
          <p class="card-text"><b>We want students raise their voice against your problem of living in hostels and be friendly with our caretakers because they are your <b>CARE</b>takers<br/> We are ONE.</b></p></div>
        </div>
      </div>
  <div class="col-lg-4 ">
<form action="#" >
<div class="row mb-3">
<h1 class="display-4 text-danger">WEBSITE REVIEW</h1>
            <div class="col-lg-6">
              <input type="text" placeholder="First Name" id="inputFirstName" class="shadow form-control form-control-lg">
          </div>
	<div class="col-lg-6">
              <input type="text" placeholder="Last Name" id="inputLastName" class="shadow form-control form-control-lg">
        </div></div>
            <div class="col-lg-12 mb-3">
              <input type="email" placeholder="Student ID" id="inputStudentId" class="shadow form-control form-control-lg">
            </div>
             <div class="col-lg-12 mb-3">
              <input type="email" placeholder="email address" id="inputEmail" class="shadow form-control form-control-lg">
            </div>
            <div class="col-lg-12 mb-3">
              <textarea name="message" placeholder="message" id="message" rows="5" class="shadow form-control form-control-lg"></textarea>
            </div>
            <div class="text-center d-grid mt-1">
              <button type="button" class="btn btn-danger rounded-pill pt-3 pb-3">
                submit
              </button>
            </div>
          </form>

</div>
    </div>

</div>
  </div>





<footer class="bg-dark text-light text-center py-3">
  &copy; copyright 2023 CampusCare. All rights reserved.created by CALM CREW
</footer>

</body>
<?php
echo "ABOUT US";
?>
</html>

