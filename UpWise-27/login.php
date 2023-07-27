
<?php
	session_start();
	
	include_once 'usuariocontroller.php';

	$user = new usuariocontroller();

	$result = $user->isLoggedIn();
	if($result){
		header('Location: index.php');
	}

?>

<!DOCTYPE HTML>
<html>
	<body>
		
	<div class="colorlib-loader"></div>

	<div id="page">
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">                                                                 
				<div class="container">
					<div class="row">
						<div class="col-xs-2">
							<div id="colorlib-logo"><a href="index.php"></a></div>
						</div>
						
					</div>
				</div>
			</div>
		</nav>

			<div class="row">
				<div class="container" style="width: 40%;  background-color: #808080;">
					<?php
						include_once("form-login.php")
					?>
				</div>
			</div>
		</div>
	</div>
	
	</body>
</html>

