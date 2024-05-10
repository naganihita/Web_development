<?php
    session_start();
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>My Webpage</title>
    <style>
    *{
    margin: 0;
    padding: 0;
}


body {
            background-image: url(forest.jpg);
            /* Adjust background properties as needed */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }
.main{
    width:100%;
    background: linear-gradient(to top,rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%),url(forest.jpg);
    background-position: center;
    background-size: cover;
    height: 100vh;
}

.navbar{
    width:1200px;
    height: 75px;
    margin: auto;
}

.icon{
    width:200px;
    float:left;
    height:70px;
}

.logo{
    color:#ff7200;
    font-size: 35px;
    font-family: Arial;
    padding-top: 10px;
}

.menu{
    width:400px;
    float:left;
    height:70px;
}

ul{
    float:left;
    display: flex;
    justify-content: center;
    align-items: center;
}

ul li{
    list-style: none;
    margin-left: 62px;
    margin-top: 27px;
    font-size: 14px;
}

ul li a{
text-decoration: none;
color: #fff;
font-family: Arial;
font-weight: bold;
transition: 0.4s ease-in-out;
}

ul li a:hover{
    color: #ff7200;
}

.search{
    width:330px;
    float:left;
    margin-left: 270px;
}

.srch{
    font-family: 'Times New Roman';
    width:200px;
    height:40px;
    background: transparent;
    border: 1px solid #ff7200;
    margin-top: 13px;
    color: #fff;
    border-right:none ;
    font-size: 16px;
    float: left;
    padding: 10px;
    border-bottom-left-radius: 5px;
    border-top-left-radius: 5px;
}

.btn{
    width:100px;
    height:40px;
    background: #ff7200;
    border: 2px solid #ff7200;
    margin-top: 13px;
    color: #fff;
    font-size: 15px;
    border-bottom-right-radius: 5px;
    border-top-right-radius: 5px;

}

.btn:focus{
    outline: none;
}
.srch:focus{
    outline: none;
}
.content{
    width:1200px;
    height:auto;
    margin:auto;
    color:#fff;
    position: relative;
}

.content .par{
    padding-left: 20px;
    padding-bottom: 25px;
    font-family: Arial;
    letter-spacing: 1.2px;
    line-height: 30px;
    opacity: 0.5;
}
.content .radio .radio-btn{
    display:flex;
}
.content h1{
    font-family: 'Times New Roman';
    font-size: 50px;
    padding-left: 20px;
    margin-top: 8%;
    letter-spacing: 2px;
}

.content .cn{
    width:160px;
    height: 40px;
    background: #ff7200;
    border: none;
    margin-bottom: 10px;
    margin-left: 20px;
    font-size: 18px;
    border-radius: 10px;
    cursor:pointer;
}

.content .cn a{
    text-decoration: none;
    color: #000;
    transition: .4s ease;
}

.cn:hover{
    background-color: #fff;
}

.content span{
    color:#ff7200;
    font-size: 60px;
}

.form{
    width:240px;
    height:380px;
    background: linear-gradient(rgba(0,0,0,0.5)50%,rgba(0,0,0,0.5)50%);
    position: absolute;
    top: -20px;
    left:870px;
    border-radius: 10px;
    padding: 25px;
}

.form h2{
    width:220px;font-family: sans-serif;
    text-align: center;
    color: #ff7200;
    font-size: 22px;
    background-color: #fff;
    border-radius: 10px;
    margin:2px;
    padding: 8px;
}

.form input{
    width:240px;
    height: 35px;
    background: transparent;
    border-bottom: 1px solid #ff7200;
    border-top: none;
    border-right: none;
    border-left: none;
    font-size: 15px;
    color: #fff;
    letter-spacing: 1px;
    margin-top: 30px;
font-family: sans-serif;
}

.form input:focus{
    outline: none;
}

::placeholder{
color: #fff;
font-family: Arial;
}

.btnn{
    width:240px;
    height:40px;
    background: #ff7200;
    border: none;
    margin-top: 30px;
    font-size: 18px;
    border-radius: 10px;
    cursor:pointer;
    color: #fff;
}

.btnn:hover{
    background-color: #ff7200;
    color: #ff7200;
}

.btnn a{
    color: #000;
    text-decoration: none;
    font-weight: bold;
}

.form .link{
    font-family: Arial, Helvetica, sans-serif;
    font-size: 17px;
    padding-top: 20px;
    text-align: center;
}

.form .link a{
    text-decoration: none;
    color: #ff7200;
}

.liw{
    padding-top: 15px;
    padding-bottom: 10px;
    text-align: center;
}
.media .med{
    color:white;
    padding: 15px;
    height:20px;
    width:20px;
}
.media{
    margin-left: 50px;
}
#ln{
    text-decoration: none;
    color: #ff7200;
}
    </style>
</head>
<body>
    <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">CampusCare</h2>
            </div>
    <div class="menu">
        <ul>
            <li><a href="#">HOME</a></li>
            <li><a href="login.php">ADMIN</a></li>
            <li><a href="contact.php">CONTACT</a></li>
            <li><a href="ex.php">ABOUT</a></li>
            <li><a href="status.php">STATUS</a></li>

        </ul>
    </div>
    <div class="search">
        <input type="search" class="srch" name="" placeholder="Type to text">
        <a href=""><button class="btn">Search</button></a>
    </div>
        </div>
        <div class="content">
            
            <h1>Empowering students,<br> fostering community and <br>transforming hostel living<br><span>one care at a time.</span></h1><p class="par">At CampusCare, we understand that the journey of higher education comes with its <br>unique challenges, especially when it comes to finding a comfortable and supportive living <br>environment. That's why we've dedicated ourselves to providing comprehensive solutions <br>tailored to meet the needs of students residing in hostels.</p>
            <button class="cn"><a href="#">JOIN US</a></button>
            <form  method="post" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
            <div class="form" >
                <h2>Login Here</h2>
             
                
                 <input type="text" placeholder="Username"   name="user"  class="input_text" autocomplete="off" />
              <input type="hidden" name="bmiSubmitted" id="bmiSubmitted" value="1" />
                <input type="password" placeholder="Password"  name="pass"   class="input_text" autocomplete="off" />
                <a class="btnn"><input type="submit" name="sub" value="LOGIN"></a>
                <p class="link">Dont have an account?</p><br>
                <a href="#" id="ln">Sign up</a> here
                <p class="liw">Log in with</p>
                <div class="media">
                    <a href="#" class="med"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="med"><i class="fa-brands fa-twitter"></i></a>
                    <a href="#" class="med"><i class="fa-brands fa-instagram"></i></a>
                </div>
            </div>
            </form>
        </div>
    </div>
</body>
</html>
<?php
   $handler=mysqli_connect('localhost','root','','campuscare');
  
   
   
   
?>



