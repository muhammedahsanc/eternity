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
<form action="<?php echo base_url();?>/inserPerson" autocomplete="off" enctype="multipart/form-data" method="post">
<!-- <?php echo var_dump($userdetails[0]) ?> -->

	<?php foreach ($userdetails as $key => $value) {
										?>

	<div class="container-fluid">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="wrapper">
						<div class="login-cust">
							<h1 class="text-center fb-blue mb-4"><b>Eternity</b></h1>
							<div class="login-card">
								<div>
									<h2 class="text-center fb-blue">Create your Eternity profile</h2>
							 
									<label>Name :</label>
									<input value="<?= $value->sd_name; ?>"  readonly type="text" required class="form-control mt-1" id="Username" placeholder="Name" name="p_name">
									<div class="cust-border">
										<label class="">E-mail :</label>
										<input value="<?= $value->sd_email; ?>"  readonly type="mail" required class="form-control mt-1" id="Username" placeholder="Email" name="p_mail">
										<label>Gender :</label>
										<input type="radio"  name="p_gender" required value="male">Male
										<input type="radio"  name="p_gender" value="female">Female<br>

										<label>Date Of Birth :</label>
										<input type="date" required class="form-control mt-1" id="dob"  name="p_dob">
										<label>Phone :</label>
										<input type="text" name="p_phone" required class="form-control" placeholder="Phone">
										<label>You are a :</label>
										<input type="radio" name="p_your" required class="Radios" id="proffetional" value="Professional">Professionals
										<input type="radio" name="p_your" class="Radios" id="student" value="student">Student<br>
	
										<label class="SC">School/College :</label>
										<select class="form-control SC" id="school_college" name="school_college" >
											<option class="form-control " style="display:none" value="">School/College</option>
										    <option class="form-control " value="School">School</option>
											<option class="form-control " value="College">College</option>
										</select>
										<label class="schoollbl st">School :</label>
										<input type="text" name="School_name" class="form-control school st" placeholder="School">
										<label class="schoollbl st">Place :</label>
										<input type="text" name="School_place" class="form-control school st" placeholder="Place">
										<label class="collegelbl st">College :</label>
										<input type="text" name="college_name" class="form-control college st" placeholder="College">
										<label class="collegelbl st">University :</label>
										<input type="text" name="university" class="form-control college st" placeholder="University">
										<label class="collegelbl st">Course :</label>
										<input type="text" name="course" class="form-control college st" placeholder="Course">
										<label class="collegelbl st">Place</label>
										<input type="text" name="college_place" class="form-control college st" placeholder="Place">

										<label class="cm">Company :</label>
										<input type="text" name="p_company_name" class="form-control cm" placeholder="Company">
										<label class="mt-1 cm">Address :</label>
										<textarea name="p_Address" class="form-control cm" placeholder="Address"></textarea>
										<label class="cm">Year of experience :</label>
										<input type="text" name="p_experience" class="form-control cm" placeholder="Experience">
										<label class="cm">Skills you know :</label>
										<input type="text" name="p_skills" class="form-control cm" placeholder="Skills">
										<label>Photo :</label>
										  <input type="file" class="form-control" id="galimage" required name="p_photo"><img width="180px" id="loadImage" src=""><br>
						
										<label>About :</label>
										<input type="text" name="p_about" required class="form-control" placeholder="About">
										 
										<!-- <input type="checkbox" onclick="showPassword()"> -->
									</div>
									<div class="learnmore1" >
									<p class="learnmore">People who use our service may have <br>uploaded your contact information to <br>Eternity.<a class="learn" href="">Learn more.</a></p>
										</div>
									<div class="cust-btn ">
										<button class="btn login-btn mt-3"><b>Submit</b></button>
									</form>
									</div>
<?php } ?>
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
$("#galimage").change(function() {
  readURL(this);
});
  function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    reader.readAsDataURL(input.files[0]);
    reader.onload = function(e) {
      $('#loadImage').attr('src', e.target.result);
    }
  }
}
</script>

	<script>



  clear1()
  clear2()

  $('#school_college').on('change',function(){
    var value=$('#school_college').val();
    if(value=='School'){
      show1()
    }else{
      show2()
    }
  })

 function clear1()
  {
   $('.school').hide()
   $('.schoollbl').hide()
 $('.school').val(null)

  }
 function clear2()
  {
  	 $('.college').hide()
  	 $('.college').val(null)

   $('.collegelbl').hide()

  }
function  show1()
    {
      	 $('.school').show().prop('required','required');
 		  $('.schoollbl').show()
 		  $('.college').hide().removeAttr('required');
 		  $('.college').val(null).removeAttr('required');

   $('.collegelbl').hide()

      }
 function  show2()
   {
   		  	 $('.college').show().prop('required','required');
   				$('.collegelbl').show()
   				$('.school').hide().removeAttr('required');
   				$('.school').val(null).removeAttr('required');

   $('.schoollbl').hide()

   }


	</script>
	<script>


	clear3()

$('.Radios').on('click',(e)=>{
if (e.target.value=='student') 
	show4()
else
	show3()

	})

   function show3()
   {
   		  	 $('.cm').show().prop('required','required');
   		  	 $('.st').hide().removeAttr('required');
   		  	 $('.st').val(null)


   		  	 	$('.SC').hide().removeAttr('required');
   		  	 	$('.SC').val(null)
   		  	 	$('#school_college').val(null).removeAttr('required');
   }
   function show4()
   {
   		  	 $('.st').hide().removeAttr('required');
   		  	 $('.cm').hide().removeAttr('required');

   		  	 $('.st').val(null)
   		  	 $('.cm').val(null)
   		  	 $('.SC').show().prop('required','required');
   		  	 	$('#school_college').val(null)


   }
   function clear3()
   {
   		  	 $('.cm').hide()
   		  	 $('.st').hide()
   		  	 $('.SC').hide()
   		  	 
   		  	 	$('#school_college').val(null)

   }
		

	</script>
	

</body>
</html>