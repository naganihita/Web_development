
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
<br><br>
                   <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="5_revive.php">Home</a></li>
    <li class="breadcrumb-item"><a href="3_wt_aug7.php">Donorpage</a></li>
    <li class="breadcrumb-item"><a href="1_revivelogin_page.php">Recepientpage</a></li>
  </ol>
</nav>
<br>
                <center>
                    <h4 class="text-danger display-3">AVAILABLE BLOOD DONORS</h4>

                    <br>
                </center>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php
session_start();
$bdg = $_SESSION['selectedValue'];
echo $bdg;
$mysqli = mysqli_connect("localhost:3307", "root", "");


$q1 = "USE REVIVE_DONORS;";
$result1 = mysqli_query($mysqli, $q1);


$stmt = $mysqli->prepare("SELECT * FROM DONOR_DETAILS WHERE bloodgroup = ?");

// Bind the parameter to the prepared statement
$stmt->bind_param("s", $bdg);

// Execute the prepared statement
$stmt->execute();

$result = $stmt->get_result();

if ($result) {
    echo '<table class="table table-striped table-bordered table-responsive">
                        <thead class="thead-danger">
                            <tr>
                                <th>Donor name</th>
                                <th>Location pincode</th>
                                <th>Mobile No</th>
                                <th>Blood group</th>
                                <th>Preferred donation date</th>
                            </tr>
                        </thead>
                        <tbody>';
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row['name'] . "</td>";
        echo "<td>" . $row['locationpincode'] . "</td>";
        $num = $row['phone'];
        echo "<td><a href='tel:" . $num . "'>" . $row['phone'] . "</a>" . "</td>";
        echo "<td>" . $row['bloodgroup'] . "</td>";
        echo "<td>" . $row['date'] . "</td>";
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




