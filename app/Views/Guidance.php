<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/pdash.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<title>Eternity</title>
</head>
<body>
	<nav  class="navbar navbar-expand-custom navbar-mainbg" style="padding-bottom: 0px;">
		<!-- <a class="navbar-brand navbar-logo" href="#">Eternity</a> -->
		<img src="<?php echo base_url();?>\assets\images\profile\eternitylogo.png" style="width: 60px;height: 60px;">
		<button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars text-white"></i>
		</button>
		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav ml-auto">
				<div class="hori-selector">
					<div class="left"></div>
					<div class="right"></div>
				</div>
			<li class="nav-item">
				<a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="<?php echo base_url();?>/studhome"><i class="fas fa-house-user"></i>Home</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="<?php echo base_url();?>/guid"><i class="fa-solid fa-signs-post"></i>Guidance</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url();?>/std-view-pros"><i class="fas fa-users"></i>Professional</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url();?>/stdJobView"><i class="fa-solid fa-briefcase"></i>Jobs</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="<?php echo base_url();?>/logout"><i class="fas fa-sign-out-alt"></i>Logout</a>
			</li>
			</ul>
		</div>
	</nav>



	
	<div  class="container-fluid">
		<div class="container">
			<div class="row">
					<!-- <div class="col-sm-12  col-lg-1 col-xl-1">
					</div> -->
					<?php foreach($data as $value)
					{
						?>
						<div class="col-sm-12 col-md-3 img-head-color mt-4 col-lg-2  col-xl-2 col-xxl-2">

							<img  src="<?php echo base_url();?>\personImages\<?php echo $value->s_photo	;?>">
							<div class="prof-pic">
								<center><h6 class="profile-name"><?php echo $value->sd_name;?></h6></center>
								<!-- <center><a href="<?php echo base_url()?>/editperson/<?php echo $value->sd_id;?>"><i class="fa fa-edit edit-icon" ></i></a></center>  -->
								<br>
								<div class="Profile-Details">
									<i class="fa fa-mobile" aria-hidden="true" style="color: #31918f;font-size:24px"></i><?php echo $value->sd_phone;?><br>
									<?php if($value->s_school)
									{ ?>
										<i class="fa fa-institution" aria-hidden="true" style="color: #31918f;font-size:14px"></i> <?php echo $value->s_school;?><br>
										<i class="fa fa-map-marker" aria-hidden="true" style="color: #31918f;font-size:19px"></i> <?php echo $value->s_place;?><br>
									<?php }else{

										?>
										<i class="fas fa-user-graduate" aria-hidden="true" style="color: #31918f"></i><?php echo $value->s_college;?><br>
										<i class="fa fa-university" aria-hidden="true" style="color: #31918f"></i><?php echo $value->s_university;?><br>
									<?php } ?>
									<i class="fa fa-info-circle" aria-hidden="true" style="color: #31918f"></i>	<?php echo $value->s_about;?><br>
								<?php } ?>
							</div>
						</div>
					</div>
					<div class="col-sm-12 col-md-8  mt-4 col-lg-7 hai col-xl-7 ">
						<div id="top" class="card card-design">
							<center><h2 class="lanuages-Head">Most Popular Programming Languages </h2></center>
							<h5 class="content"> Contents</h5>
							<p class="lanuages"><a href="#prgrmlang">  What is a Programming Language?</a><br> What Are the Best Programming Languages to Learn in 2023?<br>1. <a href="#1">Javascript</a><br>2. <a href="#2">Python</a><br>3.<a href="#3">Go</a><br>4.<a href="#4"> Java</a><br>5.<a href="#5"> Kotlin</a><br>6. <a href="#6">PHP</a><br>7.<a href="#7"> C#</a><br>8. <a href="#8"> Swift</a><br>9.<a href="#9"> R</a><br>10.<a href="#10"> Ruby</a><br>11.<a href="#11"> C and C++</a><br>12. <a href="#12"> Matlab</a><br>13.<a href="#13"> TypeScript</a><br>14.<a href="#14">Scala</a> <br><a href="#howstart"> How to Get Started?</p></a>
						</div>
						<div class="card card-design"id="prgrmlang">
							<h3 class="content">What is a Programming Language?</h3>
							<p class="lanuages" >A programming language is a way for programmers (developers) to communicate with computers. Programming languages consist of a set of rules that allows string values to be converted into various ways of generating machine code, or, in the case of visual programming languages, graphical elements.

							Generally speaking, a program is a set of instructions written in a particular language (C, C++, Java, Python) to achieve a particular task.</p>
						</div>

						<?php
						$i=0; 
						foreach($Guidance as $value)
						{
							?>
							<div id="<?php echo ++$i;?>" class="card card-design " > 
								<h3 class="content"><?php echo $i; ?>.<?php echo $value->g_language_name; ?></h3>
								<div class="lanuages">
									<p><?php echo $value->g_discription; ?></p>
									<div class="table-responsive  tbl">
										<table class="table table table-responsive  tbl1">
											<tr>
												<td>Level</td>
												<td><?php echo $value->g_level; ?></td>
											</tr>
											<tr>
												<td>Skills needed</td>
												<td><?php echo $value->g_skills_need; ?></td>
											</tr>
											<tr>
												<td>Benifits</td>
												<td><?php echo $value->g_benifits; ?></td>
											</tr>
											<tr>
												<td>Annual salary projection</td>
												<td><?php echo $value->g_annual_salary; ?></td>
											</tr>
										</table>
									</div>
							<a href="#top"><i class="fas fa-arrow-circle-up" style="float:right;"></i></a>
								</div>

							</div>
						<?php } ?>
								<div class="lanuages card" id="howstart">
									<h3 class="content"> How to Get Started?</h3>
