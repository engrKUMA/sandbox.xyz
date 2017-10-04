
<!DOCTYPE html>
<html>
<head>
	<title><?= $title; ?></title>
</head>
<body>

	<h1><?= $heading; ?></h1>
    <h3><?= $message; ?></h3>
    <h3><?= $logouturl; ?></h3>

	<div></div>


	<input type="button" name="" onclick="logMeout(); " value="logout" />

	<script type="text/javascript">

		function logMeout(){
			// window.location.href = "<?= base_url('fbtest_home/logout');?>";	
			window.location.href = "<?= base_url('fbtest_home/test');?>";	
		}
		
	</script>

</body>
</html>