<!-- Weekly events page -->

<!-- checking if user is logged in, if not redirect to login page...this is to restrict access to this page to members only-->
<?php 
session_start(); 

if (!isset($_SESSION['email'])) {
	header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--Reset stylesheet-->
	<link href="css/reset.css" rel="stylesheet">

	<!-- Google fonts stylesheet-->
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Josefin+Sans" rel="stylesheet"> 

	<!-- Stylesheet for icons -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css"
	integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<!--Personal css stylesheet-->
	<link href="css/stylesheet.css" rel="stylesheet">

	<title>Weekly Events</title>
</head>
<body>

	<!-- including header,footer and eventcontent2 php pages -->
	<?php
	include('html/header.php');
	include('html/eventcontent2.php');
	include('html/footer.php');
	?>

	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
	integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
	crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
	integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
	crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
	integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
	crossorigin="anonymous"></script>
</body>
</html>