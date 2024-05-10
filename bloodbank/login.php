<?php 
session_start();
if (isset($_SESSION['hid'])) {
  header("location:bloodrequest.php");
}elseif (isset($_SESSION['rid'])) {
  header("location:sentrequest.php");
}else{
?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Login"; ?>
<?php require 'head.php'; ?>
<body>
  <?php require 'header.php'; ?>


      
      <?php require 'message.php'; ?>

      <div class="row justify-content-center">
        <div class="col-lg-4 col-md-5 col-sm-6 col-xs-7 mb-5">

       
  

<h1>HOSPITALS LOGIN </h1>
 
       <div   id="hospitals">
        <form action="file/hospitalLogin.php" method="post">
          <label class="form-label">Hospital Email</label>
          <input type="email" name="hemail" placeholder="Hospital Email" class="form-control mb-4">
          <label class="form-label">Hospital Password</label>
          <input type="password" name="hpassword" placeholder="Hospital Password" class="form-control mb-4">
          <center><input type="submit" name="hlogin" value="Login" class="btn btn-danger "><center>
        </form>
       </div>
<h1>RECEIVERS LOGIN </h1>

      <div  id="receivers">
         <form action="file/receiverLogin.php" method="post">
          <label class="form-label">Receiver Email</label>
          <input type="email" name="remail" placeholder="Receiver Email" class="form-control mb-4">
          <label class="form-label">Receiver Password</label>
          <input type="password" name="rpassword" placeholder="Receiver Password" class="form-control mb-4">
          <center><input type="submit" name="rlogin" value="Login" class="btn btn-danger"></center>
        </form>
      </div>

  
    <a href="register.php" class="text-center mb-4" title="Click here">Don't have account?</a>
</div>
</div>


<?php require 'footer.php' ?>
</body>
</html>
<?php } ?>
