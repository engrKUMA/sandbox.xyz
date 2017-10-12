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
					<a id="login-register-btn" href="profile.php" class="center collection-item collection-active waves-effect waves-light">Edit Profile</a>
					<a id="offer-property-btn" href="properties.php" class="center collection-item waves-effect waves-light">Properties</a>
					<a id="offer-property-btn" href="messages.php" class="center collection-item waves-effect waves-light">Messages</a>
			</ul>
			<!-- end:  dashboard Side nav -->
		</div>
		<div class="col l8 m6 s8">
			<div class="row card">
				<div class="card-content">
					<h3 class="dashboard-header">Edit Profile</h3>
					<p>Make sure your profile is updated so that our users can contact you easily.</p>

					<form>
						<div class="row">
							<!-- last name -->
							<div class="input-field input-field col l6 m6 s12">
								<input id="lastName" type="text" name="lastName"/>
								<label for="lastName">Last Name*</label>
							</div>

							<!-- firstname -->
							<div class="input-field col l6 m6 s12">
								<input id="firstName" type="text" name="firstName"/>
								<label for="firstName">First Name*</label>
							</div>

							<!-- email -->
							<div class="input-field col l6 m6 s12">
								<input id="email" type="email" name="email" />
								<label for="email">Email*</label>
							</div>

							<!-- password -->
							<div class="input-field col l6 m6 s12">
								<input id="password" type="password" name="password" />
								<label for="password">Password*</label>
							</div>

							<!-- mobile number -->
							<div class="input-field col l6 m6 s12">
								<input id="mobileNumber" type="number" name="mobileNumber" />
								<label for="mobileNumber">Mobile Number*</label>
							</div>

							<!-- telephone Number -->
							<div class="input-field col l6 m6 s12">
								<input id="telephoneNumber" type="number" name="telephoneNumber" />
								<label for="telephoneNumber">Telephone Number</label>
							</div>

							<p id="agentBtn">Are you a Agent? <a onclick="showAgentForm()">Change Account</a></p>
							<div id="agentForm">
								<hr>
								<br>
								<!-- agency name -->
								<div class="input-field col l6 m6 s12">
									<input id="agencyName" type="text" name="agencyName" />
									<label for="agencyName">Agency Name*</label>
								</div>

								<!-- website -->
								<div class="input-field col l6 m6 s12">
									<input id="website" type="text" name="website" />
									<label for="website">Agency Website</label>
								</div>

								<!-- agency city -->
								<div class="input-field col l6 m6 s12">
									<input id="city" type="text" name="city" />
									<label for="city">Agency City*</label>
								</div>

								<!-- agency Address -->
								<div class="input-field col l6 m6 s12">
									<input id="address" type="text" name="address" />
									<label for="address">Agency Address*</label>
								</div>

							<p id="privateBtn">Are you a Private User? <a onclick="hideAgentForm()">Change Account</a></p>

							</div>
							<br>

							<div class="center">
								<button type="submit" class="btn waves-light waves-effect circle-btn">Save Changes</button>
							</div>
						</div>

					</form>
				</div>
				
			</div>
		</div>
	

		
	</section>



    <?php include "includes/footer.php" ?>

</body>
</html>