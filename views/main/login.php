<?PHP 
    session_start();
    $conn = mysqli_connect('localhost', 'root', '', 'eproject1', 3306);
	$log = true;
    if($_SERVER["REQUEST_METHOD"] == 'POST') {
        $userName = $_POST['userName'];
        $userPassword = $_POST['userPassword'];
        // encrypt + decrypt/hash
        $hashedUserPassword = md5($userPassword);
        $sql = "select * from Users where UserName = '$userName' and Password = '$hashedUserPassword'";
        $resp = mysqli_query($conn, $sql);
        if($resp) {
            // print_r($resp);
            if(mysqli_num_rows($resp) > 0) {
                $row=mysqli_fetch_array($resp); 
                $_SESSION['UserInfo'] = array(
                    'isLoggedIn' => true,
                    'UserID' => $row['UserID'],
                    'UserName' => $row['UserName'],
                    'FirstName' => $row['FirstName'],
                    'LastName' => $row['LastName'],
                    'Phone' => $row['Phone'],
                    'Mail' => $row['Mail'],
                    'Address' => $row['Address'],
                );
                header('Location: home.php');
            } else {
                $log = false;
            }
        } else {
            $log = false;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="/eproject1/templates/login/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/eproject1/templates/login/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/eproject1/templates/login/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/eproject1/templates/login/fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/eproject1/templates/login/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/eproject1/templates/login/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/eproject1/templates/login/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/eproject1/templates/login/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="/eproject1/templates/login/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="/eproject1/templates/login/css/util.css">
	<link rel="stylesheet" type="text/css" href="/eproject1/templates/login/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" action="" method="POST">
					<span class="login100-form-title p-b-70">
						Welcome 
                    </span>
                    <h4 class="text-center">Star Organic Farm</h4>
					<!-- <span class="login100-form-avatar">
						<img src="images/avatar-01.jpg" alt="AVATAR">
					</span> -->

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter username">
						<input class="input100" type="text" name="userName">
						<span class="focus-input100" data-placeholder="Username"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="userPassword">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class=" m-b-50">
					<?php if(!$log){ ?>
						<small class="form-text text-danger">Invalid user name or password</small>
						<?php } ?>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<ul class="login-more p-t-35">
						<li class="m-b-8">
							<span class="txt1">
								Forgot
							</span>

							<a href="forgot.php" class="txt2">
								Username / Password?
							</a>
						</li>

						<li>
							<span class="txt1">
								Don’t have an account?
							</span>

							<a href="register.php" class="txt2">
								Sign up
							</a>
						</li>
					</ul>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	
<!--===============================================================================================-->
	<script src="/eproject1/templates/login/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="/eproject1/templates/login/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="/eproject1/templates/login/vendor/bootstrap/js/popper.js"></script>
	<script src="/eproject1/templates/login/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="/eproject1/templates/login/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="/eproject1/templates/login/vendor/daterangepicker/moment.min.js"></script>
	<script src="/eproject1/templates/login/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="/eproject1/templates/login/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="/eproject1/templates/login/js/main.js"></script>

</body>
</html>