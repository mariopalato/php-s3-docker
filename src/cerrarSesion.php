<?php 
	include 'navbar.php';
	echo "<div class='container pt-5'>";
	echo "<h1>Se ha cerrado la sesion</h1>";	
	echo "</div>";
	setcookie("token",0,time() - 60);
	
	include 'footer.php';
?>
