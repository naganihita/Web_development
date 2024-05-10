  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<div class="row justify-content-center mb-3">
	<?php $counter=0; if(isset($_GET['msg'])) { ?>
		<div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Heyy USER!</strong> <?php echo $_GET['msg'];?>
  <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	<?php }?>
	<?php if(isset($_GET['error'])) { ?>
	<div class="alert alert-danger alert-dismissible fade show" role="alert">
  <strong>Heyy USER!</strong> <?php echo $_GET['error'];?>
  <button type="button" class="close" data-bs-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
	<?php }?>
</div>

