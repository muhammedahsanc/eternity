<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/common.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eternity</title>
</head>
<body>
	<div class="container-fluid" style="padding: 144px !important";>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="wrapper">
						<div class="login-cust">
							<h1 class="text-center fb-blue mb-4"><b>Profile</b></h1>
							<div class="login-card">
								<div>
									<h2 class="text-center fb-blue"> </h2>
									<form action="<?php echo base_url();?>/profile-insert" method="post" enctype="multipart/form-data">
									<?php foreach ($userdetails as $key => $value) {
										?>
										<label>Company name :</label>
										<input value="<?= $value->c_name; ?>" readonly type="text" class="form-control mt-1" id="Username" placeholder="Name" name="com_name">
										<div class="cust-border">
											<label>Phone :</label>
											<input type="text" name="company_phone" required class="form-control" placeholder="Phone">
											<label>Place :</label>
											<input type="text" name="company_place" required class="form-control" placeholder="Place">
											<label>Number of branches :</label>
											<input type="text" name="no_of_branches" required class="form-control" placeholder="Eg:- 100+">
											<label class="mt-1">Building number :</label>
											<input type="text" name="Building_no" required class="form-control" placeholder="Building number">
											<label>Photo :</label>
											<input type="file"  class="form-control" required name="photo">
											<label>About :</label>
											<input type="text" name="about_company" required class="form-control" placeholder="About">
										</div>
									<?php } ?>
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
	<script>
  $(document).ready(function () {
    $('#Username').on('load',function () {
      var us_name=$('#Username').val();
      if (us_name !='') {
        $.ajax({
          url:'<?php echo base_url(); ?>/usrnme',
          type:'post',
          data:{state:state},
          success:function (html) {
            $('#Username').html(html);
          }
        }) 
      }
    })
  })
</script>

</body>
</html>