<!DOCTYPE html>
<html>
	<head>
	<title>Lanceng - Responsive Admin Template</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="description" content="">
	<meta name="keywords" content="admin, bootstrap,admin template, bootstrap admin, simple, awesome">
	<meta name="author" content="">

	<!-- BOOTSTRAP -->
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    
    <!-- LANCENG CSS -->
    {{ HTML::style('css/style.css'); }}
    {{ HTML::style('css/style-responsive.css'); }}

    <!-- VENDOR -->
    {{ HTML::style('css/animate.css'); }}

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" />
    {{ HTML::style('third/weather-icon/css/weather-icons.min.css'); }}
    {{ HTML::style('third/morris/morris.css'); }}
    {{ HTML::style('third/nifty-modal/css/component.css'); }}
    {{ HTML::style('third/sortable/sortable-theme-bootstrap.css'); }}
    {{ HTML::style('third/icheck/skins/minimal/grey.css'); }}
    {{ HTML::style('third/select/bootstrap-select.min.css'); }}
    {{ HTML::style('third/summernote/summernote.css'); }}
    {{ HTML::style('third/magnific-popup/magnific-popup.css'); }}
    {{ HTML::style('third/datepicker/css/datepicker.css'); }}


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
	<![endif]-->
	
	<!-- FAVICON -->
	<link rel="shortcut icon" href="assets/img/favicon.ico">
	</head>
	
	
	
	<!-- BODY -->
	<body class="tooltips">
	
	<!-- BEGIN PAGE -->
	<div class="container">
			
		<!-- Your logo goes here -->
		<div class="logo-brand header sidebar rows">
			<div class="logo">
				<h1><a href="#fakelink"><img src="assets/img/logo.png" alt="Logo"> LANCENG ADMIN</a></h1>
			</div>
		</div><!-- End div .header .sidebar .rows -->
	
		<!-- BEGIN SIDEBAR -->
		<div class="left side-menu">
			
			
            <div class="body rows scroll-y">
				
				<!-- Scrolling sidebar -->
                <div class="sidebar-inner slimscroller">
				
					<!-- User Session -->
					<div class="media">
						<a class="pull-left" href="#fakelink">
							<img class="media-object img-circle" src="assets/img/avatar/masarie.jpg" alt="Avatar">
						</a>
						<div class="media-body">
							Welcome back,
							<h4 class="media-heading"><strong>Mas Bro</strong></h4>
							<a href="user-profile.html">Edit</a>
							<a class="md-trigger" data-modal="logout-modal-alt">Logout</a>
						</div><!-- End div .media-body -->
					</div><!-- End div .media -->
					
					
					<!-- Search form -->
					<div id="search">
						<form role="form">
							<input type="text" class="form-control search" placeholder="Search here...">
							<i class="fa fa-search"></i>
						</form>
					</div><!-- End div #search -->
					
				
					<!-- Sidebar menu -->				
					<div id="sidebar-menu">
						<ul>
							<li><a href="index.html"><i class="fa fa-home"></i> Dashboard</a></li>
							<li><a href="./gestionProfesores"><i class="fa fa-home"></i> Gestion Profesores</a></li>
							<li><a href="#fakelink"><i class="fa fa-leaf"></i> Frontend <span class="label label-danger new-circle">COMING SOON</span></a></li>
							<li><a href="#fakelink"><i class="fa fa-bug"></i><i class="fa fa-angle-double-down i-right"></i> Elements</a>
								<ul>
									<li><a href="element-primary.html"><i class="fa fa-angle-right"></i> Primary <span class="label label-success new-circle">UPDATED</span></a></li>
									<li><a href="element-extended.html"><i class="fa fa-angle-right"></i> Extended</a></li>
								</ul>
							</li>
							<li><a href="#fakelink"><i class="fa fa-code"></i><i class="fa fa-angle-double-down i-right"></i> Widgets</a>
								<ul>
									<li><a href="widget-awesome.html"><i class="fa fa-angle-right"></i> Awesome <span class="label label-danger new-circle">+5 new</span></a></li>
									<li><a href="widget-grid.html"><i class="fa fa-angle-right"></i> Grid</a></li>
								</ul>
							</li>
							<li><a href="#fakelink"><i class="fa fa-edit"></i><i class="fa fa-angle-double-down i-right"></i> Forms</a>
								<ul>
									<li><a href="form-element.html"><i class="fa fa-angle-right"></i> Form Element</a></li>
									<li><a href="form-wizard.html"><i class="fa fa-angle-right"></i> Form Wizard</a></li>
									<li><a href="form-validation.html"><i class="fa fa-angle-right"></i> Form Validation</a></li>
								</ul>
							</li>
							<li><a href="tables.html"><i class="fa fa-table"></i> Tables</a></li>
							<li><a href="gallery.html"><i class="fa fa-picture-o"></i><i class="fa fa-star i-right yellow"></i> Gallery</a></li>
							<li><a href="morris.html"><i class="fa fa-bar-chart-o"></i> Graph / Chart</a></li>
							<li><a href="#fakelink"><i class="fa fa-home"></i><i class="fa fa-angle-double-down i-right"></i> Pages <span class="label label-success new-circle animated double shake span-left">13</span></a>
								<ul>
									<li><a href="login.html"><i class="fa fa-angle-right"></i> Login</a></li>
									<li><a href="lock-screen.html"><i class="fa fa-angle-right"></i> Lock Screen</a></li>
									<li><a href="forgot-password.html"><i class="fa fa-angle-right"></i> Forgot Password</a></li>
									<li><a href="register.html"><i class="fa fa-angle-right"></i> Register</a></li>
									<li><a href="user-profile.html"><i class="fa fa-angle-right"></i> User Profile</a></li>
									<li><a href="user-profile-2.html"><i class="fa fa-angle-right"></i> User Profile 2 <span class="label label-danger new-circle">NEW</span></a></li>
									<li><a href="empty-data.html"><i class="fa fa-angle-right"></i> Empty Data <span class="label label-danger new-circle">NEW</span></a></li>
									<li><a href="invoice.html"><i class="fa fa-angle-right"></i> Invoice</a></li>
									<li><a href="pricing-table.html"><i class="fa fa-angle-right"></i> Pricing Table <span class="label label-success new-circle">UPDATED</span></a></li>
									<li><a href="faq.html"><i class="fa fa-angle-right"></i> FAQ</a></li>
									<li><a href="search-result.html"><i class="fa fa-angle-right"></i> Search Result <span class="label label-success new-circle">UPDATED</span></a></li>
									<li><a href="404.html"><i class="fa fa-angle-right"></i> 404</a></li>
									<li><a href="blank.html"><i class="fa fa-angle-right"></i> Blank</a></li>
								</ul>
							</li>
							<li><a href="#fakelink"><i class="fa fa-smile-o"></i><i class="fa fa-angle-double-down i-right"></i> Icons</a>
								<ul>
									<li><a href="font-awesome.html"><i class="fa fa-angle-right"></i> Font Awesome</a></li>
									<li><a href="glyphicons.html"><i class="fa fa-angle-right"></i> Glyphicons</a></li>
									<li><a href="weather-icons.html"><i class="fa fa-angle-right"></i> Weather icons <span class="label label-danger new-circle">NEW</span></a></li>
								</ul>
							</li>
							<li><a href="#fakelink"><i class="fa fa-envelope"></i><i class="fa fa-angle-double-down i-right"></i> Message  <span class="label label-success new-circle span-left">UPDATED</span></a>
								<ul>
									<li><a href="inbox.html"><i class="fa fa-angle-right"></i> Inbox</a></li>
									<li><a href="new-message.html"><i class="fa fa-angle-right"></i> New Message</a></li>
									<li><a href="reply-message.html"><i class="fa fa-angle-right"></i> Reply Message <span class="label label-danger new-circle">NEW</span></a></li>
									<li><a href="read-message.html"><i class="fa fa-angle-right"></i> Read Message</a></li>
								</ul>
							</li>
						</ul>
						<div class="clear"></div>
					</div><!-- End div #sidebar-menu -->
				</div><!-- End div .sidebar-inner .slimscroller -->
            </div><!-- End div .body .rows .scroll-y -->
			
			<!-- Sidebar footer -->
            <div class="footer rows animated fadeInUpBig">
				<div class="progress progress-xs progress-striped active">
				  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
					<span class="progress-precentage">80&#37;</span>
				  </div><!-- End div .pogress-bar -->
				  <a data-toggle="tooltip" title="See task progress" class="btn btn-default md-trigger" data-modal="task-progress"><i class="fa fa-inbox"></i></a>
				</div><!-- End div .progress .progress-xs -->
            </div><!-- End div .footer .rows -->
        </div>
		<!-- END SIDEBAR -->
		
		
		
		<!-- BEGIN CONTENT -->
        <div class="right content-page">
		
			<!-- BEGIN CONTENT HEADER -->
            <div class="header content rows-content-header">
			
				<!-- Button mobile view to collapse sidebar menu -->
				<button class="button-menu-mobile show-sidebar">
					<i class="fa fa-bars"></i>
				</button>
				
				<!-- BEGIN NAVBAR CONTENT-->				
				<div class="navbar navbar-default" role="navigation">
					<div class="container">
						<!-- Navbar header -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<i class="fa fa-angle-double-down"></i>
							</button>
						</div><!-- End div .navbar-header -->
						
						<!-- Navbar collapse -->	
						<div class="navbar-collapse collapse">
						
							<!-- Left navbar -->
							<ul class="nav navbar-nav">
								<li>
									<a href="#fakelink">
										<i class="fa fa-cog"></i>
									</a>
								</li>
								
								<!-- Dropdown language -->
								<li class="dropdown">
									<a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">English (US) <i class="fa fa-chevron-down i-xs"></i></a>
									<ul class="dropdown-menu animated half flipInX">
										<li><a href="#fakelink">English (British)</a></li>
										<li><a href="#fakelink">Bahasa Indonesia</a></li>
										<li><a href="#fakelink">French</a></li>
									</ul>
								</li>
							</ul>
						
							<!-- Right navbar -->
							<ul class="nav navbar-nav navbar-right top-navbar">
								
								<!-- Dropdown notifications -->
								<li class="dropdown">
									<a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-bell"></i><span class="label label-danger absolute">24</span></a>
									<ul class="dropdown-menu dropdown-message animated half flipInX">
										<!-- Dropdown notification header -->
										<li class="dropdown-header notif-header">New Notifications</li>
										<li class="divider"></li>
										
										<!-- Dropdown notification body -->
										<li class="unread">
											<a href="#fakelink">
											<p><strong>John Doe</strong> Uploaded a photo <strong>&#34;DSC000254.jpg&#34;</strong>
											<br /><i>2 minutes ago</i></p>
											</a>
										</li>
										<li class="unread">
											<a href="#fakelink">
											<p><strong>John Doe</strong> Created an photo album  <strong>&#34;Indonesia Tourism&#34;</strong>
											<br /><i>8 minutes ago</i></p>
											</a>
										</li>
										<li>
											<a href="#fakelink">
											<p><strong>Annisa</strong> Posted an article  <strong>&#34;Yogyakarta never ending Asia&#34;</strong>
											<br /><i>an hour ago</i></p>
											</a>
										</li>
										<li>
											<a href="#fakelink">
											<p><strong>Ari Rusmanto</strong> Added 3 products
											<br /><i>3 hours ago</i></p>
											</a>
										</li>
										<li>
											<a href="#fakelink">
											<p><strong>Hana Sartika</strong> Send you a message  <strong>&#34;Lorem ipsum dolor...&#34;</strong>
											<br /><i>12 hours ago</i></p>
											</a>
										</li>
										<li>
											<a href="#fakelink">
											<p><strong>Johnny Depp</strong> Updated his avatar
											<br /><i>Yesterday</i></p>
											</a>
										</li>
										
										<!-- Dropdown notification footer -->
										<li class="dropdown-footer"><a href="#fakelink"><i class="fa fa-refresh"></i> Refresh</a></li>
									</ul>
								</li>
								<!-- End Dropdown notifications -->
							
								
								<!-- Dropdown Messages -->
								<li class="dropdown">
									<a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i><span class="label label-danger absolute">24</span></a>
									<ul class="dropdown-menu dropdown-message animated half flipInX">
										<!-- Dropdown Messages header -->
										<li class="dropdown-header notif-header">New Messages</li>
										
										<!-- Dropdown messages body -->
										<li class="divider"></li>
										<li class="unread">
											<a href="#fakelink">
											<img src="assets/img/avatar/2.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
											<strong>John Doe</strong><br />
											<p>Duis autem vel eum iriure dolor in hendrerit ...</p>
											<p><i>5 minutes ago</i></p>
											</a>
										</li>
										<li class="unread">
											<a href="#fakelink">
											<img src="assets/img/avatar/1.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
											<strong>Annisa Rusmanovski</strong><br />
											<p>Duis autem vel eum iriure dolor in hendrerit ...</p>
											<p><i>2 hours ago</i></p>
											</a>
										</li>
										<li>
											<a href="#fakelink">
											<img src="assets/img/avatar/3.jpg" class="xs-avatar ava-dropdown" alt="Avatar">
											<strong>Ari Rusmanto</strong><br />
											<p>Duis autem vel eum iriure dolor in hendrerit ...</p>
											<p><i>5 hours ago</i></p>
											</a>
										</li>
										
										<!-- Dropdown messages footer -->
										<li class="dropdown-footer"><a href="#fakelink"><i class="fa fa-share"></i> See all messages</a></li>
									</ul>
								</li>
								<!-- End Dropdown messages -->
							
								<!-- Dropdown User session -->
								<li class="dropdown">
									<a href="#fakelink" class="dropdown-toggle" data-toggle="dropdown">Howdy, <strong>Mas Bro</strong> <i class="fa fa-chevron-down i-xs"></i></a>
									<ul class="dropdown-menu animated half flipInX">
										<li><a href="#fakelink">My Profile</a></li>
										<li><a href="#fakelink">Change Password</a></li>
										<li><a href="#fakelink">Account Setting</a></li>
										<li class="divider"></li>
										<li class="dropdown-header">Another action</li>
										<li><a href="#fakelink">Help</a></li>
										<li><a href="lock-screen.html">Lock me</a></li>
										<li><a class="md-trigger" data-modal="logout-modal">Logout</a></li>
									</ul>
								</li>
								<!-- End Dropdown User session -->
							</ul>
						</div><!-- End div .navbar-collapse -->
					</div><!-- End div .container -->
				</div>
				<!-- END NAVBAR CONTENT-->
            </div>
			<!-- END CONTENT HEADER -->
			
			
			
			
			<!-- ============================================================== -->
			<!-- START YOUR CONTENT HERE -->
			<!-- ============================================================== -->
            <div class="body content rows scroll-y">
				
				<!-- Page header -->
				<div class="page-heading">
					<h1>Dashboard <small>your first page</small></h1>
				</div>
				<!-- End page header -->
				
				
				<!-- Begin info box -->
				<div class="row">
					
					<!-- Visitor Info Box -->
					<div class="col-sm-3 col-xs-6">
						<!-- Box info -->
						<div class="box-info">
							<!-- Icon box -->
							<div class="icon-box">
								<span class="fa-stack">
								  <i class="fa fa-circle fa-stack-2x success"></i>
								  <i class="fa fa-flag fa-stack-1x fa-inverse"></i>
								</span>
							</div><!-- End div .icon-box -->
							<!-- Text box -->
							<div class="text-box">
								<h3>2,354</h3>
								<p>VISITORS</p>
							</div><!-- End div .text-box -->
							<div class="clear"></div>
							<!-- Progress bar -->
							<div class="progress progress-xs">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
								<span class="sr-only">80&#37; Complete</span>
							  </div>
							</div><!-- End div .progress .progress-xs -->
							<p class="text-center">15&#37; Higher than Yesterday</p>
						</div><!-- End div .info-box -->
					</div>
					<!-- End Visitor Info Box -->
					
					
					<!-- Orders Info Box -->
					<div class="col-sm-3 col-xs-6">
						<!-- Box info -->
						<div class="box-info">
							<!-- Icon box -->
							<div class="icon-box">
								<span class="fa-stack">
								  <i class="fa fa-circle fa-stack-2x danger"></i>
								  <i class="fa fa-bell fa-stack-1x fa-inverse"></i>
								</span>
							</div><!-- End div .icon-box -->
							<!-- Text box -->
							<div class="text-box">
								<h3>1,234</h3>
								<p>ORDERS</p>
							</div><!-- End div .text-box -->
							<div class="clear"></div>
							<!-- Progress bar -->
							<div class="progress progress-xs">
							  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
								<span class="sr-only">65&#37; Complete</span>
							  </div>
							</div><!-- End div .progress .progress-xs -->
							<p class="text-center">5&#37; Higher than Yesterday</p>
						</div><!-- End div .info-box -->
					</div>
					<!-- End Orders Info Box -->
					
					
					<!-- Downloads Info Box -->
					<div class="col-sm-3 col-xs-6">
						<!-- Box info -->
						<div class="box-info">
							<!-- Icon box -->
							<div class="icon-box">
								<span class="fa-stack">
								  <i class="fa fa-circle fa-stack-2x info"></i>
								  <i class="fa fa-cloud-download fa-stack-1x fa-inverse"></i>
								</span>
							</div><!-- End div .icon-box -->
							<!-- Text box -->
							<div class="text-box">
								<h3>5,214</h3>
								<p>DOWNLOADS</p>
							</div><!-- End div .text-box -->
							<div class="clear"></div>
							<!-- Progress bar -->
							<div class="progress progress-xs">
							  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
								<span class="sr-only">95&#37; Complete</span>
							  </div>
							</div><!-- End div .progress .progress-xs -->
							<p class="text-center">12&#37; Higher than Yesterday</p>
						</div><!-- End div .info-box -->
					</div>
					<!-- End Downloads Info Box -->
					
					
					<!-- Shipping Info Box -->
					<div class="col-sm-3 col-xs-6">
						<!-- Box info -->
						<div class="box-info">
							<!-- Icon box -->
							<div class="icon-box">
								<span class="fa-stack">
								  <i class="fa fa-circle fa-stack-2x warning"></i>
								  <i class="fa fa-truck fa-stack-1x fa-inverse"></i>
								</span>
							</div><!-- End div .icon-box -->
							<!-- Text box -->
							<div class="text-box">
								<h3>572</h3>
								<p>SHIPPING</p>
							</div><!-- End div .text-box -->
							<div class="clear"></div>
							<!-- Progress bar -->
							<div class="progress progress-xs">
							  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
								<span class="sr-only">55&#37; Complete</span>
							  </div>
							</div><!-- End div .progress .progress-xs -->
							<p class="text-center">3&#37; Higher than Yesterday</p>
						</div><!-- End div .info-box -->
					</div>
					<!-- End Shipping Info Box -->
					
				</div>
				<!-- End of info box -->
				
				
				<div class="row">
					<div class="col-sm-8">
						<!-- Website statistic -->
						<div class="box-info">
							<h2><strong>Website</strong> Statistic</h2>
							
							<!-- Additional buttons -->
							<div class="additional-btn">
								<a class="additional-icon" href="#fakelink"><i class="fa fa-refresh fa-spin"></i></a>
								  <a class="additional-icon" id="dropdownMenu1" data-toggle="dropdown">
									<i class="fa fa-cog"></i>
								  </a>
								  <ul class="dropdown-menu pull-right animated half fadeInDown" role="menu" aria-labelledby="dropdownMenu1">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Action</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Another action</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Something else here</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Separated link</a></li>
								  </ul>
								<a class="additional-icon" href="#fakelink" data-toggle="collapse" data-target="#website-statistic"><i class="fa fa-chevron-down"></i></a>
								<a class="additional-icon" href="#fakelink"><i class="fa fa-question-circle"></i></a>
							</div><!-- End div .additional-button -->
							<!-- Statistic inner -->
							<div id="website-statistic" class="statistic-chart collapse in">
								<!-- Button group -->
								<div class="btn-group btn-group-xs pull-right">
									<button class="btn btn-default">All time</button>
									<button class="btn btn-default">This year</button>
									<button class="btn btn-default">This month</button>
									<button class="btn btn-default">Today</button>
								</div><!-- End div .btn-group -->
								
								<!-- Call morris cart with selector #morris-home -->
								<div id="morris-home" style="height: 200px;"></div>
								<!-- End morris cart with selector -->
							</div><!-- End div #website-statistic -->
						</div><!-- End div .box-info -->
					</div>
					
					<div class="col-sm-4">
						<!-- Begin user profile -->
						<div class="box-info text-center user-profile-2">
							<div class="header-cover">
								<img src="images/user-bg.jpg" alt="User cover">
							</div>
							<div class="user-profile-inner">
								<h4 class="white">Howdy, Mas Bro</h4>
								<img src="assets/img/avatar/masarie.jpg" class="img-circle profile-avatar" alt="User avatar">
								<h5>Administrator</h5>
									
								<!-- User button -->
								<div class="user-button">
									<div class="row">
										<div class="col-md-6">
											<button type="button" class="btn btn-primary btn-sm btn-block"><i class="fa fa-envelope"></i> Send Message</button>
										</div>
										<div class="col-md-6">
											<button type="button" class="btn btn-default btn-sm btn-block"><i class="fa fa-user"></i> Add as friend</button>
										</div>
									</div>
								</div><!-- End div .user-button -->
							</div><!-- End div .user-profile-inner -->
						</div><!-- End div .box-info -->
						<!-- End user profile -->
					</div><!-- End div .col-sm-4 -->
				</div><!-- End div .row -->
				
				
				<div class="row">
					<div class="col-md-6">
						<!-- Weather widget -->
						<div class="box-info full weather-widget">
							<img src="images/weather-bg.jpg" class="img-responsive" alt="Weather city">
							<div class="overlay-weather-info">
								<h4>WEATHER WIDGET</h4>
								<div class="weather-info-city">
									<h4><i class="fa fa-map-marker"></i> YOGYAKARTA, INDONESIA</h4>
									<div class="row">
										<div class="col-xs-3">
											<i class="wi-day-sprinkle weather-icon"></i>
										</div>
										<div class="col-xs-9">
											<h5>Sprinkle day</h5>
											<h1>32<sup>&#176;</sup>C</h1>
										</div>
									</div><!-- End div .row -->
								</div><!-- End div .weather-info-city -->
							</div><!-- End div .overlay-weather-info -->
						</div><!-- End div .box-info -->
						<!-- End weather widget -->
						
						
						
						
						<!-- Begin Bar cart by country -->
						<div class="box-info success">
							<!-- Additional button -->
							<div class="additional-btn">
								<a class="additional-icon" href="#fakelink"><i class="fa fa-refresh fa-spin"></i></a>
								  <a class="additional-icon" id="dropdownMenu3" data-toggle="dropdown">
									<i class="fa fa-cog"></i>
								  </a>
								  <ul class="dropdown-menu pull-right animated half fadeInDown" role="menu" aria-labelledby="dropdownMenu3">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Action</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Another action</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Something else here</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Separated link</a></li>
								  </ul>
								<a class="additional-icon" href="#fakelink"><i class="fa fa-question-circle"></i></a>
							</div><!-- end div .additional-btn -->
							
							<!-- Call morris bar with selector #morris-bar-home -->
							<div id="morris-bar-home" style="height: 168px;"></div>
							<!-- End morris bar selector -->
							
							<!-- Additional info -->
							<div class="additional">
								<div class="list-box-info">
									<ul>
									  <li>
										<span class="label label-success">952</span>
										INDONESIA
									  </li>
									  <li>
										<span class="label label-danger">955</span>
										MALAYSIA
									  </li>
									  <li>
										<span class="label label-warning">985</span>
										INDIA
									  </li>
									</ul>
								</div>
							</div><!-- End div .additional -->
						</div><!-- End div .box-info -->
						<!-- End Bar cart by country -->
					</div><!-- End div .col-sm-6 -->
					
					<div class="col-md-6">
					<!-- Begin timeline -->
						<h4>Timeline</h4>
						<div class="the-timeline">
							<ul>
								<li>
									<div class="the-date">
										<span>01</span>
										<small>Feb</small>
									</div>
									<h4>Lorem ipsum dolor!</h4>
									<p>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
									</p>
								</li>
								<li>
									<div class="the-date">
										<span>31</span>
										<small>Jan</small>
									</div>
									<h4>Yohoo! you can put video here</h4>
									<div class="videoWrapper">
									<iframe src="//player.vimeo.com/video/85847275?title=0&amp;byline=0&amp;portrait=0"></iframe>
									</div>
									<p>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
									</p>
								</li>
								<li>
									<div class="the-date">
										<span>20</span>
										<small>Des</small>
									</div>
									<p>
									Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
									</p>
								</li>
							</ul>
						</div><!-- End div .the-timeline -->
						<!-- End timeline -->
					</div><!-- End div .col-sm-6 -->
				</div><!-- End div .row -->
				
				
				
				<div class="row">
					<div class="col-md-8">
						<!-- Sales report -->
						<div class="box-info full">
							<h2><strong>Sales</strong> Report</h2>
							
							<!-- Additional buttons -->
							<div class="additional-btn">
								<a class="additional-icon" href="#fakelink"><i class="fa fa-refresh"></i></a>
								  <a class="additional-icon" id="dropdownMenu2" data-toggle="dropdown">
									<i class="fa fa-cog"></i>
								  </a>
								  <ul class="dropdown-menu pull-right animated half fadeInDown" role="menu" aria-labelledby="dropdownMenu2">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Action</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Another action</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Something else here</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Separated link</a></li>
								  </ul>
								<a class="additional-icon" href="#fakelink" data-toggle="collapse" data-target="#sales-report"><i class="fa fa-chevron-down"></i></a>
								<a class="additional-icon" href="#fakelink"><i class="fa fa-question-circle"></i></a>
							</div><!-- End div .additional-button -->
							
							<!-- Sales report collapse body -->
							<div id="sales-report" class="collapse in">
								<div class="table-responsive">
								<table data-sortable class="table table-striped">
									<thead>
										<tr><th>No</th><th data-sortable="false"><input type="checkbox" id="select-all-rows"></th><th>Order ID</th><th>Buyer</th><th>Status</th><th>Location</th><th>Total</th></tr>
									</thead>
									<tbody>
										<tr><td>1</td><td><input type="checkbox" class="rows-check"></td><td>#0021</td><td><a href="#fakelink">John Doe</a></td><td><span class="label label-primary">Order</span></td><td>Yogyakarta, ID</td><td><strong class="text-primary">&#36; 1,245</strong></td></tr>
										<tr><td>2</td><td><input type="checkbox" class="rows-check"></td><td>#0022</td><td><a href="#fakelink">Johnny Depp</a></td><td><span class="label label-success">Payment</span></td><td>London, UK</td><td><strong class="text-success">&#36; 1,245</strong></td></tr>
										<tr><td>3</td><td><input type="checkbox" class="rows-check"></td><td>#0023</td><td><a href="#fakelink">Annisa Rusmanovski</a></td><td><span class="label label-success">Payment</span></td><td>Canbera, AU</td><td><strong class="text-success">&#36; 1,245</strong></td></tr>
										<tr><td>4</td><td><input type="checkbox" class="rows-check"></td><td>#0024</td><td><a href="#fakelink">Hana Sartika</a></td><td><span class="label label-danger">Cancel</span></td><td>Bali, ID</td><td><strong class="text-danger">&#36; 1,245</strong></td></tr>
										<tr><td>5</td><td><input type="checkbox" class="rows-check"></td><td>#0025</td><td><a href="#fakelink">Ari Rusmanto</a></td><td><span class="label label-primary">Order</span></td><td>Bandung, ID</td><td><strong class="text-primary">&#36; 1,245</strong></td></tr>
										<tr><td>6</td><td><input type="checkbox" class="rows-check"></td><td>#0026</td><td><a href="#fakelink">Willy Wonka</a></td><td><span class="label label-danger">Cancel</span></td><td>Semarang, ID</td><td><strong class="text-danger">&#36; 1,245</strong></td></tr>
										<tr><td>7</td><td><input type="checkbox" class="rows-check"></td><td>#0027</td><td><a href="#fakelink">Mohammed Sujiono</a></td><td><span class="label label-warning">Waiting</span></td><td>New York, US</td><td><strong class="text-warning">&#36; 1,245</strong></td></tr>
										<tr><td>8</td><td><input type="checkbox" class="rows-check"></td><td>#0028</td><td><a href="#fakelink">Jenny Doe</a></td><td><span class="label label-primary">Order</span></td><td>Boston, US</td><td><strong class="text-primary">&#36; 1,245</strong></td></tr>
									</tbody>
								</table>
								</div>
							</div><!-- End div #sales-report -->
						</div>
						<!-- End sales report -->
						
						
						<div class="row">
							<div class="col-sm-6">
								<!-- Begin tab comment and popular posts -->
								<div class="box-info full">
									<!-- Tab comments and popular posts -->
									<ul class="nav nav-tabs nav-justified">
									  <li class="active"><a href="#comments" data-toggle="tab"><i class="fa fa-comments"></i> New Comments</a></li>
									  <li><a href="#popular" data-toggle="tab"><i class="fa fa-star"></i> Popular Posts</a></li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
									  <!-- Pane comments -->
									  <div class="tab-pane active animated fadeInRight" id="comments">
										<!-- Begin scroll wrappper -->
										<div class="scroll-widget">
											<ul class="media-list">
											  <li class="media">
												<a class="pull-left" href="#fakelink">
												  <img class="media-object" src="assets/img/avatar/2.jpg" alt="Avatar">
												</a>
												<div class="media-body">
												  <h4 class="media-heading"><a href="#fakelink">John Doe</a> <small>Just now</small></h4>
												  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
												</div>
											  </li>
											  <li class="media">
												<a class="pull-left" href="#fakelink">
												  <img class="media-object" src="assets/img/avatar/1.jpg" alt="Avatar">
												</a>
												<div class="media-body">
												  <h4 class="media-heading"><a href="#fakelink">Annisa</a> <small>Yesterday at 04:00 AM</small></h4>
												  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus</p>
												</div>
											  </li>
											  <li class="media">
												<a class="pull-left" href="#fakelink">
												  <img class="media-object" src="assets/img/avatar/5.jpg" alt="Avatar">
												</a>
												<div class="media-body">
												  <h4 class="media-heading"><a href="#fakelink">Rusmanovski</a> <small>January 17, 2014 05:35 PM</small></h4>
												  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
												</div>
											  </li>
											  <li class="media">
												<a class="pull-left" href="#fakelink">
												  <img class="media-object" src="assets/img/avatar/4.jpg" alt="Avatar">
												</a>
												<div class="media-body">
												  <h4 class="media-heading"><a href="#fakelink">Ari Rusmanto</a> <small>January 17, 2014 05:35 PM</small></h4>
												  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
												</div>
											  </li>
											  <li class="media">
												<a class="pull-left" href="#fakelink">
												  <img class="media-object" src="assets/img/avatar/3.jpg" alt="Avatar">
												</a>
												<div class="media-body">
												  <h4 class="media-heading"><a href="#fakelink">Jenny Doe</a> <small>January 17, 2014 05:35 PM</small></h4>
												  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit</p>
												</div>
											  </li>
											</ul>
										</div><!-- End div .scroll-widget -->
										<div class="box-footer">
										<p><a href="#fakelink"><i class="fa fa-share"></i> See all comments</a></p>
										</div>
									  </div><!-- End div .tab-pane -->
									  
									  <!-- Pane popular posts -->
									  <div class="tab-pane animated fadeInRight" id="popular">
										<!-- Begin scroll wrappper -->
										<div class="scroll-widget">
											<ul class="media-list">
											  <li class="media">
												<div class="media-body">
												  <h4 class="media-heading"><a href="#fakelink">Cras sit amet erat sit amet lacus egestas</a>
												  <br /><small>January 17, 2014 at 11:24 PM</small></h4>
												  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
												</div>
											  </li>
											  <li class="media">
												<div class="media-body">
												  <h4 class="media-heading"><a href="#fakelink">Cras sit amet erat sit amet lacus egestas</a>
												  <br /><small>January 17, 2014 at 08:24 AM</small></h4>
												  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
												</div>
											  </li>
											  <li class="media">
												<div class="media-body">
												  <h4 class="media-heading"><a href="#fakelink">Cras sit amet erat sit amet lacus egestas</a>
												  <br /><small>January 17, 2014 at 05:24 AM</small></h4>
												  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
												</div>
											  </li>
											  <li class="media">
												<div class="media-body">
												  <h4 class="media-heading"><a href="#fakelink">Cras sit amet erat sit amet lacus egestas</a>
												  <br /><small>January 17, 2014 at 11:24 PM</small></h4>
												  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
												</div>
											  </li>
											  <li class="media">
												<div class="media-body">
												  <h4 class="media-heading"><a href="#fakelink">Cras sit amet erat sit amet lacus egestas</a>
												  <br /><small>January 17, 2014 at 08:24 AM</small></h4>
												  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
												</div>
											  </li>
											  <li class="media">
												<div class="media-body">
												  <h4 class="media-heading"><a href="#fakelink">Cras sit amet erat sit amet lacus egestas</a>
												  <br /><small>January 17, 2014 at 05:24 AM</small></h4>
												  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit...</p>
												</div>
											  </li>
											</ul>
										</div><!-- End div .scroll-widget -->
										<div class="box-footer">
											  <p><a href="#fakelink"><i class="fa fa-share"></i> See all posts</a></p>
										</div>
									  </div><!-- End div .tab-pane -->
									</div><!-- End div .tab-content -->
								</div><!-- End div .box-info .full -->
								<!-- End tab comment and popular posts -->
							</div><!-- End div .col-sm-6 -->
							
							
							<div class="col-sm-6">
								<!-- Project progress -->
								<div class="box-info">
									<h2><strong>Project</strong> Progress</h2>
									<p>PROJECT FOR COMPANY A <strong>80%</strong></p>
									<div class="progress progress-sm">
									  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
										<span class="sr-only">80&#37; Complete</span>
									  </div>
									</div>
									<p>BACKUP FROM SERVER  <strong>80%</strong></p>
									<div class="progress progress-sm">
									  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
										<span class="sr-only">55&#37; Complete</span>
									  </div>
									</div>
									<p>ENTRY DATA FOR MASTER SYSTEM <strong>25%</strong></p>
									<div class="progress progress-sm">
									  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%">
										<span class="sr-only">25&#37; Complete</span>
									  </div>
									</div>
									<p>MAKE SALES REPORT <strong>55%</strong></p>
									<div class="progress progress-sm">
									  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="55" aria-valuemin="0" aria-valuemax="100" style="width: 55%">
										<span class="sr-only">55&#37; Complete</span>
									  </div>
									</div>
									<p>PROJECT FOR COMPANY ABC <strong>90%</strong></p>
									<div class="progress progress-sm">
									  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%">
										<span class="sr-only">90&#37; Complete</span>
									  </div>
									</div>
								</div><!-- End div .box-info -->
							</div><!-- End div .col-sm-6 -->
						</div><!-- End div .row -->
					</div><!-- End div .col-md-8 -->
					
					
					<div class="col-md-4">
						<!-- Chat widget -->
						<div class="box-info">
							<h2><strong>Chat</strong> Widget</h2>
							<!-- Additional button -->
							<div class="additional-btn">
								<a class="additional-icon" href="#fakelink"><i class="fa fa-refresh"></i></a>
								  <a class="additional-icon" id="dropdownMenu4" data-toggle="dropdown">
									<i class="fa fa-cog"></i>
								  </a>
								  <ul class="dropdown-menu pull-right animated half fadeInDown" role="menu" aria-labelledby="dropdownMenu4">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Action</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Another action</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Something else here</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Separated link</a></li>
								  </ul>
								<a class="additional-icon" href="#fakelink"><i class="fa fa-question-circle"></i></a>
							</div><!-- ENd div .addirional-btn -->
							<!-- Chat widget inner -->
							<div class="chat-widget">
								<ul class="media-list">
								  <li class="media">
									<a class="pull-left" href="#fakelink">
									  <img class="media-object img-circle" src="assets/img/avatar/1.jpg" alt="Avatar">
									</a>
									<div class="media-body warning">
									  Hello, liquam ultricies malesuada feugiat?
									  <p class="time">Just Now</p>
									</div>
								  </li>
								  <li class="media">
									<a class="pull-right" href="#fakelink">
									  <img class="media-object img-circle" src="assets/img/avatar/5.jpg" alt="Avatar">
									</a>
									<div class="media-body">
									  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus
									  <p class="time">A minute ago</p>
									</div>
								  </li>
								  <li class="media">
									<a class="pull-left" href="#fakelink">
									  <img class="media-object img-circle" src="assets/img/avatar/2.jpg" alt="Avatar">
									</a>
									<div class="media-body danger">
									 Cras sit amet erat sit amet lacus egestas placerat?
									  <p class="time">23 minutes ago</p>
									</div>
								  </li>
								  <li class="media">
									<a class="pull-right" href="#fakelink">
									  <img class="media-object img-circle" src="assets/img/avatar/5.jpg" alt="Avatar">
									</a>
									<div class="media-body">
									  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus
									  <p class="time">2 hours ago</p>
									</div>
								  </li>
								  <li class="media">
									<a class="pull-left" href="#fakelink">
									  <img class="media-object img-circle" src="assets/img/avatar/3.jpg" alt="Avatar">
									</a>
									<div class="media-body success">
									  Hello, liquam ultricies malesuada feugiat?
									  <p class="time">5 hours ago</p>
									</div>
								  </li>
								  <li class="media">
									<a class="pull-right" href="#fakelink">
									  <img class="media-object img-circle" src="assets/img/avatar/5.jpg" alt="Avatar">
									</a>
									<div class="media-body">
									  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus
									  <p class="time">Yesterday at 01:45 PM</p>
									</div>
								  </li>
								  <li class="media">
									<a class="pull-left" href="#fakelink">
									  <img class="media-object img-circle" src="assets/img/avatar/4.jpg" alt="Avatar">
									</a>
									<div class="media-body info">
									  Hello, liquam ultricies malesuada feugiat?
									  <p class="time">2 days ago at 05:45 PM</p>
									</div>
								  </li>
								  <li class="media">
									<a class="pull-right" href="#fakelink">
									  <img class="media-object img-circle" src="assets/img/avatar/5.jpg" alt="Avatar">
									</a>
									<div class="media-body">
									  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam rhoncus
									  <p class="time">January 17, 2014 at 08:22 AM</p>
									</div>
								  </li>
								</ul>
							</div><!-- End div .chat-widget -->
							  <!-- Form chat --> 	  
							  <form role="form" class="input-chat">
								<input type="text" class="form-control input-lg" placeholder="Type and press Enter...">
							  </form>
							  <!-- End form chat -->
						</div>
						<!-- End chat widget -->
						
						
						<!-- Quick post widget -->
						<div class="box-info">
							<h2><strong>Quick</strong> Post</h2>
							<!-- Additional button -->
							<div class="additional-btn">
								<a class="additional-icon" href="#fakelink"><i class="fa fa-refresh"></i></a>
								  <a class="additional-icon" id="dropdownMenu5" data-toggle="dropdown">
									<i class="fa fa-cog"></i>
								  </a>
								  <ul class="dropdown-menu pull-right animated half fadeInDown" role="menu" aria-labelledby="dropdownMenu5">
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Action</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Another action</a></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Something else here</a></li>
									<li role="presentation" class="divider"></li>
									<li role="presentation"><a role="menuitem" tabindex="-1" href="#fakelink">Separated link</a></li>
								  </ul>
								<a class="additional-icon" href="#fakelink" data-toggle="collapse" data-target="#quick-post"><i class="fa fa-chevron-down"></i></a>
								<a class="additional-icon" href="#fakelink"><i class="fa fa-question-circle"></i></a>
							</div><!-- End div .additional-btn -->
							
							<!-- Quick post inner -->
							<div id="quick-post" class="collapse in">
								<form role="form">
									<div class="form-group">
										<input type="text" class="form-control" placeholder="Type someting here">
									</div>
									<div class="form-group">
										<select class="form-control selectpicker">
											<option value="" selected>Choose Category</option>
											<option value="">Mobile Technology</option>
											<option value="">Web Programming</option>
											<option value="">Search Engine</option>
										</select>
									</div>
									<div class="form-group">
										<textarea class="form-control" style="height: 140px; resize: none"></textarea>
									</div>
									<div class="row">
										<div class="col-md-6">
											<!-- Example icon insert -->
											<p class="quick-post">
												<a data-toggle="tooltip" title="Insert an image"><i class="fa fa-picture-o"></i></a>
												<a data-toggle="tooltip" title="Insert a video"><i class="fa fa-video-camera"></i></a>
												<a data-toggle="tooltip" title="Attach a file"><i class="fa fa-paperclip"></i></a>
											</p>
										</div>
										<!-- Button -->
										<div class="col-md-6">
											<button type="submit" class="btn btn-sm btn-success">Save</button>
											<button type="submit" class="btn btn-sm btn-danger">Discard</button>
										</div>
									</div>
								</form>
							</div><!-- End div #quick-post -->
						</div><!-- End div .box-info -->
						<!-- End Quick post widget -->
					</div><!-- End div .col-md-4 -->
				</div><!-- End div .row -->
				
				
				
				
				<!-- Footer -->
				<footer>
				&copy; 2014 <a href="index.html">Lanceng Admin</a>. Design with love by <a href="http://isohdesign.com" target="_blank">Isoh Design Studio</a> from <a href="#fakelink">Yogyakarta, ID</a>
				</footer>
				<!-- End Footer -->
			
            </div>
			<!-- ============================================================== -->
			<!-- END YOUR CONTENT HERE -->
			<!-- ============================================================== -->
			
			
        </div>
		<!-- END CONTENT -->
		
		
		
		
		
		<!--
		============================================================================
		MODAL DIALOG EXAMPLE
		You can change transition style, just view element page
		============================================================================
		-->
		<!-- Modal Logout Primary -->
		<div class="md-modal md-fall" id="logout-modal">
			<div class="md-content">
				<h3><strong>Logout</strong> Confirmation</h3>
				<div>
					<p class="text-center">Are you sure want to logout from this awesome system?</p>
					<p class="text-center">
					<button class="btn btn-danger md-close">Nope!</button>
					<a href="login.html" class="btn btn-success md-close">Yeah, I'm sure</a>
					</p>
				</div>
			</div>
		</div><!-- End .md-modal -->
		
		<!-- Modal Logout Alternatif -->
		<div class="md-modal md-just-me" id="logout-modal-alt">
			<div class="md-content">
				<h3><strong>Logout</strong> Confirmation</h3>
				<div>
					<p class="text-center">Are you sure want to logout from this awesome system?</p>
					<p class="text-center">
					<button class="btn btn-danger md-close">Nope!</button>
					<a href="login.html" class="btn btn-success md-close">Yeah, I'm sure</a>
					</p>
				</div>
			</div>
		</div><!-- End .md-modal -->
		
		<!-- Modal Task Progress -->	
		<div class="md-modal md-slide-stick-top" id="task-progress">
			<div class="md-content">
				<h3><strong>Task Progress</strong> Information</h3>
				<div>
					<p>CLEANING BUGS</p>
					<div class="progress progress-xs for-modal">
					  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
						<span class="sr-only">80&#37; Complete</span>
					  </div>
					</div>
					<p>POSTING SOME STUFF</p>
					<div class="progress progress-xs for-modal">
					  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 65%">
						<span class="sr-only">65&#37; Complete</span>
					  </div>
					</div>
					<p>BACKUP DATA FROM SERVER</p>
					<div class="progress progress-xs for-modal">
					  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 95%">
						<span class="sr-only">95&#37; Complete</span>
					  </div>
					</div>
					<p>RE-DESIGNING WEB APPLICATION</p>
					<div class="progress progress-xs for-modal">
					  <div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
						<span class="sr-only">100&#37; Complete</span>
					  </div>
					</div>
					<p class="text-center">
					<button class="btn btn-danger btn-sm md-close">Close</button>
					</p>
				</div>
			</div>
		</div><!-- End .md-modal -->
		<!--
		============================================================================
		END MODAL DIALOG EXAMPLE
		============================================================================
		-->
		
		<!--
		MODAL OVERLAY
		Always place this div at the end of the page content
		-->
		<div class="md-overlay"></div>
		
		
		
	</div><!-- End div .container -->
	<!-- END PAGE -->

	<!--
	================================================
    JAVASCRIPT
    ================================================
    -->
    <!-- Basic Javascripts (Jquery and bootstrap) -->
    {{ HTML::script('js/jquery.js'); }}

    {{ HTML::script('js/bootstrap.min.js'); }}

    
    <!-- VENDOR -->
    
    <!-- Slimscroll js -->
    {{ HTML::script('third/slimscroll/jquery.slimscroll.min.js'); }}

    
    <!-- Morris js -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    {{ HTML::script('third/morris/morris.js'); }}

    
    <!-- Nifty modals js -->
    {{ HTML::script('third/nifty-modal/js/classie.js'); }}

    {{ HTML::script('third/nifty-modal/js/modalEffects.js'); }}

    
    <!-- Sortable js -->
    {{ HTML::script('third/sortable/sortable.min.js'); }}

    
    <!-- Bootstrao selectpicker js -->
    {{ HTML::script('third/select/bootstrap-select.min.js'); }}

    
    <!-- Summernote js -->
    {{ HTML::script('third/summernote/summernote.js'); }}

    
    <!-- Magnific popup js -->
    {{ HTML::script('third/magnific-popup/jquery.magnific-popup.min.js'); }}
 
    
    <!-- Bootstrap file input js -->
    {{ HTML::script('third/input/bootstrap.file-input.js'); }}

    
    <!-- Bootstrao datepicker js -->
    {{ HTML::script('third/datepicker/js/bootstrap-datepicker.js'); }}

    
    <!-- Icheck js -->
    {{ HTML::script('third/icheck/icheck.min.js'); }}

    
    <!-- Form wizard js -->
    {{ HTML::script('third/wizard/jquery.snippet.min.js'); }}

    {{ HTML::script('third/wizard/jquery.easyWizard.js'); }}

    {{ HTML::script('third/wizard/scripts.js'); }}

    
    <!-- LANCENG TEMPLATE JAVASCRIPT -->
    {{ HTML::script('js/lanceng.js'); }}

	</body>
</html>