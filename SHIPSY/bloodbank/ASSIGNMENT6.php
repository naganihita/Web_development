<!DOCTYPE html>
<html>
<head>
    <title>File Upload and Download</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
<style> .nav_body {
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
    }</style>
</head>
<body>
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
<br><br>
    <h1 class="display2">Upload your Registration form screenshot</h1>
    <form action="" method="POST" enctype="multipart/form-data">
        <input type="file" name="file"  class="shadow form-control form-control-lg" required><br>
        <input type="submit" name="upload" value="Upload" class="btn btn-danger">
    </form>

    <?php
    // File upload handling
    if (isset($_POST['upload'])) {
        $file = $_FILES['file'];

        $filename = $file['name'];
        $filetmp = $file['tmp_name'];

        // Move uploaded file to desired location
        $destination = '/opt/lampp/htdocs/MYSITE/bloodbank/upload/' . $filename;
        if (move_uploaded_file($filetmp, $destination)) {
            echo 'File uploaded successfully.<br>';
        } else {
            echo 'Error: Failed to upload the file.<br>';
        }
    }
    ?>

    <h1 class="display2"> Download your Registration form </h1>
    <form action="" method="POST">
        <input type="text" name="filename" placeholder="Enter filename" class="shadow form-control form-control-lg" ><br><br>
        <input type="submit" name="download" value="Download" class="btn btn-danger">
    </form>

    <?php
    // File download handling
    if (isset($_POST['download'])) {
        $filename = $_POST['filename'];

        // Check if the file exists
        $file_path = '/opt/lampp/htdocs/MYSITE/bloodbank/upload/' . $filename;
	echo $file_path;
        if (file_exists($file_path)) {
            // Set appropriate headers for download
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . $filename);
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($file_path));
            readfile($file_path);
            exit;
        } else {
            echo 'File does not exist.<br>';
        }
    }
    ?>

</body>
</html>



