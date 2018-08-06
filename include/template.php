<?php
if(!isset($_SESSION["user_session"]))
{
		header('Location: index.php?view=login');
 }

 $loggedin = $_SESSION["user_session"];
 $user = user()->get("username='$loggedin'");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <!-- Favicons -->
    <link rel="apple-touch-icon" href="include/templates/assets/img/apple-icon.png">
    <link rel="icon" href="include/img/icon.png">
    <title>
        Attending Medical Technologies
    </title>
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <link rel="stylesheet" href="include/templates/assets/css/material-dashboard.css?v=2.0.0">
    <!-- Documentation extras -->
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="include/templates/assets/assets-for-demo/demo.css" rel="stylesheet" />
    <!-- This is for recaptcha -->
		<script src='https://www.google.com/recaptcha/api.js'></script>


		<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
		<script>
		  (adsbygoogle = window.adsbygoogle || []).push({
		    google_ad_client: "ca-pub-8483985932636139",
		    enable_page_level_ads: true
		  });
		</script>

		<style>
		.navBar {
		  background-color: #000;
			margin-top: -10px;
		  top: 0;
		  width: 100%;
			height: 50px;
			color: #FFFFFF;
		}
		</style>
</head>

<body class="">
    <div class="wrapper">
        <div class="sidebar" data-color="purple" data-background-color="white" data-image="include/templates/assets/img/sidebar-1.jpg">
            <!--
        Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

        Tip 2: you can also add an image using data-image tag
    -->
            <div class="logo">
                <a href="index.php" class="simple-text logo-normal">
                    <img src="include/img/header.png" height="35px">
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">

									<li class="nav-item">
											<a class="nav-link" data-toggle="collapse" href="#Hermatology">
													<i class="material-icons">dashboard</i>
													<p>Hermatology
													</p>
											</a>
											<div class="collapse" id="Hermatology">
												<ul class="nav">
													<?php foreach(sub_section()->list("section_code='HE'") as $row) {?>
														<li class="nav-item ">
																<a class="nav-link" href="?view=list&code=<?=$row->code;?>">
																	<span class="sidebar-mini"> <?=$row->code;?> </span>
																	<span class="sidebar-normal"> <?=$row->name;?> </span>
																</a>
														</li>
													<?php } ?>
												</ul>
											</div>
									</li>

									<li class="nav-item">
											<a class="nav-link" data-toggle="collapse" href="#ClinicalChemistry">
													<i class="material-icons">dashboard</i>
													<p>Clinical Chemistry
													</p>
											</a>
											<div class="collapse" id="ClinicalChemistry">
												<ul class="nav">
													<?php foreach(sub_section()->list("section_code='CC'") as $row) {?>
														<li class="nav-item ">
																<a class="nav-link" href="?view=list&code=<?=$row->code;?>">
																	<span class="sidebar-mini"> <?=$row->code;?> </span>
																	<span class="sidebar-normal"> <?=$row->name;?> </span>
																</a>
														</li>
													<?php } ?>
												</ul>
											</div>
									</li>

									<li class="nav-item">
											<a class="nav-link" data-toggle="collapse" href="#ClinicalMicroscopy">
													<i class="material-icons">dashboard</i>
													<p>Clinical Microscopy
													</p>
											</a>
											<div class="collapse" id="ClinicalMicroscopy">
												<ul class="nav">
													<?php foreach(sub_section()->list("section_code='CM'") as $row) {?>
														<li class="nav-item ">
																<a class="nav-link" href="?view=list&code=<?=$row->code;?>">
																	<span class="sidebar-mini"> <?=$row->code;?> </span>
																	<span class="sidebar-normal"> <?=$row->name;?> </span>
																</a>
														</li>
													<?php } ?>
												</ul>
											</div>
									</li>

									<li class="nav-item">
											<a class="nav-link" data-toggle="collapse" href="#Bacteriology">
													<i class="material-icons">dashboard</i>
													<p>Bacteriology
													</p>
											</a>
											<div class="collapse" id="Bacteriology">
												<ul class="nav">
													<?php foreach(sub_section()->list("section_code='BA'") as $row) {?>
														<li class="nav-item ">
																<a class="nav-link" href="?view=list&code=<?=$row->code;?>">
																	<span class="sidebar-mini"> <?=$row->code;?> </span>
																	<span class="sidebar-normal"> <?=$row->name;?> </span>
																</a>
														</li>
													<?php } ?>
												</ul>
											</div>
									</li>

									<li class="nav-item">
											<a class="nav-link" data-toggle="collapse" href="#BloodBank">
													<i class="material-icons">dashboard</i>
													<p>Blood Bank and Serology
													</p>
											</a>
											<div class="collapse" id="BloodBank">
												<ul class="nav">
													<?php foreach(sub_section()->list("section_code='BL'") as $row) {?>
														<li class="nav-item ">
																<a class="nav-link" href="?view=list&code=<?=$row->code;?>">
																	<span class="sidebar-mini"> <?=$row->code;?> </span>
																	<span class="sidebar-normal"> <?=$row->name;?> </span>
																</a>
														</li>
													<?php } ?>
												</ul>
											</div>
									</li>

									<li class="nav-item">
											<a class="nav-link" data-toggle="collapse" href="#Histopathology">
													<i class="material-icons">dashboard</i>
													<p>Histopathology
													</p>
											</a>
											<div class="collapse" id="Histopathology">
												<ul class="nav">
													<?php foreach(sub_section()->list("section_code='HI'") as $row) {?>
														<li class="nav-item ">
																<a class="nav-link" href="?view=list&code=<?=$row->code;?>">
																	<span class="sidebar-mini"> <?=$row->code;?> </span>
																	<span class="sidebar-normal"> <?=$row->name;?> </span>
																</a>
														</li>
													<?php } ?>
												</ul>
											</div>
									</li>

									<?php if ($user->level=="DR") {?>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php?view=appointment_list">
                            <i class="material-icons">date_range</i>
                            <p>Appointment</p>
                        </a>
                    </li>
									<?php } ?>

	                    <li class="nav-item">
	                        <a class="nav-link" href="index.php?view=patients">
	                            <i class="material-icons">touch_app</i>
	                            <p>Patients</p>
	                        </a>
	                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="index.php?view=accounts">
                            <i class="material-icons">perm_phone_msg</i>
                            <p>Accounts</p>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="process.php?action=logout">
                            <i class="material-icons">remove_circle</i>
                            <p>Logout</p>
                        </a>
                    </li>

                </ul>
            </div>
        </div>
        <div class="main-panel">
            <!-- Navbar -->
            <nav class="navbar navbar-expand-lg navbar-transparent  navbar-absolute fixed-top">
                <div class="container-fluid">
                    <div class="navbar-wrapper">
                        Attending Medical Technologies
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                        <span class="navbar-toggler-icon icon-bar"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-end" id="navigation">
                        <form class="navbar-form">
                            <div class="input-group no-border">
                                <input type="text" name="s" class="form-control" placeholder="Search...">
                                <button type="submit" class="btn btn-white btn-round btn-just-icon">
                                    <i class="material-icons">search</i>
                                </button>
                            </div>
                        </form>
												<ul class="navbar-nav"></ul>
                    </div>
                </div>
            </nav>
            <!-- End Navbar -->
            <div class="content">
                <div class="container-fluid">
									<!--End here-->
											 <?php include "message.php";?>
									<!--End here-->
                    <div class="row">
											<!--End here-->
											     <?php include $content;?>
											<!--End here-->
                    </div>
                </div>
            </div>
            <footer class="footer ">
                <div class="container-fluid">
                    <div class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>, Project by
                        <a href="" target="_blank">GroupName</a>
                    </div>
                </div>
            </footer>
        </div>
    </div>
