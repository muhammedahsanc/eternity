<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eternity</title>
</head>
<body>
	<div class="container-fluid" style="padding:147px !important;">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="wrapper">
						<div class="login-cust">
							<h1 class="text-center fb-blue mb-4"><b>Eternity</b></h1>
							<div class="login-card">
								<div>
									<h2 class="text-center fb-blue">Company SignUp</h2>
									<form action="<?php echo base_url();?>/cominsert" autocomplete="off" enctype="multipart/form-data" method="post"> 
									<label>Name :</label>
									<input type="text" class="form-control mt-1" required id="Username" placeholder="Name" name="com_name">
									<label class="mt-1">Address :</label>
									<div class="cust-border">
										<textarea name="com_address" class="form-control" required placeholder="Address"></textarea>
										<label class="">E-mail :</label>

										<input type="email" class="form-control mt-1" id="mail" required placeholder="Email" name="com_mail">
										<label>New password :</label>
										<input  type="Password" class="form-control login-password mt-1" required id="Password" placeholder="Password" name="com_password" >
										<label>Website :</label>
										<input type="text" class="form-control mt-1" required id="website" placeholder="Website" name="com_website">
										<label>Company Registered Number :</label>
										<input type="text" class="form-control mt-1" id="companyno" required placeholder="Registered Number" name="com_registernumber">
										
									
									
										<!-- <input type="checkbox" onclick="showPassword()"> -->
									</div>
									<div class="learnmore1" >
									<p class="learnmore">People who use our service may have <br>uploaded your contact information to <br>Eternity.<a class="learn" href="">Learn more.</a></p>
										</div>
									<div class="cust-btn ">
										<button class="btn login-btn mt-3"><b>Submit</b></button>
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