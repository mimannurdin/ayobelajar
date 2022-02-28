<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags --> 
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>ayo belajar</title>
		<link rel="stylesheet" href="<?= base_url('themes/vendors'); ?>/mdi/css/materialdesignicons.min.css">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">
		<link rel="stylesheet" href="<?= base_url('themes/vendors'); ?>/owl.carousel/css/owl.carousel.css">
		<link rel="stylesheet" href="<?= base_url('themes/vendors'); ?>/owl.carousel/css/owl.theme.default.min.css">
		<link rel="stylesheet" href="<?= base_url('themes/vendors'); ?>/aos/css/aos.css">
		<link rel="stylesheet" href="<?= base_url('themes/vendors'); ?>/jquery-flipster/css/jquery.flipster.css">
		<link rel="stylesheet" href="<?= base_url('themes/css'); ?>/style.css">
        <link rel="stylesheet" href="<?= base_url('bootstrap/css'); ?>/bootstrapcss">
		<link rel="shortcut icon" href="<?= base_url('themes/images'); ?>/logo-icon.png" />
	</head>
	<body data-spy="scroll" data-target=".navbar" data-offset="50">
		<div id="mobile-menu-overlay"></div>
		<nav class="navbar navbar-expand-lg fixed-top">
			<div class="container">
				<a class="navbar-brand" href="<?= base_url('home/index'); ?>"><img src="<?= base_url('themes/images'); ?>/Logo Ayo Belajar.png" style="width:auto; height:3rem;" alt="Ayo Belajar"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"><i class="mdi mdi-menu"> </i></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarTogglerDemo01">
					<div class="d-lg-none d-flex justify-content-between px-4 py-3 align-items-center">
						<img src="<?= base_url('themes/images'); ?>/Logo Ayo Belajar.png" class="logo-mobile-menu" alt="logo">
						<a href="javascript:;" class="close-menu"><i class="mdi mdi-close"></i></a>
					</div>
					<ul class="navbar-nav ml-auto align-items-center">
						<li class="nav-item active">
							<a class="nav-link" href="<?= base_url('home/index'); ?>">Home <span class="sr-only">(current)</span></a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="<?= base_url('home/about'); ?>">About</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="page-body-wrapper">
			<div id="bg" class="bg-wrapper"></div>
			<?= $this->renderSection('content'); ?>
		</div>
		<div class="row">
            <div class="col">
                <img src="<?= base_url('themes/images');?>/Moon.png" alt="" class="img-fluid">
            </div>
        </div>
		<footer class="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-sm-3">
						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3951.3233935385856!2d112.61561135004698!3d-7.9654922942347355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e788281b4a8d907%3A0xa09fb9cace97db5e!2sSLB%20Autis%20Laboratorium%20UM!5e0!3m2!1sid!2sid!4v1645038063853!5m2!1sid!2sid" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
						</div>
						<div class="col-sm-4">
							<address>
							<h6 class="footer-title">Address</h6>
								<p>Jl. Surabaya No.6, Sumbersari,</p>
								<p class="mb-4">Kec. Lowokwaru, Kota Malang, Jawa Timur<br>Indonesia. 65145</p>
						</div>
						<div class="col-sm-4">
							<div class="row">
								<div class="col-sm-12">
									<h6 class="footer-title">Navigation</h6>
									<ul class="list-footer">
										<li><a href="<?= base_url('home/index'); ?>" class="footer-link">Home</a></li>
										<li><a href="<?= base_url('home/about'); ?>" class="footer-link">About</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="d-flex justify-content-center align-items-center">
						<div class="d-flex align-items-center">
						<img src="<?= base_url('themes/images');?>/Logo Ayo Belajar.png" class="mr-3" style="width: auto; height: 2rem" alt="Ayo Belajar"><br>
							<p class="mb-0 text-small pt-1">© 2021-2022 <a href="#" class="text-white" target="_blank">Universitas Negeri Malang</a>. All rights reserved.</p>

							<p class="mb-0 text-small pt-1 pl-4">Distributed By: <a href="#" class="text-white" target="_blank">Muhammad Iman Nurdin</a></p>
						</div>
					</div>

				</div>
			</div>
		</footer>
		<script src="<?= base_url('themes/vendors'); ?>/base/vendor.bundle.base.js"></script>
		<script src="<?= base_url('themes/vendors'); ?>/owl.carousel/js/owl.carousel.js"></script>
		<script src="<?= base_url('themes/vendors'); ?>/aos/js/aos.js"></script>
		<script src="<?= base_url('themes/vendors'); ?>/jquery-flipster/js/jquery.flipster.min.js"></script>
		<script src="<?= base_url('themes/js'); ?>/template.js"></script>
		<script src="<?= base_url('quiz/js'); ?>/quiz.js"></script>
		<script src="<?= base_url('materi/js'); ?>/fullscreenvideo.js"></script>
		<script src="<?= base_url('animation/js'); ?>/lottie.js"></script>
		<script src="<?= base_url('animation/js'); ?>/animation.js"></script>
		<!-- <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script> -->
	</body>
</html>