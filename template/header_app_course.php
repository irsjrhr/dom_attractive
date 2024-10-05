
<?php

$data_materi = [
	["materi" => "Materi 1", "link" => "appCourse_materi.php"],
	["materi" => "Materi 2", "link" => "appCourse_materi.php"],
	["materi" => "Materi 3", "link" => "appCourse_materi.php"],
	["materi" => "Materi 4", "link" => "appCourse_materi.php"]
];
?>


<html lang="en">
<head>
	<!-- Required meta tags -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
	<link rel="stylesheet" type="text/css" href="asset/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="asset/css/style.css">
	<link rel="stylesheet" type="text/css" href="asset/css/panel.css">
	<link rel="stylesheet" type="text/css" href="asset/css/app_course.css">
	<title>App Course</title>
</head>

<?php require_once 'modal_menu_user.php'; ?>
<body>

	<!-- Container page -->
	<div class="container-fluid container_page">



		<!-- Row page -->
		<div class="row row_page">
			
			<!-- Sidebar -->
			<div class="col_sidebar">
				<div class="sidebar">
					<div class="container-fluid">

						<!-- Row Header -->
						<div class="row row_header">
							<div class="col-12">
								<span class="btn_sidebar">
									<i class="fas fa-bars"></i>
								</span>
								<img src="asset/gam/logo.png" class="logo_sidebar">
								<h1 class="logo_font"> App - Course </h1>
							</div>
						</div>
						<!-- End Of Row Header -->

						<!-- link_menu - row ujian -->
						<a href="appCourse_index.php" class="link_menu link_ujian">
							<div class="row row_menu">
								<div class="col-3 menu_logo">
									<i class="fas fa-home"></i>
								</div>
								<div class="col menu_text">
									Koridor
								</div>
							</div>
						</a>
						<!-- End Of link_menu - row ujian -->

						<div class="row row_menu row_chapter row_title">
							<div class="col menu_text text-center">
								Chapter :
							</div>
						</div>

						<!-- link_menu - row chapter -->
						<?php foreach ($data_materi as $key => $row_materi): ?>
							<a href="<?= $row_materi['link'] ?>" class="link_menu">
								<div class="row row_menu row_chapter">
									<div class="col-3 menu_logo">
										<i class="fas fa-book"></i>
									</div>
									<div class="col menu_text">
										<?= $row_materi['materi'] ?>
									</div>
								</div>
							</a>
						<?php endforeach ?>
						<!-- End Of link_menu - row chapter -->




					</div>
				</div>
			</div>
			<!-- End Of Sidebar -->


			<!-- Content -->
			<div class="col content">
				<header>
					<!-- Nav nav_header -->
					<nav class="nav_header">
						<div class="container-fluid">
							<div class="row">
								<!-- Col Left' -->
								<div class="col col_left">
									<div class="responsive_content mr-3">
										<div class="content">
											<span class="btn_sidebar">
												<i class="fas fa-bars"></i>
											</span>
										</div>
									</div>
									<div class="info_course">
										<h1 class="title_course text_flow_multi2">
											Judul Course
										</h1>
										<p class="mentor_course text_flow_multi1">
											Sub Judul
										</p>
									</div>

								</div>
								<!-- End Of Col Left' -->
								<!-- Col Right' -->
								<div class="col col_right">
									<div class="box_profile" data-toggle="modal" data-target="#modal_menu">
										<img src="asset/gam/banner_login.png" class="img_profile">
										<div class="info_profile">
											<div class="info_user text_flow_multi1">
												Irshandy Juniar Hardadi
											</div>
											<div class="info_role">
												Student
											</div>
										</div>
									</div>
								</div>
								<!-- End Of Col Right' -->

							</div>
						</div>
					</nav>
					<!-- End Of Nav nav_header -->

				</header>
