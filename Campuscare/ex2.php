
<?php
	session_start();
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      href="https://cdn.jsdelivr.net/npm/remixicon@3.2.0/fonts/remixicon.css"
      rel="stylesheet"
    />

    <link rel="stylesheet" href="styles.css" />
  <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

    <title>review of company</title>
  </head>
<style>
@import url("https://fonts.googleapis.com/css2?family=Noto+Serif:wght@700&family=Poppins:wght@400;500;600&display=swap");
@import url('https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&family=Poppins:ital,wght@0,200;0,300;0,400;0,500;0,600;1,200&family=Whisper&display=swap');
:root {
  --primary-color: #1a2c50;
  --secondary-color: #f4f7fe;
  --text-dark: #333333;
  --text-light: #767268;
  --extra-light: #ffffff;
}
.btn {
  padding: 0.5rem 1.5rem;
  outline: none;
  border: none;
  font-size: 0.95rem;
  font-weight: 400;
  color: white;
  background-color: #3d5cb8;
  border-radius: 2rem;
  cursor: pointer;
  transition: 0.3s;
}
.btn:hover{
  box-shadow:1px 1px 10px gray;
}
nav {
  max-width: 1200px;
  margin: auto;
  padding: 1rem;
  align-items: center;
  justify-content: space-between;
  gap: 1rem;
  display:flex;
}

.nav__logo {
  font-size: 1.5rem;
  font-weight: 600;
  color: var(--text-dark);
}

.nav__links {
  list-style: none;
  align-items: center;
  gap: 2rem;
  display:flex;
  
}


.link a {
  font-weight: 500;
  color:#64748b;
  transition: 0.3s;
}

.link a:hover {
  color: #000;
}
.section__container {
  width: 100%;
  max-width: 1200px;
  margin: auto;
  padding: 1rem;
  text-align: center;
  
}
.main_footer {
    background-color:  #334c99;
  }
  
  .main_footer .footer__container {
    display: grid;
    grid-template-columns: 2fr repeat(2, 1fr);
    gap: 5rem;
  }
  
  .main_footer .footer__col h3 {
    font-size: 1.5rem;
    font-weight: 500;
    color: white;
    margin-bottom: 1rem;

  }
  
  .main_footer .footer__col h4 {
    font-size: 1.2rem;
    font-weight: 500;
    color: white;
    margin-bottom: 1rem;
  }
  
  .main_footer .footer__col p {
    color: white;
    margin-bottom: 1rem;
    cursor: pointer;
    transition: 0.3s;
  }
  
  .main_footer .footer__col p:hover {
    color: white;
  }
  
  .main_footer .footer__bar {
    padding: 0.5rem;
    display: flex;
    align-items: center;
    justify-content: space-between;
    gap: 1rem;
    border-top: 1px solid white;
  }
  
  .main_footer .footer__bar p {
    font-size: 0.9rem;
    color: white;
  }
.header {
  margin-bottom: 2rem;
}

.header p {
  letter-spacing: 2px;
  font-size: 1rem;
  font-weight: 500;
}

.header h1 {
  font-family: "Noto Serif", serif;
  font-size: 2rem;
  font-weight: 900;
}

.testimonials__grid {
  width: 100%;
  display: grid;
  grid-template-columns: repeat(3, 1fr);
  gap: 2rem;
  margin-bottom: 2rem;
}

.card {
  padding: 3rem;
  display: grid;
  gap: 1rem;
  background-color:white;
  border-radius: 5px;
  box-shadow: 5px 5px 30px rgba(0, 0, 0, 0.1);
  cursor: pointer;
}
.card:hover{
	-webkit-transform:translateY(10px);
	tranfsorm:translateY(10px);
        box-shadow:5px 5px 10px gray;
}
.card i {
  font-size: 2.5rem;
  color: gold;
}

.card p {
  font-size: 1rem;
  font-weight: 500;
}

.card hr {
  width: 40px;
  margin: auto;
  color: var(--text-light);
}

.card img {
  width: 60px;
  height: 60px;
  margin: auto;
  border-radius: 100%;
  border: 1px solid var(--primary-color);
}

