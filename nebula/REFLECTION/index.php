<?php
$_SESSION['page'] = 'reflection';
include('../../file/show.php');
 ?>
<html lang="en">

<head>
	<title>REFLECTION</title>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
	integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-rfs/bootstrap-rfs.css">
	<link rel="stylesheet" href="../../style.css">
	<script src="../../script/script.js"></script>
	<link rel="icon" href="../../pic/favicon-nebula.ico" type="image/x-icon">
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>

<body>

	<!-- nebular-site1 -->
	<section class="site1-nebular" id="blog-index">
		<div class="container">
			<div class="row justify-content-center align-items-center">
				<div class="display-3 site1-nebular-text shadow-w" style="color: #e27c66;">Reflection Nebular.<br>
					เนบิวล่าสะท้อนเเสง<br>
					<a class="h4 btn btn-outline-dark text-black mt-4 p-3" href="#reflection_site2" role="button">Next
					Page.</a>
				</div>
			</div>
		</div>
	</section>

	<div class="head_reflection"></div>

	<!-- nebular-site2 -->
	<section class="reflection_site2" id="reflection_site2">
		<div class="container-fluid">
			<div class="row">
				<div class="picreflections col-lg-12 col-xl-6 mt-1 mb-1" data-aos="zoom-in-up" data-aos-duration="1000">
					
					<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="../../pic/nebular4_1.jpg" alt="First slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="../../pic/nebular5_1.jpg" alt="Second slide">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="../../pic/nebular6_1.jpg" alt="Third slide">
							</div>
						</div>
						<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
				</div>
				<div class="col-lg-12 col-xl-6  mt-4 mb-5 p-3" id="div-bg3" data-aos="zoom-in-up" data-aos-duration="1500">
					<div class="h2 text-light shadow-b container-fluid"> Reflection Nebular</div>
					<div class="h5 text-light shadow-b container-fluid">(เนบิลล่าสะท้อนเเสง)
					</div><br>
					<div class="h5 text-light shadow-b container-fluid" style="line-height: 1.7em;" id="reflection_detail_1">
						
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- footer -->
	<section class="footer text-center" style="background-color: #e27c66">
		<a class="h4 btn btn-outline-dark text-light shadow-b mt-4 px-5 py-3" href="../DARK/"
		role="button">BACK</a>
		<a class="h4 btn btn-outline-dark text-light shadow-b mt-4 px-5 py-3" href="../../blog/"
		role="button">BLOG</a>
		<a class="h4 btn btn-outline-dark text-light shadow-b mt-4 px-5 py-3" href="../PLANETARY/"
		role="button">NEXT</a>
	</div>
</section>

<!-- Optional JavaScript -->
<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
</body>

</html>