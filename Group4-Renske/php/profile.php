<!DOCTYPE html>
<!-- Author: Noah // Standard layout of a HTML document -->
<html>
<head>
    <title>Global Exploration Digital Classroom</title>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <!-- Bootstrap Stylesheet -->
    <link rel='stylesheet' type='text/css' href='../stylesheets/bootstrap.css'>
    <!-- Latest compiled and minified JavaScript & ajax -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js'></script>        
    <!-- Theme stylesheet -->
    <link rel='stylesheet' type='text/css' href='../stylesheets/stylesheet.css'>
    <!-- Font-awesome stylesheet -->
    <link rel='stylesheet' type='text/css' href='../stylesheets/font-awesome.css'>         
</head>
<body>                             
    <div class='container'>                                                       <!-- Start a new bootstrap container -->                           
        <?php
        require_once './loginheader.php';
        require_once './menu.php';
        ?>
			
		<div id="user-profile-2" class="user-profile">
		<div class="tabbable">
			<div class="tab-content no-border padding-24">
				<div id="home" class="tab-pane in active">
					<div class="row">
						<div class="col-xs-12 col-sm-3 center">
							<span class="profile-picture">
								<img class="editable img-responsive" alt=" Avatar" id="avatar2" src="http://3.bp.blogspot.com/-Z69oQBIC7HE/UZPN3C65X0I/AAAAAAAACUU/MjjamIpmgWQ/s640/908273_501383786592675_1523501281_n.jpg">
							</span>

							<div class="space space-4"></div>

						</div><!-- /.col -->

						<div class="col-xs-12 col-sm-9">
							<h4 class="blue">
								<span class="middle">Kevin Dem Cool Guy</span>

							</h4>

							<div class="profile-user-info">

								<div class="profile-info-row">
									<div class="profile-info-name"> Location </div>

									<div class="profile-info-value">
										<i class="fa fa-map-marker light-orange bigger-110"></i>
										<span>Netherlands,</span>
										<span>Scheveningen</span>
									</div>
								</div>

								<div class="profile-info-row">
									<div class="profile-info-name"> Age </div>

									<div class="profile-info-value">
										<span>10</span>
									</div>
								</div>
							</div>

							<div class="hr hr-8 dotted"></div>
						</div><!-- /.col -->
					</div><!-- /.row -->

					<div class="space-20"></div>

					<div class="row">
						<div class="col-xs-12 col-sm-6">
							<div class="widget-box transparent">
								<div class="widget-header widget-header-small">
									<h4 class="widget-title smaller">
										<i class="ace-icon fa fa-check-square-o bigger-110"></i>
										Little About Me
									</h4>
								</div>
							</div>
						</div>
					<br><br><br>
						
								
								<div class="widget-body">
									<div class="widget-main">
										<p>
											I'm a cool guy with a lot of style
										</p>
										<p>
											I have really fancy hair, and I like pigeons
										</p>
										<p>
											I'm god of the world, I like colouring inside the lines, drawing, talking and skating
										</p>
										<p>
											Thanks for visiting my profile.
										</p>
										<p>				
										</p>
									</div>
								</div>
								<br><br>
								<div class="col-xs-3 col-sm-3">
								<div class="well well-lightgreen view overlay">
								<td class="linkbutton2" Width="135"><a href="Changeprofile.php" style="text-decoration:none"><font color="White"><center><h3>Change profile</h3></center></td>
								</div>
							</div>
							</div>
						</div>
					</div>
					
				</div><!-- /#home -->


