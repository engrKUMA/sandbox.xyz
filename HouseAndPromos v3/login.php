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


	<section class="row container">

		<div class="card center col l6 m8 s12 push-l3 push-m2">
			<div class="card-content container">
				<!--buttons-->
				<div class="row center">
					<form>
						<div class="row form-group input-field">
							<input type="text" name="email" id="email" required/>
							<label for="email">Please enter your Email Address*</label>
						</div>

						<div class="row form-group input-field">
							<input type="password" name="password" id="password" required />
							<label for="password">Please enter your Password*</label>
						</div>

						<div class="row form-group">
							<a href="profile.php" type="submit" class="waves-effect waves-light btn orange col s12">Log in / Register</a>
						</div>

						<p class="row">
							<hr class="col s5">
							<span class="col s2">OR</span>
							<hr class="col s5">
						</p>
						<br>
						<br>
						<!--register button-->
						<div class="row">
							<a  href="" class="waves-effect waves-light btn blue darken-4 col s12"><i class="fa fa-facebook-official" aria-hidden="true"></i> Continue with Facebook</a>
							
						</div>


					</form>

				</div>
				
			</div>
			
		</div>
	</section>


	

    <?php include "includes/footer.php" ?>

</body>
</html>