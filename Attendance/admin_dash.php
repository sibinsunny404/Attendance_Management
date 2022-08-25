<?php
require_once 'sessions.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Admin Dashboard</title>

	<!-- Meta -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<meta name="description" content="Portal - Bootstrap 5 Admin Dashboard Template For Developers">
	<meta name="author" content="Xiaoying Riley at 3rd Wave Media">
	<link rel="shortcut icon" href="favicon.ico">

	<!-- FontAwesome JS-->
	<script defer src="assets/plugins/fontawesome/js/all.min.js"></script>

	<!-- App CSS -->
	<link id="theme-style" rel="stylesheet" href="assets/css/portal.css">
</head>

<body class="app" style="background: #355C7D;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #C06C84, #6C5B7B, #355C7D);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #C06C84, #6C5B7B, #355C7D); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
	<?php
		require_once 'loader.html';
	?>
	<div style="border:0px;" class="header_fixed">
		<header class="app-header fixed-top">
			<div class="app-header-inner" style="background: #355C7D;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #C06C84, #6C5B7B, #355C7D);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #C06C84, #6C5B7B, #355C7D); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */">
				<div class="container-fluid py-2">
					<div class="app-header-content">
						<div class="row justify-content-between align-items-center">

							<div class="col-auto">
								<a id="sidepanel-toggler" class="sidepanel-toggler d-inline-block d-xl-none" href="#">
									<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" role="img">
										<title>Menu</title>
										<path stroke="currentColor" stroke-linecap="round" stroke-miterlimit="10" stroke-width="2" d="M4 7h22M4 15h22M4 23h22"></path>
									</svg>
								</a>
							</div>
							<!--//col-->
							<div class="search-mobile-trigger d-sm-none col">
								<i class="search-mobile-trigger-icon fas fa-search"></i>
							</div>
							<!--//col-->


							<div class="app-utilities col-auto">
								<div class="app-utility-item app-notifications-dropdown dropdown">
									<a class="dropdown-toggle no-toggle-arrow" id="notifications-dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false" title="Notifications">
										<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
										<!-- <span class="icon-badge">3</span> -->
									</a>
									<!--//dropdown-toggle-->

									<div class="dropdown-menu p-0" aria-labelledby="notifications-dropdown-toggle">
										<div class="dropdown-menu-header p-3">
										</div>
										<!--//dropdown-menu-title-->
										<div class="dropdown-menu-content">
											<div class="item p-3">
												<div class="row gx-2 justify-content-between align-items-center">
													<div class="col-auto">
														<img class="profile-image" src="assets/images/profiles/profile-1.png" alt="">
													</div>
													<!--//col-->
													<div class="col">
														<div class="info">

														</div>
													</div>
													<!--//col-->
												</div>
												<!--//row-->
												<a class="link-mask" href="notifications.html"></a>
											</div>
											<!--//item-->
											<div class="item p-3">
												<div class="row gx-2 justify-content-between align-items-center">
													<div class="col-auto">
														<div class="app-icon-holder">
															<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-receipt" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																<path fill-rule="evenodd" d="M1.92.506a.5.5 0 0 1 .434.14L3 1.293l.646-.647a.5.5 0 0 1 .708 0L5 1.293l.646-.647a.5.5 0 0 1 .708 0L7 1.293l.646-.647a.5.5 0 0 1 .708 0L9 1.293l.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .708 0l.646.647.646-.647a.5.5 0 0 1 .801.13l.5 1A.5.5 0 0 1 15 2v12a.5.5 0 0 1-.053.224l-.5 1a.5.5 0 0 1-.8.13L13 14.707l-.646.647a.5.5 0 0 1-.708 0L11 14.707l-.646.647a.5.5 0 0 1-.708 0L9 14.707l-.646.647a.5.5 0 0 1-.708 0L7 14.707l-.646.647a.5.5 0 0 1-.708 0L5 14.707l-.646.647a.5.5 0 0 1-.708 0L3 14.707l-.646.647a.5.5 0 0 1-.801-.13l-.5-1A.5.5 0 0 1 1 14V2a.5.5 0 0 1 .053-.224l.5-1a.5.5 0 0 1 .367-.27zm.217 1.338L2 2.118v11.764l.137.274.51-.51a.5.5 0 0 1 .707 0l.646.647.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.646.646.646-.646a.5.5 0 0 1 .708 0l.509.509.137-.274V2.118l-.137-.274-.51.51a.5.5 0 0 1-.707 0L12 1.707l-.646.647a.5.5 0 0 1-.708 0L10 1.707l-.646.647a.5.5 0 0 1-.708 0L8 1.707l-.646.647a.5.5 0 0 1-.708 0L6 1.707l-.646.647a.5.5 0 0 1-.708 0L4 1.707l-.646.647a.5.5 0 0 1-.708 0l-.509-.51z" />
																<path fill-rule="evenodd" d="M3 4.5a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 1 1 0 1h-6a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5zm8-6a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5zm0 2a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 0 1h-1a.5.5 0 0 1-.5-.5z" />
															</svg>
														</div>
													</div>
													<!--//col-->
													<div class="col">
														<div class="info">

														</div>
													</div>
													<!--//col-->
												</div>
												<!--//row-->
												<a class="link-mask" href="notifications.html"></a>
											</div>
											<!--//item-->
											<div class="item p-3">
												<div class="row gx-2 justify-content-between align-items-center">
													<div class="col-auto">
														<div class="app-icon-holder icon-holder-mono">
															<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-bar-chart-line" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
																<path fill-rule="evenodd" d="M11 2a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v12h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1v-3a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3h1V7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7h1V2zm1 12h2V2h-2v12zm-3 0V7H7v7h2zm-5 0v-3H2v3h2z" />
															</svg>
														</div>
													</div>
													<!--//col-->
													<div class="col">
														<div class="info">

														</div>
													</div>
													<!--//col-->
												</div>
												<!--//row-->
												<a class="link-mask" href="notifications.html"></a>
											</div>
											<!--//item-->
											<div class="item p-3">
												<div class="row gx-2 justify-content-between align-items-center">
													<div class="col-auto">
														<img class="profile-image" src="assets/images/profiles/profile-2.png" alt="">
													</div>
													<!--//col-->
													<div class="col">
														<div class="info">

														</div>
													</div>
													<!--//col-->
												</div>
												<!--//row-->

											</div>
											<!--//item-->
										</div>
										<!--//dropdown-menu-content-->

									</div>
									<!--//dropdown-menu-->
								</div>
								<!--//app-utility-item-->
								<div class="app-utility-item">
								</div>
								<!--//app-utility-item-->

								<div class="app-utility-item app-user-dropdown dropdown">
									<a style="color:red;font-weight: 600; font-size:small;" href="logout.php?logout"><img src="assets/images/users/logout.png" alt="user profile" style="height:23px; width:23px;">LOGOUT</a>

								</div>
								<!--//app-user-dropdown-->
							</div>
							<!--//app-utilities-->
						</div>
						<!--//row-->
					</div>
					<!--//app-header-content-->
				</div>
				<!--//container-fluid-->
			</div>
			<!--//app-header-inner-->
			<div id="app-sidepanel" class="app-sidepanel">
				<div id="sidepanel-drop" class="sidepanel-drop"></div>
				<div class="sidepanel-inner d-flex flex-column">
					<a href="#" id="sidepanel-close" class="sidepanel-close d-xl-none">&times;</a>
					<div class="app-branding">
						<a class="app-logo" href="404.html"><img class="logo-icon me-2" src="assets/images/users/user-1.png" alt="logo"><span class="logo-text"><?php echo $_SESSION['user']; ?></span></a>

					</div>
					<!--//app-branding-->

					<nav id="app-nav-main" class="app-nav app-nav-main flex-grow-1">
						<ul class="app-menu list-unstyled accordion" id="menu-accordion">
							<li class="nav-item">
								<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
								<a class="nav-link active" href="admin_dash.php">
									<span class="nav-icon">
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-door" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M7.646 1.146a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5H9.5a.5.5 0 0 1-.5-.5v-4H7v4a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6zM2.5 7.707V14H6v-4a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 .5.5v4h3.5V7.707L8 2.207l-5.5 5.5z" />
											<path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
										</svg>
									</span>
									<span class="nav-link-text">Overview</span>
								</a>
								<!--//nav-link-->
							</li>
							<!--//nav-item-->
							<li class="nav-item">
								<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
								<a class="nav-link" href="attendence.php">
									<span class="nav-icon">
										<img style="height: 20px;width:20px;" src="assets/images/extra/att.png" alt="">
									</span>
									<span class="nav-link-text">Take Attendance</span>
								</a>
								<!--//nav-link-->
							</li>
							<!--//nav-item-->
							<li class="nav-item">
								<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
								<a class="nav-link" href="addstudent.php">
									<span class="nav-icon">
										<img style="height: 20px;width:20px;" src="assets/images/extra/add_stu.png" alt="">
									</span>
									<span class="nav-link-text">Add Student</span>
								</a>
								<!--//nav-link-->
							</li>
							<!--//nav-item-->
							<li class="nav-item has-submenu">
								<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
								<a class="nav-link submenu-toggle" href="#" data-bs-toggle="collapse" data-bs-target="#submenu-1" aria-expanded="false" aria-controls="submenu-1">
									<span class="nav-icon">
										<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
										<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-files" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
											<path fill-rule="evenodd" d="M4 2h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V4a2 2 0 0 1 2-2zm0 1a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7a1 1 0 0 0 1-1V4a1 1 0 0 0-1-1H4z" />
											<path d="M6 0h7a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2v-1a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H6a1 1 0 0 0-1 1H4a2 2 0 0 1 2-2z" />
										</svg>
									</span>



									<span class="nav-link-text">View Students</span>
								</a>
								<!--//nav-link-->
							</li>
							<!--//nav-item-->

							<li class="nav-item">
								<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
							<li class="nav-item">
								<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
								<!--//nav-link-->
							</li>
							</li>

							<li class="nav-item">
								<!--//Bootstrap Icons: https://icons.getbootstrap.com/ -->
								<a class="nav-link" href="help.html">


								</a>
								<!--//nav-link-->
							</li>
							<!--//nav-item-->
						</ul>
						<!--//footer-menu-->
					</nav>
				</div>
				<!--//app-sidepanel-footer-->

			</div>
			<!--//sidepanel-inner-->
	</div>
	<!--//app-sidepanel-->
	</header>
	<!--//app-header-->

	<div class="app-wrapper">

		<div class="app-content pt-3 p-md-3 p-lg-4">
			<div class="container-xl" style="border:1px;">

				<h1 class="app-page-title" style="color:white;">Student Attendace System</h1>

				<div class="app-card alert alert-dismissible shadow-sm mb-4 border-left-decoration" role="alert">
					<div class="inner">
						<div class="app-card-body p-3 p-lg-6">
							<h3 class="mb-3">Welcome <?php echo $_SESSION['user']; ?></h3>
							<div class="row gx-5 gy-3">
								<div class="col-12 col-lg-12">
									<div>Welcome to The is the student attendace management system,</div>
								</div>
								<!--//col-->
								<div class="col-12 col-lg-3">

								</div>
								<!--//col-->
							</div>
							<!--//row-->
							<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
						</div>
						<!--//app-card-body-->

					</div>
					<!--//inner-->

				</div>
				<!--//col-->

				<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
<link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
<link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">


    <div class="row">
      <div class="col-xl-3 col-sm-6 col-12"> 
        <div class="card">
          <div class="card-content">
            <div class="card-body">
              <div class="media d-flex">
                <div class="align-self-center">
                  <i class="icon-pencil primary font-large-2 float-left"></i>
                </div>
                <div class="media-body text-right">
                  <h3>278</h3>
                  <span>New Posts</span>
                </div>
              </div>
            </div>
          </div>
        </div>

			<!--//app-wrapper-->


			<!-- Javascript -->
			<script src="assets/plugins/popper.min.js"></script>
			<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

			<!-- Charts JS -->
			<script src="assets/plugins/chart.js/chart.min.js"></script>

			<!-- Page Specific JS -->
			<script src="assets/js/app.js"></script>
			<!-- Bootstrap JavaScript Libraries -->
			<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

			<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>

</body>

</html>