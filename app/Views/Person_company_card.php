<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/common.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eternity</title>
</head>
<body>

<div>

	<div class="container-fluid">

		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="role-card-horizontal">
						<div class="centering ">
							<div class="pd-50">
								<a class="card-link" href="<?php echo base_url();?>/person_signup_page"><div class="role-card">

									<h6 style="font-family: sans-serif;">PERSON</h6>
								</div></a>
								
							</div>
							<div class="pd-50">
								<a class="card-link" href="<?php echo base_url();?>/company_signup_page"><div class="role-card">
									<h6 style="font-family: sans-serif;">COMPANY</h6>
								</div></a>
								
							</div>
						</div>
					</div>
					<div class="role-card-vertical">
						<div class="wrapper">
							<div class="login-cust">
									<a class="card-link" href="<?php echo base_url();?>/company_signup_page"><div class="role-card">
									<h6 style="font-family: sans-serif;">COMPANY</h6>
								</div></a>
								<a class="card-link" href="<?php echo base_url();?>/person_signup_page"><div class="role-card mt-3">
									<h6 style="font-family: sans-serif;">PERSON</h6>
								</div></a>
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