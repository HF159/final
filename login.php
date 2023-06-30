<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - Login/Signup Pure CSS</title>
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://unicons.iconscout.com/release/v2.1.9/css/unicons.css'><link rel="stylesheet" href="./css/login.css">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
			          	<input class="checkbox" type="checkbox" id="reg-log" name="reg-log"/>
			          	<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<form method="post" action="login_action.php">
											<div class="section text-center">
												<h4 class="mb-4 pb-3">Log In</h4>
												<div class="form-group">
													<input type="email" name="email" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off" required>
													<i class="input-icon uil uil-at"></i>
												</div>	
												<div class="form-group mt-2">
													<input type="password" name="password" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off" required>
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<button  value="Upload" class="btn mt-4">submit</button>
												<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your password?</a></p>
											</div>
										</form>
			      					</div>
			      				</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section text-center">
											<form method="post" action="register_action.php">
												<h4 class="mb-4 pb-3">Sign Up</h4>
												<div class="form-group">
													<input type="text" name="name" class="form-style" placeholder="Your Username" id="logname" autocomplete="off" required>
													<i class="input-icon uil uil-user"></i>
												</div>	
												<div class="form-group mt-2">
													<input type="email" name="email" class="form-style" placeholder="Your Email" id="logemail" autocomplete="off" required>
													<i class="input-icon uil uil-at"></i>
												</div>	
												<div class="form-group mt-2">
													<input type="password" name="password" class="form-style" placeholder="Your Password" id="logpass" autocomplete="off" required>
													<i class="input-icon uil uil-lock-alt"></i>
												</div>
												<button  value="Upload" class="btn mt-4">submit</button>
											</form>
				      					</div>
			      					</div>
			      				</div>
			      			</div>
			      		</div>
			      	</div>
					  <p class="mb-0 mt-4 text-center"><a href="index.php" class="link">Back</a></p>
		      	</div>
	      	</div>
	    </div>
	</div>
<!-- partial -->
</body>
</html>
