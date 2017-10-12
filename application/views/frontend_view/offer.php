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
					<a id="keyInfoBtn" onclick="activeInfo()" href="#keyInfo" class="center collection-item waves-effect waves-light">Key Information</a>
					<a id="locationBtn" onclick="activeLocation()" href="#location" class="center collection-item waves-effect waves-light">Location</a>
					<a id="photosBtn" onclick="activePhotos()" href="#photos" class="center collection-item waves-effect waves-light">Photos</a>
					<a id="detailsBtn" onclick="activeDetails()" href="#details" class="center collection-item waves-effect waves-light">Details</a>
					<a id="contactBtn" onclick="activeContact()" href="#contact" class="center collection-item waves-effect waves-light">Contact</a>
			</ul>
			<!-- end:  dashboard Side nav -->
		</div>
		<div class="col l8 m6 s8">
			<div class="row card">
				<div class="card-content">
					<h3 class="dashboard-header">What type of property do you want to offer?</h3>
					
				</div>
				
			</div>
		</div>
	

		
	</section>



    <?php include "includes/footer.php" ?>

</body>
</html>