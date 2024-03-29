<?php 

include_once ('includes/connection.php');

if(isset($_POST['userRegistration'])){
    $query = " INSERT INTO users VALUES(null,'$_POST[name]', '$_POST[email]', '$_POST[password]')";
    $query_run = mysqli_query($connection, $query);
    if($query_run){
        echo "<script type='text/javascript'>
        alert('User registered successifully');
        window.location.href = 'user_login.php';
        </script>";
    }
    else{
        echo "<script type='text/javascript'>
        alert('error please try again');
        window.location.href = 'register.php';
        </script>";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .register-container {
            margin-top: 50px;
        }

        .register-card {
            max-width: 400px;
            margin: 0 auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
        }

        .register-card h2 {
            margin-bottom: 30px;
        }

        .register-card .form-group {
            margin-bottom: 20px;
        }

        .register-card .btn-primary {
            width: 100%;
        }
    </style>
</head>
<body>

<div class="container register-container">
    <div class="card register-card">
        <h2 class="text-center">Register</h2>
        <!-- Registration Form -->
        <form action="register.php" method="post"> <!-- Assuming register.php is the file where you'll handle form submission -->
            <!-- Full Name Input -->
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Full Name" name="name" required> <!-- Added name attribute -->
            </div>
            <!-- Email Input -->
            <div class="form-group">
                <input type="email" class="form-control" placeholder="Email" name="email" required> <!-- Added name attribute -->
            </div>
            <!-- Password Input -->
            <div class="form-group">
                <input type="password" class="form-control" placeholder="Password" name="password" required> <!-- Added name attribute -->
            </div>
           
            <!-- Register Button -->
            <button type="submit" class="btn btn-primary" name="userRegistration" >Register</button>
        </form>
    </div>
</div>






<!-- Bootstrap JS -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>





</body>
</html>
