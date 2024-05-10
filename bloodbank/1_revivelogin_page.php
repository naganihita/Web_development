<!DOCTYPE html>
<html>
<head>
<title>REVIVE Login page</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
<style>
    body {
        background-color: #f8f9fa;
    }
    .login-container {
        justify-content: center;
        align-items: center;
        height: 100vh;
    }
    .login-box {
        background-color: #fff;
        border-radius: 10px;
        padding: 30px;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
        width: 100%;
        max-width: 400px;
    }
    .login-header {
        text-align: center;
        margin-bottom: 20px;
    }
    .login-form {
        padding: 10px;
    }
    .login-button {
        background-color: #dc3545;
        border: none;
    }
    .login-button:hover {
        background-color: #c82333; 
    }
    .forgot-password {
        text-align: center;
        color: #007bff; 
     
    }
</style>
</head>
<body class="onebody">
<div class="login-container d-flex">
    <div class="login-box">
        <div class="login-header">
            <h3>Blood Recepient Portal </h3>
            <p>Login to your Revive Account!!</p>
        </div>
        <div class="login-form">
            <form action="2reve.php" method="post">
                <div class="mb-3">
                    <label for="email" class="form-label">Email id</label>
                    <input type="email" placeholder="Enter your email" name="email" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" placeholder="Enter your password" name="password" class="form-control">
                </div>
                <button type="submit" name="sub" class="btn btn-danger btn-block login-button">Login</button>
            </form>
            <div class="forgot-password mt-10">
                <a href="#">Forgot Password?</a>
            </div>
        </div>
    </div>
</div>
</body>

</html>

