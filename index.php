<!DOCTYPE html>
<head>
	<title>Home</title>
	<link href='https://fonts.googleapis.com/css?family=Nunito:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="styles/main.css">
	<meta charset="utf-8">
</head>
<body>
<?php 
include 'menu.html';
?>
	<main>
		<?php
		date_default_timezone_set('America/Edmonton'); //Get Calgary time

		$CalgaryTime = date('G'); //24 hour time

		if ($CalgaryTime >= 0 && $CalgaryTime < 8 ) {
    		echo "<h1>Hello, early-bird!</h1>";
		} else if ($CalgaryTime >= 8 && $CalgaryTime < 12) {
    		echo "<h1>Hello and good morning!</h1>";
		} else if ($CalgaryTime >= 12 && $CalgaryTime < 17) {
    		echo "<h1>Hello and good afternoon!</h1>";
		} else if ($CalgaryTime >= 17 && $CalgaryTime < 21) {
			echo "<h1>Hello and good evening!</h1>";
		} else if ($CalgaryTime >= 21) {
			echo "<h1>Hello, night-owl!</h1>";
		} else {
			echo "<h1>Hello!</h1>";
		}
		?>
		<section id="container">
		<h2>I'm Kelly,</h2>
		<p>a web development student at SAIT and technical writer.</p>
		</section>	
	</main>
	<?php 
	include 'footer.html';
	?>
</body>
</html>
