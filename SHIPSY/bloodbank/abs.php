<?php 
session_start();
require 'file/connection.php';
if(isset($_GET['search'])){
    $searchKey = $_GET['search'];
    $sql = "select bloodinfo.*, hospitals.* from bloodinfo, hospitals where bloodinfo.hid=hospitals.id && bg LIKE '%$searchKey%'";
}else{
    $sql = "select bloodinfo.*, hospitals.* from bloodinfo, hospitals where bloodinfo.hid=hospitals.id";
}
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<?php $title="Bloodbank | Available Blood Samples"; ?>
<?php require 'head.php'; ?>
<body>
    <?php require 'header.php'; ?>
    <div class="container cont">
        
        <?php require 'message.php'; ?>
        
	<div class="col-lg-5">
				<form method="get" action="" style="margin-top:30px; margin-bottom:30px ">
			<h1><center><br>Find your blood donor</h1>
				<div class="row">
						<div class="col-lg-8">
			
							  <select name="search" class="form-select">
               <option><?php echo @$_GET['search']; ?></option>
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
						   </select><br>
						</div>
						<div class="col-9-lg">
						<div id="searchResults" class="col-lg-9" style="font-size:50px;">
						</div>
						</div>
						<br>
					</div><br>
	<a href="abs.php" class="btn btn-danger mr-4"> Reset</a>
	<input type="submit" name="submit" class="btn btn-danger" value="search">
	</div></form>
        <table class="table table-responsive table-striped rounded mb-5">
            <tr><th colspan="7" class="title">Available Blood Samples</th></tr>
            <tr>
                <th>#</th>
                <th>Hospital Name</th>
                <th>Hospital City</th>
                <th>Hospital Email</th>
                <th>Hospital Phone</th>
                <th>Blood Group</th>nngamechanger@gmail.com
                <th>Action</th>
            </tr>

            <div>
                <?php
                if ($result) {
                    $row =mysqli_num_rows( $result);
                    if ($row) { //echo "<b> Total ".$row." </b>";
                }else echo '<b style="color:white;background-color:red;padding:7px;border-radius: 15px 50px;">Nothing to show.</b>';
            }
            ?>
            </div>

        <?php while($row = mysqli_fetch_array($result)) { ?>

            <tr>
                <td><?php echo ++$counter;?></td>
                <td><?php echo $row['hname'];?></td>
                <td><?php echo ($row['hcity']); ?></td>
                <td><?php echo ($row['hemail']); ?></td>
                <td><?php echo ($row['hphone']); ?></td>
                <td><?php echo ($row['bg']); ?></td>

                <?php $bid= $row['bid'];?>
                <?php $hid= $row['hid'];?>
                <?php $bg= $row['bg'];?>
                <form action="file/request.php" method="post">
                    <input type="hidden" name="bid" value="<?php echo $bid; ?>">
                    <input type="hidden" name="hid" value="<?php echo $hid; ?>">
                    <input type="hidden" name="bg" value="<?php echo $bg; ?>">

                <?php if (isset($_SESSION['hid'])) { ?>
                <td><a href="javascript:void(0);" class="btn btn-secondary hospital">Request Sample</a></td>
                <?php } else {(isset($_SESSION['rid']))  ?>
                <td><input type="submit" name="request" class="btn btn-secondary" value="Request Sample"></td>
                <?php } ?>
                
                </form>
            </tr>

        <?php } ?>
        </table>
    </div>
    <?php require 'footer.php' ?>
</body>

<script type="text/javascript">
    $('.hospital').on('click', function(){
        alert("Hospital user can't request for blood.");
    });
</script>