</body>
<!--   Core JS Files   -->
<script src="include/templates/assets/js/core/jquery.min.js"></script>
<script src="include/templates/assets/js/core/popper.min.js"></script>
<script src="include/templates/assets/js/bootstrap-material-design.js"></script>
<script src="include/templates/assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Charts Plugin, full documentation here: https://gionkunz.github.io/chartist-js/ -->
<script src="include/templates/assets/js/plugins/chartist.min.js"></script>
<!-- Library for adding dinamically elements -->
<script src="include/templates/assets/js/plugins/arrive.min.js" type="text/javascript"></script>
<!--  Notifications Plugin, full documentation here: http://bootstrap-notify.remabledesigns.com/    -->
<script src="include/templates/assets/js/plugins/bootstrap-notify.js"></script>
<!-- Material Dashboard Core initialisations of plugins and Bootstrap Material Design Library -->
<script src="include/templates/assets/js/material-dashboard.js?v=2.0.0"></script>
<!-- demo init -->
<script src="include/templates/assets/js/plugins/demo.js"></script>
<script type="text/javascript">
    $(document).ready(function() {

        //init wizard

        // demo.initMaterialWizard();

        // Javascript method's body can be found in assets/js/demos.js
        demo.initDashboardPageCharts();

        demo.initCharts();

    });
</script>

</html>
