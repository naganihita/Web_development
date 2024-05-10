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
<?php $title="Bloodbank | Register"; ?>
<?php require 'head.php'; ?>
<body>
  <?php include 'header.php'; ?>

 

    <?php require 'message.php'; ?>

   <div class="row">
<div class="col-md-6">
	<h3>HOSPITALS REGISTRATION</h3>

        <form action="file/hospitalReg.php" method="post" enctype="multipart/form-data">
          <input type="text" name="hname" placeholder="Hospital Name" class="form-control mb-3" required>
          <input type="text" name="hcity" placeholder="Hospital City" class="form-control mb-3" required>
          <input type="tel" name="hphone" placeholder="Hospital Phone Number" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Password must have start from 0,6,7,8 or 9 and must have 10 to 12 digit">
          <input type="email" name="hemail" placeholder="Hospital Email" class="form-control mb-3" required>
          <input type="password" name="hpassword" placeholder="Hospital Password" class="form-control mb-3" required minlength="6">
          <input type="submit" name="hregister" value="Register" class="btn btn-danger form-control ">
        </form>

</div>
<div class="col-md-6">


      <h3>RECEIVERS REGISTRATION</h3>

         <form action="file/receiverReg.php" method="post" enctype="multipart/form-data">
          <input type="text" name="rname" placeholder="Receiver Name" class="form-control mb-3" required>
          <select name="rbg" class="form-control mb-3" required>
                <option disabled="" selected="">Blood Group</option>
                <option value="A+">A+</option>
                <option value="A-">A-</option>
                <option value="B+">B+</option>
                <option value="B-">B-</option>
                <option value="AB+">AB+</option>
                <option value="AB-">AB-</option>
                <option value="O+">O+</option>
                <option value="O-">O-</option>
          </select>
          <input type="text" name="rcity" placeholder="Receiver City" class="form-control mb-3" required>
          <input type="tel" name="rphone" placeholder="Receiver Phone Number" class="form-control mb-3" required pattern="[0,6-9]{1}[0-9]{9,11}" title="Mobile no. must start from 0,6,7,8 or 9 and must have 10 to 12 digit">
          <input type="email" name="remail" placeholder="Receiver Email" class="form-control mb-3" required>
          <input type="password" name="rpassword" placeholder="Receiver Password" class="form-control mb-3" required minlength="6">
          <input type="submit" name="rregister" value="Register" class="btn btn-danger form-control">
        </form>
</div>
  </div>

  
    <a href="login.php" class="text-center mb-4" title="click me if you already have an account">Already Registration Completed?</a>

<?php require 'footer.php' ?>
</body>
</html>
<?php } ?>