<p class="lanuages">Although there are hundreds of programming languages, very few make it to the short list of languages you should know. The ones described above lead the pack, in our opinion, as the best programmer training options. If you want to start a career as a programmer, make a lateral move into another field, or advance up the ladder at your current job, learning one of these languages is an excellent place to begin your transition. And since courses range from Python for the beginner to Java for the experienced, you can find the right fit for you. 

Once you’ve decided it’s time to learn a new language, turn to Simplilearn for both training and certification. We offer courses in all seven of these languages (Java, Javascript, C, C#, Python, Swift, and Ruby), plus others, all with content developed by industry leaders, an emphasis on hands-on learning, and 24x7 support. You’ll learn the language, plus get the credibility of certification, making it easier to land one of those high-paying programmer jobs. Visit Simplilearn today, and get your programming career off to a great start!</p>
							<a href="#top"><i class="fas fa-arrow-circle-up" style="float:right;"></i></a>

								</div>


					</div>
					<div class="col-sm-12 col-md-1  mt-4 col-lg-2 hai col-xl-2 col-xl-2 ">
						<!-- <img src="<?php echo base_url();?>\assets\images\profile\19362653.jpg" style="width: 100%;height: 60%;border-radius: 10px;box-shadow: 0 4px 12px rgb(0 0 0 / 15%);"> -->
						<img src="<?php echo base_url();?>\assets\images\profile\coding.png" style="width: 100%;height: 30%;border-radius: 10px;box-shadow: 0 4px 12px rgb(0 0 0 / 15%);">
						<a href="#1"><img  src="<?php echo base_url();?>\assets\images\profile\javascript-logo.png" style="width: 100%;height: 30%;border-radius: 10px;box-shadow: 0 4px 12px rgb(0 0 0 / 15%);"></a>
						<a href="#2"><img src="<?php echo base_url();?>\assets\images\profile\python.png" style="width: 100%;height: 30%;border-radius: 10px;box-shadow: 0 4px 12px rgb(0 0 0 / 15%);"></a>
						<a href="#3"><img src="<?php echo base_url();?>\assets\images\profile\go-language-logo.png" style="width: 100%;height: 30%;border-radius: 10px;box-shadow: 0 4px 12px rgb(0 0 0 / 15%);"></a>
						<a href="#4"><img src="<?php echo base_url();?>\assets\images\profile\java.png" style="width: 100%;height: 30%;border-radius: 10px;box-shadow: 0 4px 12px rgb(0 0 0 / 15%);"></a>
						<a href="#5"><img src="<?php echo base_url();?>\assets\images\profile\kotlin.png" style="width: 100%;height: 30%;border-radius: 10px;box-shadow: 0 4px 12px rgb(0 0 0 / 15%);"></a>
						<a href="#6"><img src="<?php echo base_url();?>\assets\images\profile\php.png" style="width: 100%;height: 30%;border-radius: 10px;box-shadow: 0 4px 12px rgb(0 0 0 / 15%);"></a>
						<a href="#7"><img src="<?php echo base_url();?>\assets\images\profile\csharp.png" style="width: 100%;height: 30%;border-radius: 10px;box-shadow: 0 4px 12px rgb(0 0 0 / 15%);"></a>
						<a href="#8"><img src="<?php echo base_url();?>\assets\images\profile\swfit.png" style="width: 100%;height: 30%;border-radius: 10px;box-shadow: 0 4px 12px rgb(0 0 0 / 15%);"></a>
						<a href="#9"><img src="<?php echo base_url();?>\assets\images\profile\R.png" style="width: 100%;height: 30%;border-radius: 10px;box-shadow: 0 4px 12px rgb(0 0 0 / 15%);"></a>
						<a href="#10"><img src="<?php echo base_url();?>\assets\images\profile\ruby-logo.png" style="width: 100%;height: 30%;border-radius: 10px;box-shadow: 0 4px 12px rgb(0 0 0 / 15%);"></a>
						<a href="#11"><img src="<?php echo base_url();?>\assets\images\profile\c-language-logo.png" style="width: 100%;height: 30%;border-radius: 10px;box-shadow: 0 4px 12px rgb(0 0 0 / 15%);"></a>
						<a href="#12"><img src="<?php echo base_url();?>\assets\images\profile\Matlab.png" style="width: 100%;height: 30%;border-radius: 10px;box-shadow: 0 4px 12px rgb(0 0 0 / 15%);"></a>
						<a href="#13"><img src="<?php echo base_url();?>\assets\images\profile\TS2.png" style="width: 100%;height: 30%;border-radius: 10px;box-shadow: 0 4px 12px rgb(0 0 0 / 15%);"></a>
						<a href="#14"><img src="<?php echo base_url();?>\assets\images\profile\scala.png" style="width: 100%;height: 30%;border-radius: 10px;box-shadow: 0 4px 12px rgb(0 0 0 / 15%);"></a>
					</div>
				</div>
			</div>
		</div>
	</body>
	</html>
	<style>
		.content{
			margin-left: 24px;
			margin-top: 34px;
			font-family: sans-serif;

		}
		.lanuages{
			padding-left: 24px;
			margin-top: 12px;
			font-size: 14px;
			line-height: 32px;
			font-weight: 450;
			color: #36344D;
			letter-spacing: .6px;
			padding-bottom: 20px;
		}
		.lanuages-Head{
			margin-top: 18px;
		}
		.card-design{


			padding-left: 4px;
/*    margin: 13px;*/
box-shadow: 0 4px 12px rgb(0 0 0 / 15%);
border: 2px solid rgba(0,0,0,.125);
border-radius: 9px;
padding: 10px;


}
</style>

<style>
	@import url("https://fonts.googleapis.com/css?family=Roboto");
	@import url("https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css");

	body {
		font-family: "Roboto", sans-serif;
	}
	* {
		margin: 0;
		padding: 0;
	}
	i {
		margin-right: 10px;
	}
/*----------bootstrap-navbar-css------------*/
.navbar-logo {
	padding: 15px;
	color: #fff;
}
.navbar-mainbg {
	background-color: #0664de;
	padding: 0px;
}
#navbarSupportedContent {
	overflow: hidden;
	position: relative;
}
#navbarSupportedContent ul {
	padding: 0px;
	margin: 0px;
}
#navbarSupportedContent ul li a i {
	margin-right: 10px;
}
#navbarSupportedContent li {
	list-style-type: none;
	float: left;
}
#navbarSupportedContent ul li a {
	color: rgba(255, 255, 255, 0.5);
	text-decoration: none;
	font-size: 15px;
	display: block;
	padding: 20px 20px;
	transition-duration: 0.6s;
	transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
	position: relative;
}
#navbarSupportedContent > ul > li.active > a {
	color: #5161ce;
	background-color: transparent;
	transition: all 0.7s;
}
#navbarSupportedContent a:not(:only-child):after {
	content: "\f105";
	position: absolute;
	right: 20px;
	top: 10px;
	font-size: 14px;
	font-family: "Font Awesome 5 Free";
	display: inline-block;
	padding-right: 3px;
	vertical-align: middle;
	font-weight: 900;
	transition: 0.5s;
}
#navbarSupportedContent .active > a:not(:only-child):after {
	transform: rotate(90deg);
}
.hori-selector {
	display: inline-block;
	position: absolute;
	height: 100%;
	top: 0px;
	left: 0px;
	transition-duration: 0.6s;
	transition-timing-function: cubic-bezier(0.68, -0.55, 0.265, 1.55);
	background-color: #fff;
	border-top-left-radius: 7px;
	border-top-right-radius: 7px;
	margin-top: 10px;
}
.hori-selector .right,
.hori-selector .left {
	position: absolute;
	width: 25px;
	height: 25px;
	background-color: #fff;
	bottom: 10px;
}
.hori-selector .right {
	right: -25px;
}
.hori-selector .left {
	left: -25px;
}
.hori-selector .right:before,
.hori-selector .left:before {
	content: "";
	position: absolute;
	width: 50px;
	height: 50px;
	border-radius: 7px;
	background-color: #0664de;

}
.hori-selector .right:before {
	bottom: 0;
	right: -25px;
}
.hori-selector .left:before {
	bottom: 0;
	left: -25px;
}

