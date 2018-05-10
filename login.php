<?php
	require_once "config.php";

	if (isset($_SESSION['access_token'])) {
		header('Location: index.php');
		exit();
	}

	$redirectURL = "https://localhost/New%20folder%20(2)/New%20folder/FacebookLogin/fb-callback.php";
	$permissions = ['email'];
	$loginURL = $helper->getLoginUrl($redirectURL, $permissions);
?>
<!doctype html>
<html>
<body>

	<div>
				<form>
					<input name="email" placeholder="Email" class="form-control"><br><br>
					<input name="password" type="password" placeholder="Password" class="form-control"><br><br>
					<input type="submit" value="Log In" class="btn btn-primary">
					<input type="button" onclick="window.location = '<?php echo $loginURL ?>';" value="Log In With Facebook" class="btn btn-primary">
				</form>
		</div>
	</div>

</body>
</html>