.card .name {
  font-size: 0.9rem;
  font-weight: 400;
  color: var(--text-light);
  transition: 0.3s;
}

.card .name:hover {
  color: var(--primary-color);
}

.footer h4 {
  font-family: "Noto Serif", serif;
  font-size: 1.25rem;
  font-weight: 900;
  margin-bottom: 1rem;
}

.footer p {
  max-width: 450px;
  margin: auto;
  font-size: 0.9rem;
  line-height: 1.5rem;
  margin-bottom: 2rem;
}

.footer button {
  padding: 1rem 2rem;
  outline: none;
  border: none;
  font-size: 0.8rem;
  font-weight: 600;
  color: var(--extra-light);
  background-color: var(--primary-color);
  border-radius: 5px;
  cursor: pointer;
}

@media (width < 900px) {
  .testimonials__grid {
    grid-template-columns: repeat(2, 1fr);
    gap: 1rem;
  }
}

@media (width < 600px) {
  .testimonials__grid {
    grid-template-columns: repeat(1, 1fr);
  }
}
</style>
<style>
body {
    background: white;
    height: 100vh;

    align-items: center;
    justify-content: center;
  }
  .rating {
    display: inline-block;
    font-size: 0;
    position: relative;
    text-transform: capitalize;
    padding: 0 50px 8%;
    color: gray;
  }
    
  label {
    float: right;
    padding: 0;
    font-size: 50px;
    cursor: pointer;
  }   
  label::before {
    content: "\2606";
    padding-bottom: 8px;
    display: inline-block;
    transition: 0.2s;
  } 
  span {
    opacity: 0;
    position: absolute;
    left: 0;
    bottom: 0;
    width: 100%;
    text-align: center;
    height: 20px;
    font-size: 1rem;
    white-space: nowrap;
    transition: 0.15s ease-out;
    pointer-events: none;
    letter-spacing: -2px;
    transform: translateY(-50%);
  } 
  label:hover span {
    opacity: 1;
    transform: none;
    letter-spacing: 0;
  }
  input:checked ~ label::before {
    content: "\2605";
    color: orange;
    filter: drop-shadow(0 0 4px);
    transform: rotate(.2turn);
    transition-delay: calc(0.1 * attr(data-idx integer));
  }
  
</style>
<style>
@import url("https://fonts.googleapis.com/css2?family=Roboto&display=swap");
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
  font-family: "Roboto", sans-serif;
}

.wrapper {
  max-width: 75%;
  margin: auto;
}

.wrapper > p,
.wrapper > h1 {
  margin: 1.5rem 0;
  text-align: center;
}

.wrapper > h1 {
  letter-spacing: 3px;
}

.accordion {
  background-color: white;
  color: rgba(0, 0, 0, 0.8);
  cursor: pointer;
  font-size: 1.2rem;
  width: 100%;
  padding: 2rem 2.5rem;
  border: none;
  outline: none;
  transition: 0.4s;
  display: flex;
  justify-content: space-between;
  align-items: center;
  font-weight: bold;
}

.accordion i {
  font-size: 1.6rem;
}

.active,
.accordion:hover {
  background-color: #f1f7f5;
}
.pannel {
  padding: 0 2rem 2.5rem 2rem;
  background-color: white;
  overflow: hidden;
  background-color: #f1f7f5;
  display: none;
}
.pannel p {
  color: rgba(0, 0, 0, 0.7);
  font-size: 1.2rem;
  line-height: 1.4;
}

.faq {
  border: 1px solid rgba(0, 0, 0, 0.2);
  margin: 10px 0;
}
.faq.active {
  border: none;
}
</style>
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600&display=swap');

*{
  font-family: 'Poppins', sans-serif;
  margin:0; padding:0; 
  box-sizing: border-box;
  text-transform: capitalize;
  outline: none; border:none;
  text-decoration: none;
}

.container{
  margin:20px auto;
  max-width: 700px;
}

.container .heading{
  text-align: center;
  font-size: 30px;
  padding:20px;
  margin-bottom: 20px;
}


