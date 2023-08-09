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
	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="wrapper">
						<div class="login-cust">
							<h1 class="text-center fb-blue mb-4"><b>Eternity</b></h1>
							<div class="login-card">
								<div>
											<form action="<?php echo base_url();?>/person-insert" method="post" enctype="multipart/form-data">
									<h2 class="text-center fb-blue">Sign up</h2>
									<label>Name :</label>
									<input type="text" class="form-control mt-1" required id="Username" placeholder="Name" name="sdd_name">
									<label class="mt-1">E-mail :</label>
									<div class="cust-border">
										<input type="mail" class="form-control mt-1" id="Username" required placeholder="Email" name="sdd_email">
										<label>New password :</label>
										<input type="Password" required class="form-control login-password mt-1" id="Password" placeholder="password" name="sdd_password" >
										 
										<!-- <input type="checkbox" onclick="showPassword()"> -->
									</div>
									<div class="" >
									<p class="learnmore">People who use our service may have uploaded<br> your contact information to Eternity.<a class="learn" href="">Learn more.</a></p>
									<p class="learnmore-sub">People who use our service may have uploaded your contact information to Eternity. <a class="learn" href="">Learn more.</a></p>
										</div>
									<div class="cust-btn ">
										<!-- <button class="btn login-btn mt-3"><b>Submit</b></button> -->
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