@media (min-width: 992px) {
	.navbar-expand-custom {
		-ms-flex-flow: row nowrap;
		flex-flow: row nowrap;
		-ms-flex-pack: start;
		justify-content: flex-start;
	}
	.navbar-expand-custom .navbar-nav {
		-ms-flex-direction: row;
		flex-direction: row;
	}
	.navbar-expand-custom .navbar-toggler {
		display: none;
	}
	.navbar-expand-custom .navbar-collapse {
		display: -ms-flexbox !important;
		display: flex !important;
		-ms-flex-preferred-size: auto;
		flex-basis: auto;
	}
}

@media (max-width: 991px) {
	#navbarSupportedContent ul li a {
		padding: 12px 30px;
	}
	.hori-selector {
		margin-top: 0px;
		margin-left: 10px;
		border-radius: 0;
		border-top-left-radius: 25px;
		border-bottom-left-radius: 25px;
	}
	.hori-selector .left,
	.hori-selector .right {
		right: 10px;
	}
	.hori-selector .left {
		top: -25px;
		left: auto;
	}
	.hori-selector .right {
		bottom: -25px;
	}
	.hori-selector .left:before {
		left: -25px;
		top: -25px;
	}
	.hori-selector .right:before {
		bottom: -25px;
		left: -25px;
	}
}
h1,
h2,
h3,
h4,
h5,
h6 {}
a,
a:hover,
a:focus,
a:active {
	text-decoration: none;
	outline: none;
}

