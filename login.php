<?php
	//start server when we get mail 
	if (isset($_POST['email'])) {
		# code...
		//set server , username , password to mentioned below 
		$server = "localhost";
		$username = "root";
		$password = "";
	
		//start connection 
		$con = mysqli_connect($server,$username,$password);


		//check connection whether it is connected or not 
		if (!$con) {
			# code...
			die("connection failed " . mysqli_connect_errno() );
		}


		//take data from input field with their mentioned name 
		$email=$_POST['email'];
		$login_password=$_POST['password'];

		//run sql query 
		$sql = "INSERT INTO `test`.`login` (`email`, `password`) VALUES ('$email', '$login_password')";
		// echo $sql;

		//check whether the query is right or not 
		if ($con->query($sql)) {
			// echo "Succefully connected ";
			# code...
			//if it is right then put insert value to true 
			$insert = true;
		} else{
			echo " Error : $sql <br> $con->error";
		}

		//close connection 
		$con->close();
	} else{

	if (isset($_POST['sign_up_Full_name'])) {
		# code...
		$server = "localhost";
		$username = "root";
		$password = "";
	
		$con = mysqli_connect($server,$username,$password);

		if(!$con){
			die("Error !!");
		}

		$sign_up_Full_name=$_POST['sign_up_Full_name'];
		$sign_up_Number=$_POST['sign_up_Number'];
		$sign_up_Email=$_POST['sign_up_Email'];
		$sign_up_Password=$_POST['sign_up_Password'];


		$sql = "INSERT INTO `test`.`signup` (`First_name`, `Phone_Number`, `email`, `password`) VALUES ('$sign_up_Full_name', '$sign_up_Number', '$sign_up_Email', '$sign_up_Password')";

		if ($con->query($sql)) {
			# code...
			$sign_in = true;
		}else{
			$sign_in = false;
		}

		$con->close();

	}

	}

?>


<!doctype html>
<html lang="en">
<head>
  <title>Login</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="style.css">
</head>
<body>
	<!-- //switch between login and sign-up -->
	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>


						<!-- //login form  -->


						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<form action="login.php" method="post">
											<h4 class="mb-4 pb-3">Log In</h4>
											<div class="form-group">
												<input type="email" class="form-style" placeholder="Email" name="email">
												<i class="input-icon uil uil-at"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Password" name="password">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button class="btn mt-4" type="submit">Login</button>
                    						<p class="mb-0 mt-4 text-center"><a href="https://www.web-leb.com/code" class="link">Forgot your password?</a></p>
											</form>
				      					</div>
			      					</div>
			      				</div>



								<!-- //sign up form  -->




								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
										<form action ="login.php" method="post" >
											<h4 class="mb-3 pb-3">Sign Up</h4>
											<div class="form-group">
												<input type="text" class="form-style" placeholder="Full Name" name="sign_up_Full_name">
												<i class="input-icon uil uil-user"></i>
											</div>	
											<div class="form-group mt-2">
												<input type="tel" class="form-style" placeholder="Phone Number" name="sign_up_Number">
												<i class="input-icon uil uil-phone"></i>
											</div>	
                      							<div class="form-group mt-2">
												<input type="email" class="form-style" placeholder="Email" name="sign_up_Email">
												<i class="input-icon uil uil-at"></i>
											</div>
											<div class="form-group mt-2">
												<input type="password" class="form-style" placeholder="Password" name="sign_up_Password">
												<i class="input-icon uil uil-lock-alt"></i>
											</div>
											<button type="submit" class="btn mt-4">Register</button>
										</form>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
		      	</div>
	      	</div>
	    </div>
	</div>
</body>
</html>
