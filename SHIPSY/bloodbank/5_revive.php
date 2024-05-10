<html>
<head>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<title>EmergencyBlood</title>
<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
}
body{
 font-family:'Open Sans',sans-serif;
 background:linear-gradient(rgba(255,255,255,0.65),rgba(255,255,255,0.65)),url('blood2.jpg');
 background-repeat: no-repeat;
 background-size:cover;
 color:black;
}
.my-fonts{
   font-family: 'La Belle Aurore' , cursive;
}
.header{
 height: 100vh;
 display: grid;
 justify-content: center;
 align-items: center;
 position: relative;
}
.banner{
  text-align: center;
}
.banner_title{
  font-size: 4rem;
  text-transform: capitalize;
  color:#a62c2b;
}
.video_container{
  position:absolute;
  top:0;
  left:0;
  width:100%;
  height:100%;
  z-index:-1;
}
.video_item{
 width:100%;
 height:100%
 object-fit:cover;
 z-index:-1;
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
    
 
    .container-fluid {
      padding: 20px;
      border-radius: 10px;
      background-color: #FFFFFF;
      box-shadow: 2px 3px 6px rgba(1, 0, 0, 0.1);
    }
  dt{
   color:#ab00ff;
  font-family:'Brush Script MT ';
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
.card{
color:#b30000;
}

</style>
</head>
<body class="fourbody">
<div class="nav_body">
  <nav class="navbar  navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="#">REVIVE</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="3_wt_aug7.php">Donor Page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="1_revivelogin_page.php">Recepient Page</a>
          </li>
	   <li class="nav-item">
            <a class="nav-link" href="about.html">About  Us</a>
          </li>
	 <li class="nav-item">
            <a class="nav-link" href="ASSIGNMENT6.php">UPLOAD</a>
          </li>
   <li class="nav-item">
            <a class="nav-link" href="abs.php">AVAILABLE BLOOD SAMPLES</a>
          </li>
        </ul>
        
      </div>
    </div>
  </nav>
  

</div>

<header class="header" id="header">
<div class="banner">
<h1 class="banner_title my-fonts">Amplify Red Drops</h1>
  <div class="container-fluid mt-4">
    <h1>Welcome to REVIVE</h1>
    <p><b>Our platform for blood donation and saving lives.</b></p>
  </div>
</div>

<article class="video_container">
<video class="video_item" autoplay muted loop>
<source src="blood4.mp4" type="video/mp4">
</video>
</article>
</header>
<br><br><br><br><br><br><br>
<div class="row justify-content-center ">
<div class="col-lg-9 ">
            <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card" >
                    <div class="card-header text-center" >A+</div>
                    <div class="card-body">
						<ul>
							<li>You can give blood to A+ and AB+.</li> 
							<li>You can receive blood from A+, A-, O+ and O-</li>
						</ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">A-</div>
                    <div class="card-body">
					<ul>
                       			 <li>You can give blood to A-, A+, AB- and AB+.</li> 
						<li>You can receive blood from A- and O-.</li>
					</ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">B+</div>
                    <div class="card-body">
						<ul>
							<li>You can give blood to B+ and AB+.</li> 
							<li>You can receive blood from B+, B-, O+ and O-.</li>
						 </ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">B-</div>
                    <div class="card-body">
						<ul>
							<li>You can give blood to B-, B+, AB+ and AB-.</li>
							<li>You can receive blood from B- and O-.</li>
						</ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">AB+</div>
                    <div class="card-body">
					<ul>
                         <li>People with AB+ can donate only to AB+ blood type.</li> 
						 <li>AB+ are <b>universal red cell recipients</b> because they can receive red cells from all types.</li>
					</ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">AB-</div>
                    <div class="card-body">
						<ul>
							<li>You can give blood to both AB- and AB+ blood types.</li>
							<li>Donors with AB+ and AB- blood are <b>universal plasma donors</b>. They can donate blood to all negative blood types.</li>
						</ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">O+</div>
                    <div class="card-body">
					<ul>
                        <li>You can donate to A+, B+, AB+ and O+ Blood types.</li>
                        <li>You can receive blood from O+ and O-.</li>
					</ul>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">O-</div>
                    <div class="card-body">
					<ul>
                        <li>Donors with type O- blood are <b>universal red cell donors</b> whose donations can be given to people of all blood types</li>
                        <li>People with O- blood can only receive red cell donations from O- donors.</li>
					</ul>
                    </div>
                </div>
            </div>
        </div>
 <div class="row">
            <div class="col-lg-12 rounded mb-5">
                   <div class="row mb-5">
             <div class="container mt-5">
    <div class="row">
      <div class="col-sm-12">
        <div class="container bg-light p-3 rounded">
          <div class="accordion" id="accordionExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                  aria-expanded="true" aria-controls="collapseOne"><b>HEALTH TIPS</b></button>
              </h2>
              <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                data-bs-parent="#accordionExample">
                <div class="accordion-body">
                  <strong>
                   <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-success text text-danger">Health Tips</div>
                <div class="card-body">
                    <dt>Eat a healthy diet</dt>
                    <dd>Eat a combination of different foods, including fruit, vegetables, legumes, nuts and whole grains. Adults should eat at least five portions (400g) of fruit and vegetables per day. You can improve your intake of fruits and vegetables by always including veggies in your meal; eating fresh fruit and vegetables as snacks; eating a variety of fruits and vegetables; and eating them in season. By eating healthy, you will reduce your risk of malnutrition and noncommunicable diseases (NCDs) such as diabetes, heart disease, stroke and cancer.</dd>
                    <dt> Consume less salt and sugar</dt>
                    <dd>On the other hand, consuming excessive amounts of sugars increases the risk of tooth decay and unhealthy weight gain. In both adults and children, the intake of free sugars should be reduced to less than 10% of total energy intake. This is equivalent to 50g or about 12 teaspoons for an adult. WHO recommends consuming less than 5% of total energy intake for additional health benefits. You can reduce your sugar intake by limiting the consumption of sugary snacks, candies and sugar-sweetened beverages.</dd>
                    <dt>Be active</dt>
                    <dd>Physical activity is defined as any bodily movement produced by skeletal muscles that requires energy expenditure. This includes exercise and activities undertaken while working, playing, carrying out household chores, travelling, and engaging in recreational pursuits. The amount of physical activity you need depends on your age group but adults aged 18-64 years should do at least 150 minutes of moderate-intensity physical activity throughout the week. Increase moderate-intensity physical activity to 300 minutes per week for additional health benefits.</dd>
                    <dt>Don’t smoke</dt>
                    <dd>Smoking tobacco causes NCDs such as lung disease, heart disease and stroke. Tobacco kills not only the direct smokers but even non-smokers through second-hand exposure. Currently, there are around 15.9 million Filipino adults who smoke tobacco but 7 in 10 smokers are interested or plan to quit.
                    If you are currently a smoker, it’s not too late to quit. Once you do, you will experience immediate and long-term health benefits. If you are not a smoker, that’s great! Do not start smoking and fight for your right to breathe tobacco-smoke-free air.</dd>
                    <dt>Drink only safe water</dt>
					<dd>Drinking unsafe water can lead to water-borne diseases such as cholera, diarrhoea, hepatitis A, typhoid and polio. Globally, at least 2 billion people use a drinking water source contaminated with faeces. Check with your water concessionaire and water refilling station to ensure that the water you’re drinking is safe. In a setting where you are unsure of your water source, boil your water for at least one minute. This will destroy harmful organisms in the water. Let it cool naturally before drinking.</dd>
                    <dt>Clean your hands properly</dt>
					<dd>Hand hygiene is critical not only for health workers but for everyone. Clean hands can prevent the spread of infectious illnesses. You should handwash using soap and water when your hands are visibly soiled or handrub using an alcohol-based product.</dd>
                    <dt>Have regular check-ups</dt>
					<dd>Regular check-ups can help find health problems before they start. Health professionals can help find and diagnose health issues early, when your chances for treatment and cure are better. Go to your nearest health facility to check out the the health services, screenings and treatment that are accessible to you.</dd>
                    Visit here to get more health tips.
                    <a href="https://fourwellness.co/blog/31-simple-wellness-tips-for-healthy-and-happy-living" target="_blank">Healthy & Happy Living Tips</a>
                </div>
            </div>
            </div>
        </div>
    </div>
</strong>
                </div>
              </div>
            </div>
          </div>
</div>
            </div>
        </div>
       



</body>
</html>
