<?php
	session_start();
	$email=$_SESSION['email'];
	echo $email;
?>


<?php
// Database connection
$servername = "localhost"; // Assuming your database is hosted locally
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "campuscare"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
if($email!='caretaker@gmail.com')
{
// SQL query to fetch data
$sql = "SELECT full_name,hostel_name,dorm_no,category,created_at,status FROM queries where email='$email'";
$result = $conn->query($sql);

// Display data in a table
if ($result->num_rows > 0) {
    echo "<center><br><br><br><br><table border='8' border-color='black'cellspacing='15' cellpadding='25' border-collapse='collapse'>";
    echo "<tr bgcolor='green'><th>Name</th><th>Hostel Name</th><th>Dorm No</th><th>Category</th><th>Date of complaint</th><th>status</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr bgcolor='yellow'><td>".$row["full_name"]."</td><td>".$row["hostel_name"]."</td><td>".$row["dorm_no"]."</td><td>".$row["category"]."</td><td>".$row["created_at"]."</td><td>".$row["status"]."</td></tr>";
    }
    echo "</table></center>";
} else {
    echo "0 results";
}
}
else{
$sql = "SELECT full_name,hostel_name,dorm_no,category,created_at,status FROM queries";
$result = $conn->query($sql);

// Display data in a table
if ($result->num_rows > 0) {
    echo "<center><br><br><br><br><table border='8' border-color='black'cellspacing='15' cellpadding='25' border-collapse='collapse'>";
    echo "<tr bgcolor='green'><th>Name</th><th>Hostel Name</th><th>Dorm No</th><th>Category</th><th>Date of complaint</th><th>status</th><th>Update Status</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
      echo "<tr bgcolor='yellow'><td>".$row["full_name"]."</td><td>".$row["hostel_name"]."</td><td>".$row["dorm_no"]."</td><td>".$row["category"]."</td><td>".$row["created_at"]."</td><td>".$row["status"]."</td>";
        if($email == 'caretaker@gmail.com') {
            echo "<td><form action='' method='post'><input type='hidden' name='query_id' value='".$row["full_name"]."'><input type='hidden' name='query_date' value='".$row["created_at"]."'><input type='submit' name='update_status' value='Update Status'></form></td>";
        }
        echo "</tr>";
    }
    echo "</table></center>";
} else {
    echo "0 results";
}
}

// Close connection
$conn->close();
?>

<?php

    if(isset($_POST['update_status'])) {
	    $query_id = $_POST['query_id'];
	    $query_date = $_POST['query_date'];
$servername = "localhost"; // Assuming your database is hosted locally
$username = "root"; // Your MySQL username
$password = ""; // Your MySQL password
$dbname = "campuscare"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

	    $update_sql = "UPDATE queries SET status='completed' WHERE full_name='$query_id';";
		if ($conn->query($update_sql) === TRUE) {
		    echo "<center>Status updated successfully</center>";
		} else {
		    echo "Error updating status: " . $conn->error;
		    // Add debugging statements
		    echo "<br>";
		    echo "Query: " . $update_sql;
}

}

?>
<html>
<head>
<style>
body{
background-color:skyblue;
}
body {
            background-color: skyblue;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            width: 100%;
            margin: 0 auto;
            overflow-x: auto; /* Add horizontal scroll for small screens */
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #000;
        }

        th {
            background-color: green;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #ffffcc;
        }

        tr:nth-child(odd) {
            background-color: #ffff99;
        }

        .btn {
            background-color: #4CAF50;
            color: white;
            padding: 8px 20px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        .btn:hover {
            background-color: #45a049;
        }
    </style>
</style>
</head>
<body>
</body>
</html>
</html>

