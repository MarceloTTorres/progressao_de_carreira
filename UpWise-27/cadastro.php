<?php
	session_start();
	include_once 'index.php';
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
						<div class="col-xs-10 text-right menu-1">
							<ul>
								<li><a href="index.php">Home</a></li>
								<li class="active"><a href="login.php"> Login/Cadastre-se </a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</nav>

			<div class="row">
				<div class="container" style="width: 50%; background-color: #808080;">
				</div>

				
			</div>
	</div>
	
	</body>
</html>

