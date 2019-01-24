<?php
session_start();
error_reporting('E_ALL');
include 'lib/db.php';
if ($_SESSION){
	header('location:page.php');
}
if (isset($_POST['masuk'])){
	$username = preg_replace('/[^A-Za-z0-9\  ]/', '', $_POST['username']);
	$password = preg_replace('/[^A-Za-z0-9\  ]/', '', sha1($_POST['password']));
	

	$sql = "select * from tm_user where username = '$username' AND password = '$password' ";
	$result = mysqli_query($link,$sql);

	if ($row = mysqli_fetch_assoc($result)){
		
		
			$_SESSION['user'] = $row['id_user'];
			$_SESSION['nama'] = $row['nama'];
			$_SESSION['username'] = $username;
			$_SESSION['password'] = $password;
		
			header('location:page.php');
		}
	else {
		echo "<script>alert('gagal')</script>";
	}


}


?>

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Login Aplikasi Keuangan</title>
    <link rel="shortcut icon" href="img/icon.png">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    

</head>

<body class="gray-bg">

    <div class="middle-box text-center loginscreen animated fadeInDown">
        <div>
            <div>

                <h1 class="logo-name"><img class="img-responsive" src="img/logo.png"/></h1>

            </div>
            <h3>Silahkan Login  </h3>

            <form class="m-t" role="form" method="post">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username" required>
                </div>
                <div class="form-group">
                    <input type="password"  name="password" class="form-control" placeholder="Password" required>
                </div>
                 
                <button type="submit" class="btn btn-primary block full-width m-b" name="masuk">Login</button>


            </form>

        </div>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</body>

</html>
