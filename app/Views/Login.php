<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="" >
	<title>Eternity</title>
</head>
<body>
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="wrapper">
						<div class="login-cust">
							<h1 class="text-center fb-blue mb-4"><b>Eternity</b></h1>
							<div class="login-card">
								<div>
									
									
									<h2 class="text-center fb-blue">Login</h2>
      								<form action="<?php echo base_url(); ?>/login-check" method="post">

									<label>E-mail :</label>
									<input type="mail" class="form-control mt-1" required id="Username" placeholder="Email" name="username">
									<label class="mt-3">Password :</label>
									<div class="cust-border">
										<input  type="Password" required class="form-control login-password mt-1" id="Password" placeholder="Password" name="password" >

										<input type="checkbox"
										onclick="showPassword()">    show password </div>
									
									<!-- <a href="" class="forget-password mt-2">forget password?</a> -->
									

									<div class="cust-btn ">
										<button class="btn login-btn mt-3"><b>Submit</b></button>

									</div>
							</form>
									<a href="<?php echo base_url();?>/select-cards"><button class="btn sign-up mt-3"><b>Sign up</b></button></a>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script>
		$('#Username').focus()
		function showPassword() {
			var input=document.getElementById('Password')
			if (input.type==='password') {
				input.type = "text";
			} else {
				input.type = "password";
			}
		}
	</script>
</body>
</html>