a,
a:active,
a:focus {
	color: #333;
	text-decoration: none;
	transition-timing-function: ease-in-out;
	-ms-transition-timing-function: ease-in-out;
	-moz-transition-timing-function: ease-in-out;
	-webkit-transition-timing-function: ease-in-out;
	-o-transition-timing-function: ease-in-out;
	transition-duration: .2s;
	-ms-transition-duration: .2s;
	-moz-transition-duration: .2s;
	-webkit-transition-duration: .2s;
	-o-transition-duration: .2s;
}

ul {
	margin: 0;
	padding: 0;
	list-style: none;
}
img {
	max-width: 100%;
	height: auto;
}
section {
	padding: 60px 0;
	/* min-height: 100vh;*/
}
.footer {
	background: linear-gradient(105deg,#0664de ,#0664de);
	padding-top: 80px;
	padding-bottom: 40px;
}
/*END FOOTER SOCIAL DESIGN*/
.single_footer{}
@media only screen and (max-width:768px) { 
	.single_footer{margin-bottom:30px;}
}
.single_footer h4 {
	color: #fff;
	margin-top: 0;
	margin-bottom: 25px;
	font-weight: 700;
	text-transform: uppercase;
	font-size: 20px;
}
.single_footer h4::after {
	content: "";
	display: block;
	height: 2px;
	width: 40px;
	background: #fff;
	margin-top: 20px;
}
.single_footer p{color:#fff;}
.single_footer ul {
	margin: 0;
	padding: 0;
	list-style: none;
}
.single_footer ul li{}
.single_footer ul li a {
	color: #fff;
	-webkit-transition: all 0.3s ease 0s;
	transition: all 0.3s ease 0s;
	line-height: 36px;
	font-size: 15px;
	text-transform: capitalize;
}
.single_footer ul li a:hover { color: #ff3666; }

.single_footer_address{}
.single_footer_address ul{}
.single_footer_address ul li{color:#fff;}
.single_footer_address ul li span {
	font-weight: 400;
	color: #fff;
	line-height: 28px;
}
.contact_social ul {
	list-style: outside none none;
	margin: 0;
	padding: 0;
}

/*START NEWSLETTER CSS*/
.subscribe {
	display: block;
	position: relative;
	margin-top: 15px;
	width: 100%;
}
.subscribe__input {
	background-color: #fff;
	border: medium none;
	border-radius: 5px;
	color: #333;
	display: block;
	font-size: 15px;
	font-weight: 500;
	height: 60px;
	letter-spacing: 0.4px;
	margin: 0;
	padding: 0 150px 0 20px;
	text-align: center;
	text-transform: capitalize;
	width: 100%;
}
@media only screen and (max-width:768px) { 
	.subscribe__input{padding: 0 50px 0 20px;}
}

.subscribe__btn {
	background-color: transparent;
	border-radius: 0 25px 25px 0;
	color: #01c7e9;
	cursor: pointer;
	display: block;
	font-size: 20px;
	height: 60px;
	position: absolute;
	right: 0;
	top: 0;
	width: 60px;
}
.subscribe__btn i{transition: all 0.3s ease 0s;}
@media only screen and (max-width:768px) { 
	.subscribe__btn{right:0px;}
}

.subscribe__btn:hover i{
	color:#ff3666;
}
button {
	padding: 0;
	border: none;
	background-color: transparent;
	-webkit-border-radius: 0;
	border-radius: 0;
}
/*END NEWSLETTER CSS*/

/*START SOCIAL PROFILE CSS*/
.social_profile {margin-top:40px;}
.social_profile ul{
	list-style: outside none none;
	margin: 0;
	padding: 0;
}
.social_profile ul li{float:left;}
.social_profile ul li a {
	text-align: center;
	border: 0px;
	text-transform: uppercase;
	transition: all 0.3s ease 0s;
	margin: 0px 5px;
	font-size: 18px;
	color: #fff;
	border-radius: 30px;
	width: 50px;
	height: 50px;
	line-height: 50px;
	display: block;
	border: 1px solid rgba(255,255,255,0.2);
}
@media only screen and (max-width:768px) { 
	.social_profile ul li a{margin-right:10px;margin-bottom:10px;}
}
@media only screen and (max-width:480px) { 
	.social_profile ul li a{
		width:40px;
		height:40px;
		line-height:40px;
	}
}
.social_profile ul li a:hover{
	background:#ff3666;
	border: 1px solid #ff3666;
	color:#fff;
	border:0px;
}
/*END SOCIAL PROFILE CSS*/
.copyright {
	margin-top: 70px;
	padding-top: 40px;
	color:#fff;
	font-size: 15px;
	border-top: 1px solid rgba(255,255,255,0.4);
	text-align: center;
}
.copyright a{color:#01c7e9;transition: all 0.2s ease 0s;}
.copyright a:hover{color:#ff3666;}
</style>
<script>
	// ---------Responsive-navbar-active-animation-----------
	function test() {
		var tabsNewAnim = $("#navbarSupportedContent");
		var selectorNewAnim = $("#navbarSupportedContent").find("li").length;
		var activeItemNewAnim = tabsNewAnim.find(".active");
		var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
		var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
		var itemPosNewAnimTop = activeItemNewAnim.position();
		var itemPosNewAnimLeft = activeItemNewAnim.position();
		$(".hori-selector").css({
			top: itemPosNewAnimTop.top + "px",
			left: itemPosNewAnimLeft.left + "px",
			height: activeWidthNewAnimHeight + "px",
			width: activeWidthNewAnimWidth + "px"
		});
		$("#navbarSupportedContent").on("click", "li", function (e) {
			$("#navbarSupportedContent ul li").removeClass("active");
			$(this).addClass("active");
			var activeWidthNewAnimHeight = $(this).innerHeight();
			var activeWidthNewAnimWidth = $(this).innerWidth();
			var itemPosNewAnimTop = $(this).position();
			var itemPosNewAnimLeft = $(this).position();
			$(".hori-selector").css({
				top: itemPosNewAnimTop.top + "px",
				left: itemPosNewAnimLeft.left + "px",
				height: activeWidthNewAnimHeight + "px",
				width: activeWidthNewAnimWidth + "px"
			});
		});
	}
	$(document).ready(function () {
		setTimeout(function () {
			test();
		});
	});
	$(window).on("resize", function () {
		setTimeout(function () {
			test();
		}, 500);
	});
	$(".navbar-toggler").click(function () {
		$(".navbar-collapse").slideToggle(300);
		setTimeout(function () {
			test();
		});
	});

// --------------add active class-on another-page move----------
	jQuery(document).ready(function ($) {
	// Get current path and find target link
		var path = window.location.pathname.split("/").pop();

	// Account for home page with empty path
		if (path == "") {
			path = "index.html";
		}

		var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');
	// Add active class to target link
		target.parent().addClass("active");
	});

// Add active class on another page linked
// ==========================================
// $(window).on('load',function () {
//     var current = location.pathname;
//     console.log(current);
//     $('#navbarSupportedContent ul li a').each(function(){
//         var $this = $(this);
//         // if the current path is like this link, make it active
//         if($this.attr('href').indexOf(current) !== -1){
//             $this.parent().addClass('active');
//             $this.parents('.menu-submenu').addClass('show-dropdown');
//             $this.parents('.menu-submenu').parent().addClass('active');
//         }else{
//             $this.parent().removeClass('active');
//         }
//     })
// });

</script>
<script>
	// ---------Responsive-navbar-active-animation-----------
	function test() {
		var tabsNewAnim = $("#navbarSupportedContent");
		var selectorNewAnim = $("#navbarSupportedContent").find("li").length;
		var activeItemNewAnim = tabsNewAnim.find(".active");
		var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
		var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
		var itemPosNewAnimTop = activeItemNewAnim.position();
		var itemPosNewAnimLeft = activeItemNewAnim.position();
		$(".hori-selector").css({
			top: itemPosNewAnimTop.top + "px",
			left: itemPosNewAnimLeft.left + "px",
			height: activeWidthNewAnimHeight + "px",
			width: activeWidthNewAnimWidth + "px"
		});
		$("#navbarSupportedContent").on("click", "li", function (e) {
			$("#navbarSupportedContent ul li").removeClass("active");
			$(this).addClass("active");
			var activeWidthNewAnimHeight = $(this).innerHeight();
			var activeWidthNewAnimWidth = $(this).innerWidth();
			var itemPosNewAnimTop = $(this).position();
			var itemPosNewAnimLeft = $(this).position();
			$(".hori-selector").css({
				top: itemPosNewAnimTop.top + "px",
				left: itemPosNewAnimLeft.left + "px",
				height: activeWidthNewAnimHeight + "px",
				width: activeWidthNewAnimWidth + "px"
			});
		});
	}
	$(document).ready(function () {
		setTimeout(function () {
			test();
		});
	});
	$(window).on("resize", function () {
		setTimeout(function () {
			test();
		}, 500);
	});
	$(".navbar-toggler").click(function () {
		$(".navbar-collapse").slideToggle(300);
		setTimeout(function () {
			test();
		});
	});

// --------------add active class-on another-page move----------
	jQuery(document).ready(function ($) {
	// Get current path and find target link
		var path = window.location.pathname.split("/").pop();

	// Account for home page with empty path
		if (path == "") {
			path = "index.html";
		}

		var target = $('#navbarSupportedContent ul li a[href="' + path + '"]');
	// Add active class to target link
		target.parent().addClass("active");
	});
</script>