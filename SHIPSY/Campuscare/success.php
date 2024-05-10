
<?php
// Check if form is submitted
if(isset($_POST['submit'])) {
    // Retrieve form data
    $student_id = $_POST['id'];
    $full_name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $hostel_name = $_POST['hostelname'];
    $dorm_no = $_POST['dormno'];
    $category = $_POST['category'];
    $description = $_POST['problem'];
} else {
    // If form is not submitted, display a message
    echo "<h2>No form submission data available!</h2>";
}
?>
<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Submission Success</title>

<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 800px;
        margin: 50px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center; /* Center the container */
    }

    h3 {
        color: green;
    }

    p{
        color: black;
        text-align: justify;
	padding: 0px 0px 0px 200px;
	word-spacing:10px;

		
    }
    strong{
       color:purple;
    }

    .details {
        margin-top: 20px;
    }

    .footer {
        margin-top: 20px;
        text-align: center;
        color: black;
    }
</style>

</head>
<body>
<?php
// Set the default timezone
date_default_timezone_set('Your/Timezone'); // Replace 'Your/Timezone' with your desired timezone, e.g., 'America/New_York'

// Get the current date and time
$currentDate = date('Y-m-d'); // Format: YYYY-MM-DD HH:MM:SS

?>



    <div class="container">
        <h3>Your query has been received,your problem will be solved as soon as possible.</h3>
        <h5> If you have any more queries or need further assistance, feel free to contact</h5>

        <div class="details">
            <h3>Your Details</h3>
            <p><strong>ID: </strong><?php echo $student_id; ?></p>
            <p><strong>Email: </strong><?php echo $email; ?></p>
            <p><strong>Name: </strong><?php echo $full_name; ?></p>
            <p><strong>Date: </strong><?php echo $currentDate;?></p>
            <p><strong>Phone:</strong><?php echo $phone; ?></p>
            <p><strong>Hostel Name: </strong><?php echo $hostel_name; ?></p>
            <p><strong>Dorm No: </strong><?php echo $dorm_no; ?></p>
            <p><strong>Problem Category:</strong><?php echo $category;?></p>
            <p><strong>Problem:</strong><?php echo $description;?></p>
        </div>


	<div class="print-button">
    		<button onclick="printPage()">Print Receipt</button>
	</div>

	<script>
	    function printPage() {
		window.print();
	    }
	</script>

        <div class="footer">
           &copy; 2023 Campus Care
        </div>
    </div>


<?php
// Database connection parameters
$servername = "localhost"; // Replace with your MySQL server hostname
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "campuscare"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// Prepare SQL statement
$sql = "INSERT INTO queries (student_id, full_name, email, phone, hostel_name, dorm_no, category,description,status)
        VALUES ('$student_id', '$full_name', '$email', '$phone', '$hostel_name', '$dorm_no', '$category','$description','Pending')";

// Execute SQL statement
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close connection
$conn->close();
?>


<?php
// Database connection parameters
$servername = "localhost"; // Replace with your MySQL server hostname
$username = "root"; // Replace with your MySQL username
$password = ""; // Replace with your MySQL password
$database = "campuscare"; // Replace with your MySQL database name

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve data from the database
$sql = "SELECT category, COUNT(*) AS count FROM queries GROUP BY category";
$result = $conn->query($sql);

// Prepare data for the pie chart
$labels = [];
$data = [];

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $labels[] = $row["category"];
        $data[] = $row["count"];
    }
}

// Close connection
$conn->close();
?>


</body>
</html>



</body>
</html>

