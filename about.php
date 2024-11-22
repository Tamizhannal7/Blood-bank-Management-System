<?php
error_reporting(0);
include('includes/config.php');
?>

<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Blood Bank Donar Management System | About Us </title>
	<!-- Meta tag Keywords -->
	
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!--// Meta tag Keywords -->

	<!-- Custom-Files -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Bootstrap-Core-CSS -->
	<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
	<!-- Style-CSS -->
	<link rel="stylesheet" href="css/fontawesome-all.css">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->

	<!-- Web-Fonts -->
	<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
	    rel="stylesheet">
	<!-- //Web-Fonts -->

</head>

<body>
	<?php include('includes/header.php');?>

	<!-- banner 2 -->
	<div class="inner-banner-w3ls">
		<div class="container">

		</div>
		<!-- //banner 2 -->
	</div>
	<!-- page details -->
	<!-- <div class="breadcrumb-agile">
		<div aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item">
					<a href="index.php">Home</a>
				</li>
				<li class="breadcrumb-item active" aria-current="page">About Us</li>
			</ol>
		</div>
	</div> -->
	<!-- //page details -->

	<!-- about -->
	<section class="about">
		<div class="container py-xl-2 py-lg-2">
		<div class="w3ls-titles text-center mb-md-5 mb-4">
				<h3 class="title">Who We Are?</h3>
				<span>
					<i class="fas fa-user-md"></i>
				</span>
				<p class="py-3">Our mission is to create a centralized platform that connects blood donors with those in need, making the process of blood donation more efficient and accessible. Through our website, we aim to promote awareness and educate the public on the importance of regular blood donation. By leveraging technology to streamline the process and connect donors with recipients in real-time, we hope to make a positive impact on the lives of those in need of life-saving blood transfusions.</p>
			</div>		
		</div>
	</section>
	
	<!-- our teams -->
	<section class="p-5">
	<h3 class="title py-xl-2 py-lg-2">Behind This Project?</h3>
	<div class="card-deck">
	<div class="card">
    <img src="images\saad.jpeg" class="card-img-top team-img" alt="saad khanzada" style="height:50%">
    <div class="card-body">
      <h4 class="card-title">Saad Khanzada</h4>
      <p class="card-text">Saad is a valuable member of our team, bringing expertise in Java and frontend technology as a final year Software Engineering student at Mehran University. With a passion for staying current and continuously learning, Saad is always seeking out new opportunities to expand his knowledge and skills.</p>      
	  <div class="row p-2">
	  <ul class="top-right-info">                            
                                <li class="mx-3">
                                    <a href="https://www.linkedin.com/in/saad-khanzada-4408801a0">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/Saad-Khanzada">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </li>                                
                            </ul>
	  </div>
    </div>
  </div>

  <div class="card">
    <img src="images\Noor.jpeg" class="card-img-top team-img" alt="noor" style="height:50%">
    <div class="card-body">
      <h4 class="card-title">Noor Ahmed</h4>
      <p class="card-text">Noor Ahmed is a valuable team member with expertise in frontend, ReactJS, and WordPress. His dedication to growth and continuous learning makes him a valuable asset to any software development project. With a strong foundation in these areas, Noor Ahmed is well-equipped to make valuable contributions to the team..</p>      
	  <div class="row p-2">
	  <ul class="top-right-info">                            
                                <li class="mx-3">
                                    <a href="https://www.linkedin.com/in/noor-ahmed-%E2%9C%85-wordpress-developer/">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/Noor-Ahmed-12/">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </li>                                
                            </ul>
	  </div>
    </div>
  </div>
  
  <div class="card">
    <img src="images\ritik.jpeg" class="card-img-top team-img" alt="ritik" style="height:50%">
    <div class="card-body">
      <h4 class="card-title">Ritik Kumar</h4>
      <p class="card-text">Ritik is a valuable team member with expertise in Python and frontend technology. His dedication to growth and continuous learning makes him a valuable asset to any software development project. With a strong foundation in these areas and a passion for staying current, Ritik is well-equipped to make valuable contributions to the team.</p>      
	  <div class="row p-2">
	  <ul class="top-right-info">                            
                                <li class="mx-3">
                                    <a href="https://www.linkedin.com/in/ritik-advani-1570841a1">
                                        <i class="fab fa-linkedin"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://github.com/Ritik786">
                                        <i class="fab fa-github"></i>
                                    </a>
                                </li>                                
                            </ul>
	  </div>
    </div>
  </div>
</div>
</section>
	<!-- //about -->



	<?php include('includes/footer.php');?>


	<!-- Js files -->
	<!-- JavaScript -->
	<script src="js/jquery-2.2.3.min.js"></script>
	<!-- Default-JavaScript-File -->

	<!-- banner slider -->
	<script src="js/responsiveslides.min.js"></script>
	<script>
		$(function () {
			$("#slider4").responsiveSlides({
				auto: true,
				pager: true,
				nav: true,
				speed: 1000,
				namespace: "callbacks",
				before: function () {
					$('.events').append("<li>before event fired.</li>");
				},
				after: function () {
					$('.events').append("<li>after event fired.</li>");
				}
			});
		});
	</script>
	<!-- //banner slider -->

	<!-- fixed navigation -->
	<script src="js/fixed-nav.js"></script>
	<!-- //fixed navigation -->

	<!-- smooth scrolling -->
	<script src="js/SmoothScroll.min.js"></script>
	<!-- move-top -->
	<script src="js/move-top.js"></script>
	<!-- easing -->
	<script src="js/easing.js"></script>
	<!--  necessary snippets for few javascript files -->
	<script src="js/medic.js"></script>

	<script src="js/bootstrap.js"></script>
	<!-- Necessary-JavaScript-File-For-Bootstrap -->

	<!-- //Js files -->

</body>

</html>