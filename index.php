<!DOCTYPE html>
<html lang="en">
<head>
	<title>Leader Bord</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	<?php
	
	//ini_set( 'display_errors', 1 );  
	//error_reporting( E_ALL );  
	
	include("db.php"); 
	session_start();
    if(isset($_POST['mail']))
    {
		$_SESSION['user']=NULL;
		$_SESSION['id1']=NULL;
		$_SESSION['type']=NULL;
        $uname=$_POST['mail'];
        $pass= $_POST['passwordinput'];
		$pass1=($pass);
        $sql_login="select * from users where mail='$uname' and password='$pass1'";
        $result_login = $conn->query($sql_login);
         //session_start();
		 if($row_login = mysqli_fetch_assoc($result_login))  
		 {
			// echo "num :".count($result);
			//echo $row["user_name"];
			$_SESSION['user']=$row_login["nom"]." ".$row_login["prénom"];
			$_SESSION['id1']=$row_login["id"];
			$_SESSION['type']=$row_login["type"];
			header('Location: accueil.php');
			//exit();
		 }
        else
        {
			$_SESSION['user']=NULL;
			$_SESSION['id1']=NULL;
			$_SESSION['type']=NULL;
			session_destroy();
			?>
				<script type="text/javascript">
                    
                    return false;
					
				</script>
			<?php
          
        }   
    
    }
	?>
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100 p-t-85 p-b-20">
				<form class="login100-form validate-form" name="login-form" method="POST" action="#" id="login-a" >
					<span class="login100-form-title p-b-70">
						Deep Learning Leader Board
					</span>
					<span class="login100-form-avatar">
						<img src="images/learning1.png" alt="AVATAR">
					</span>

					<div class="wrap-input100 validate-input m-t-85 m-b-35" data-validate = "Enter your email">
						<input class="input100" type="text" name="mail">
						<span class="focus-input100" data-placeholder="Email"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
						<input class="input100" type="password" name="passwordinput">
						<span class="focus-input100" data-placeholder="Password"></span>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
					</div>

					<ul class="login-more p-t-190">
						<li class="m-b-8">
							<span class="txt1">
								Forgot
							</span>

							<a href="#" class="txt2">
								Username / Password?
							</a>
						</li>

						<li>
							<span class="txt1">
								Don’t have an account?
							</span>

							<a href="#" class="txt2">
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
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>