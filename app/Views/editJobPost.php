<!DOCTYPE html>
<html>
<head>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/assets/css/style.css">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Eternity</title>
</head>
<body>
<!-- -->
 <form action="<?php echo base_url();?>/UpdateJob" autocomplete="off" enctype="multipart/form-data" method="post" name="jobpost" class="jobpost"> 

 <?php foreach($data as $value) {
        ?>
	<div class="container-fluid hy">
		<div class="container cntnr">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="wrapper">
						<div class="login-cust">
							<h1 class="text-center fb-blue mb-4"><b>Eternity</b></h1>
							<div class="login-card card">
								<div class="as">
									<h2 class="text-center fb-blue hd">jobs</h2>
                       <input  hidden type="text" name="id" id="hid" value="<?php echo $value->h_id;?>">
									
									<label class="mt-4">Company name :</label>
									<input type="text" value="<?php echo $value->h_companyname;?>" class="form-control mt-1 "  id="Username" placeholder="Company name" name="job_com_name">
									<label>Job details :</label>
											<input type="text" value="<?php echo $value->h_jobdetails;?>" class="form-control mt-1" id=""  placeholder="Details" name="job_details">
										
									<label class="mt-1">What position are you hire :</label>
									<div class="cust-border">
									<input type="text" value="<?php echo $value->h_position;?>"  class="form-control mt-1" id=""  placeholder="Position" name="job_position">
										<label class="">Salary :</label>
									<input type="text" value="<?php echo $value->h_salary;?>" class="form-control mt-1"  id="" placeholder="Salary" name="job_salary">
										<label class="">Skills :</label>
									<input type="text" value="<?php echo $value->h_skills;?>" class="form-control mt-1" id=""  placeholder="Skills" name="job_skills">
										<label>Experience :</label>
										<input  type="text" value="<?php echo $value->h_experience;?>" class="form-control login-password mt-1"  id="" placeholder="eg:-1yr+" name="job_experience" >
					
										<label>Photo :</label><br>
										      <input type="file" class="form-control" id="shimg" name="job_photo"><img width="150px" id="imgggg" src="<?php echo base_url(); ?>/hireImages/<?php echo $value->h_photo;?>">
						
										
									
									
								
									</div>
									<div class="learnmore1" >
									<!-- <p class="learnmore">People who use our service may have <br>uploaded your contact information to <br>Eternity.<a class="learn" href="">Learn more.</a></p> -->
										</div>
									<div class="cust-btn ">
										<button class="btn login-btn mt-3"><b>Submit</b></button>
									</form> 
                                   <?php } ?>
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
                                    $("#shimg").change(function() {
                                   readURL(this);
                                    });
                                    function readURL(input) {
                                       if (input.files && input.files[0]) {
                               var reader = new FileReader();
                                       reader.readAsDataURL(input.files[0]);
                                   reader.onload = function(e) {
                                      $('#imgggg').attr('src', e.target.result);
                                       }
                                             }
                                            }
                                        </script>



</body>
</html>
<style>
.hy{
	padding: 225px !important;

}
.hd{
	margin-top: -45px;
}
.card{
	padding-left: ;
}
@media only screen and (min-width: 818px) and (max-width: 1072px){
{

}.card{
	padding:60px ;
}
}
@media only screen and (min-width: 793px) and (max-width: 818px){
.card{
	padding: 47px ;
}
}
@media only screen and (min-width: 762px) and (max-width: 792px){
	.card{
	padding:33px ;
}
.hd{
	margin-top: 14px;
}
}

/*@media (max-width: 1072px) {
.card{
	padding:60px ;
}
}
@media (max-width: 818px) {
.card{
	padding:47px ;
}
}*/
/*@media (max-width: 792px) {
.card{
	padding:33px ;
}
.hd{
	margin-top: 14px;
}
}*/
@media (max-width: 762px) {
.card{
	padding:24px ;
}
.hd{
	margin-top: -5px;
}
@media (max-width: 350px) {
.as{
	padding: 124px;
}
.cntnr{
	padding-bottom: 203px;
	margin-top: 153px;

}
.hd{
	margin-top: -105px;
}
/*input form-control{
	padding: 55px !important;
}
*/
.form-control{
	padding: 55px;
}
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