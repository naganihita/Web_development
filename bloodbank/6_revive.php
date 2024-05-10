<html>
<head>
<title>Donors management page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 m-auto">
                <a href="5_revive.php">HOME</a><br>
                <center>
                    <h4><u>Manage Donation Requests</u></h4>
                    <br>
                </center>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <?php
if(isset($_POST['submit'])){
$name=$_POST['name'];
$locationpincode=$_POST['location'];
$phone=$_POST['phone'];
$bloodgroup=$_POST['bloodGroup'];
$date=$_POST['donationDate'];
}
$mysqli=mysqli_connect("localhost:3307","root","");
if($mysqli){
 echo "connection established successfully";
}
else{
 echo "connection not established";
}
$q0="CREATE DATABASE IF NOT EXISTS REVIVE_DONORS;";
$result0=mysqli_query($mysqli,$q0);
$q1="USE REVIVE_DONORS;";
$result1=mysqli_query($mysqli,$q1);
if($result1){
	echo "database used";
}else{
	echo "database not used";
}
$stmt1="CREATE TABLE  IF NOT EXISTS DONOR_DETAILS(name VARCHAR(100),locationpincode VARCHAR(100),phone VARCHAR(100)  ,bloodgroup VARCHAR(100),date VARCHAR(100));";
$result_stmt1=mysqli_query($mysqli,$stmt1);
if($result_stmt1){
	echo "TABLE CREATED SUCCESSFULLY";
}else{
	echo "table not created";
}


// Prepare the SQL statement with placeholders
$stmt = $mysqli->prepare("INSERT INTO DONOR_DETAILS (name,locationpincode,phone,bloodgroup,date) VALUES (?,?,?,?,?)");

// Bind the parameters to the prepared statement
$stmt->bind_param("sssss",$name,$locationpincode,$phone,$bloodgroup,$date);

// Execute the prepared statement
$stmt->execute();
// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    echo "Record inserted successfully.";
} else {
    echo "Error inserting record: " . $mysqli->error;
}



$d="SELECT * FROM  DONOR_DETAILS;";
$dr=mysqli_query($mysqli,$d);
if($dr){
	  echo '<table class="table table-striped table-bordered table-responsive">
                        <thead class="thead-dark bg-danger">
                            <tr>
                                <th>Donor name</th>
                                <th>Location pincode</th>
                                <th>Mobile No</th>
                                <th>Blood group</th>
                                <th>Preferred donation date</th>
                            </tr>
                        </thead>
                        <tbody>';
    while($row=mysqli_fetch_assoc($dr)){
        
        echo "<tr>";
        echo  "<td>". $row['name']."</td>";
        echo "<td>". $row['locationpincode']."</td>";
	$num=$row['phone'];
        echo "<td><a href='tel:".$num."'>".$row['phone']."</a>"."</td>";
        echo "<td>". $row['bloodgroup']."</td>";
	echo "<td>". $row['date']."</td>";
        echo "</tr>";
        
    }
	echo "</tbody>";
	echo "</table>";
}

// Close the prepared statement and database connection


$stmt->close();
$mysqli->close();
?>
            </div>
        </div>
    </div>

</body>
</html>




