<style>
.nav_body {
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
    }
</style>

<div class="nav_body">
  <nav class="navbar  navbar-expand-lg">
    <div class="container">
      <a class="navbar-brand" href="1_revivelogin_page.php">REVIVE</a>
     <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="5_revive.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="3_wt_aug7.php">Donor Page</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="1_revivelogin_page.php">Recepient page</a>
          </li>
           <li class="nav-item">
            <a class="nav-link" href="about.html">About  Us</a>
          </li>
	<li>

        <?php if (isset($_SESSION['hid'])) { ?>

		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link btn btn-light" href="bloodinfo.php">Add Blood Info</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="bloodrequest.php">Blood Request</a>
            </li>
			<li class="nav-item">
				<a class="nav-link btn btn-light" href="abs.php">Available Blood Samples</a>
            </li>
            <li class="nav-item">
                <?php echo $_SESSION['hname']; ?>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger btn-sm font-weight-bold" href="logout.php">Logout</a>
            </li>
        </ul>

        <?php } elseif (isset($_SESSION['rid'])) { ?>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="sentrequest.php">Sent Blood Request</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="abs.php">Available Blood Samples</a>
            </li>
            <li class="nav-item">
                <?php echo ' '.$_SESSION['rname']; ?>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-danger btn-sm font-weight-bold" href="logout.php">Logout</a>
            </li>
        </ul>

        <?php }  else { ?>

        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="abs.php">Available Blood Samples</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="register.php">Register</a>
            </li>
            <li class="nav-item">
                <a class="nav-link btn btn-light" href="login.php">Login</a>
            </li>
        </ul>

        <?php } ?>

	</li>
        </ul>
        
      </div>
    </div>
  </nav>











