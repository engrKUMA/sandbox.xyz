<!DOCTYPE html>
<html>
<head>
	<title></title>
    <?php include "includes/header.php" ?>
</head>
<body>

	<!-- navbar -->
	<?php include "includes/navbar.php" ?>
	<!-- navbar -->

	<section class="row">
		<div class="col l2 m3 s4">
			<!-- start: dashboard Side nav -->
			<ul class="collection sticky">
				<li class="collection-item center">
					<img src="img/sample/sample.jpg" class="circle center" width="80px" height="80px">
					<p>Firstname Lastname <br> Account</p>
				</li>
					<a id="login-register-btn" href="profile.php" class="center collection-item waves-effect waves-light">Edit Profile</a>
					<a id="offer-property-btn" href="properties.php" class="center collection-item collection-active waves-effect waves-light">Properties</a>
					<a id="offer-property-btn" href="messages.php" class="center collection-item waves-effect waves-light">Messages</a>
			</ul>
			<!-- end:  dashboard Side nav -->
		</div>
		<div class="col l8 m6 s8">
			<div class="row card">
				<div class="card-content">
					<h3 class="dashboard-header">Properties</h3>
					<p>Update your listings regularly to get high quality leads.</p>
					
				</div>
				
			</div>
		</div>
	

		
	</section>



    <?php include "includes/footer.php" ?>

</body>
</html>