$(function(e) {
	$('header').append(`
		<!-- Nav nav_header -->
		<nav class="nav_header">
		<div class="container-fluid">
		<div class="row">
		<!-- Col Left -->
		<div class="col col_left">
		<div class="content_logo" style="display:flex">
		<a href="" class="logo_pc">
		<img src="asset/gam/logo.png" class="logo_sidebar" alt="Logo">
		</a>
		<a href="" class="logo_mobile">
		<img src="asset/gam/burger.png" class="logo_sidebar" alt="Logo">
		</a>

		</div>
		</div>
		<!-- End Of Col Left -->

		<!-- Col Right -->
		<div class="col-7 col_right">
		<!-- Menu header -->
		<div class="menu_header">
		<div class="content_menu">
		<div class="responsive">
		<span class="btn_menu_header btn_close">
		<i class="fas fa-times"></i>
		</span>
		<h3 class="mb-3">Menu Navigasi</h3>
		</div>

		<a href="" class="link_menu">
		<div class="content_link">
		Home
		<i class="fas fa-arrow-right responsive"></i>
		</div>
		</a>
		<a href="newslater.html" class="link_menu">
		<div class="content_link">
		Newslatter
		<i class="fas fa-arrow-right responsive"></i>
		</div>
		</a>
		<a href="survey.html" class="link_menu">
		<div class="content_link">
		Survey
		<i class="fas fa-arrow-right responsive"></i>
		</div>
		</a>
		<a href="feedback.html" class="link_menu">
		<div class="content_link">
		Feedback
		<i class="fas fa-arrow-right responsive"></i>
		</div>
		</a>
		</div>
		</div>
		<!-- End Of Menu header -->

		<a href="registrasi.html" class="box_profile">
		<img src="asset/gam/sign.png" class="img_profile" alt="Profile">
		<div class="info_profile">
		<div class="info_role text-center">DAFTAR</div>
		</div>
		</a>

		<!-- Trigger Responsive Menu Header -->
		<div class="menu_header_trigger responsive">
		<span class="btn_menu_header">
		<i class="fas fa-bars"></i>
		</span>
		</div>
		<!-- End Of Trigger Responsive Menu Header -->
		</div>
		<!-- End Of Col Right -->
		</div>
		</div>
		</nav>
		<!-- End Of Nav nav_header -->
		<!-- End Of Container page -->
		`);


	// $('.script').append('<script src="asset/js/app.js"></script>');

});