@keyframes animate {
  0%{
    transform: scaleY(0);
  }
}

.
</style>
  <body>
    <nav class="col-md-12">
      <div class="nav__logo">Campus Care</div>
      <ul class="nav__links">
        <li class="link"><a href="index.php">HOME</a></li>
        <li class="link"><a href="about.php">ADMIN</a></li>
        <li class="link"><a href="Offers.php">CONTACT</a></li>
        <li class="link"><a href="review.php">ABOUT</a></li>
        <li class="link"><a href="details.php">FAQS</a></li>
      </ul>
    </nav>

    <div class="section__container">
      <div class="header">
        <p>Let's see</p>
        <h1 style="font-family: 'Dancing Script', cursive;">Our Gems Supporting our Diamonds</h1><br>
        <h4>Here we go look at our care takers and their details.</h4>
      </div>
      <div class="testimonials__grid">
        <div class="card">
          <span><i class="ri-double-quotes-l"></i></span>
          <p>
            Penna hostel<br/>Right Wing<br/>Supporting the students from 2015 and counting<br/>Ph:123456789
          </p>
          <hr />
          <img src="womenreview.jpg" alt="user" />
          <p class="name">P NagaNihitha</p>
        </div>
        <div class="card">
          <span><i class="ri-double-quotes-l"></i></span>
          <p>
          Penna hostel<br/>Right Wing<br/>Supporting the students from 2022 and counting <br/>Ph:123456789
          </p>
          <hr />
          <img src="womenreview.jpg" alt="user" />
          <p class="name">Bhavana</p>
        </div>
        <div class="card">
          <span><i class="ri-double-quotes-l"></i></span>
          <p>
          Penna hostel<br/>Right Wing<br/>Supporting the students from 2020 and counting<br/>Ph:123456789
          </p>
          <hr />
          <img src="women2.jpeg" alt="user" />
          <p class="name">J Sharanya</p>
        </div>

	 <?php
	$handler=mysqli_connect("localhost","root","","airline");
	$query1="select * from review;";
	$result=mysqli_query($handler,$query1);
	$rows=mysqli_num_rows($result);
	if($rows>0)
	{
		while($record=mysqli_fetch_assoc($result))
		{
			$image=$record['file_store'];
			$name=$record['name'];
			$comment=$record['comment'];
			echo "<body><div class='card'>
          <span><i class='ri-double-quotes-l'></i></span>
          <p>$comment</p>
          <hr />
          <img src=$image alt='user' />
          <p class='name'>$name</p>
        </div></body>";
	   	}
	}
	?>
      </div>
      <div class="footer">
      <h1> please kindly rate this website</h1>
       <form>
   <div class="rating">
     <input type='radio' hidden name='rate' id='rating-opt5' data-idx='0'>	
     <label for='rating-opt5'><span>Amazing, i love it!</span></label>

     <input type='radio' hidden name='rate' id='rating-opt4' data-idx='1'>
     <label for='rating-opt4'><span>very good</span></label>

     <input type='radio' hidden name='rate' id='rating-opt3' data-idx='2'>
     <label for='rating-opt3'><span>Neutral</span></label>

     <input type='radio' hidden name='rate' id='rating-opt2' data-idx='3'>
     <label for='rating-opt2'><span>Dissatisfied</span></label>

     <input type='radio' hidden name='rate' id='rating-opt1' data-idx='4'>
     <label for='rating-opt1'><span>Very Dissatisfied</span></label>
   </div>
</form>

	<script>
  function checkManagerAccess() {
    <?php 
      $handler = mysqli_connect("localhost", "root", "", "airline");
      $query1 = "SELECT * FROM manager;";
      $result = mysqli_query($handler, $query1);
      $rows = mysqli_num_rows($result);
      
      if ($rows > 0) {
        while ($record = mysqli_fetch_assoc($result)) {
          if ($_SESSION['email'] == $record['email']) {
            echo "window.location.href = 'addflight.php';";
          } else {
            echo "alert('Only managers have access to add flights');";
          }
        }
      }
    ?>
  }
</script>
  </body>
</html>
