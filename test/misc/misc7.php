<!DOCTYPE html>

<html lang="en">
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta http-equiv="expires" content="0">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title>Miscellaneous 7</title>

		<!-- Bootstrap -->
		<link href="../css/bootstrap.css" rel="stylesheet">
		<link href="../css/custom.css" rel="stylesheet">
		
		<link href="../tipuesearch/tipuesearch.css" rel="stylesheet">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<script src="../js/html5shiv.min.js"></script>
		<script src="../js/respond.min.js"></script>
	</head>
	<body>
	
<!-- Piwik 
	Piwik code was here for tracking
End Piwik Code -->

<div class="container">
		<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#cpeNavbar" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
	<a href="mailto:email@email.com?Subject=CPE Info Update - Miscellaneous7" class="btn btn-default btn-lg btnFix">
		<span class="glyphicon glyphicon-envelope"></span>
	</a>
    </div>
	
	<!-- menu php -->
		<?PHP 
			include "menu.php"; 
		?>
	<!-- end menu php -->
	
			<div class="row bottom-padding5 topPadding10">
				<div class="col-lg-8 col-md-8 col-sm-12 topPadding5">
					<span class="orangePBI">Miscellaneous 7</span>
				</div>
			</div>
	
		Lorem ipsum dolor sit amet, consectetur adipiscing elit. In id ultricies quam, nec iaculis mauris.
		<hr>
			<div class="container bott-30">
				<div class="col-xs-12 col-sm-6 col-md-6">
					<span class="h3">Item 1</span>
						<span class="tab2"><a target="_blank" href="#">Link 1</a></span><br>
					<span class="h3">Item 2</span>
						<span class="tab2"><a target="_blank" href="#">Link 2</a></span><br>
					<span class="h3">Item 3</span>
						<span class="tab2"><a target="_blank" href="#">Link 3</a></span><br>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<span class="h3">Item 4</span>
						<span class="tab2"><a target="_blank" href="#">Link 4</a></span><br>
					<span class="h3">Item 5</span>
						<span class="tab2"><a target="_blank" href="#">Link 5</a></span><br>
					<span class="h3">Item 6</span>
						<span class="tab2"><a target="_blank" href="#">Link 6</a></span><br>
				</div>
			</div>
		</div>
		<div class="footer">
			<p>Last updated {date}<br>
			Site created by Greg Moffatt</p>
		</div>
	</div>

		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="../js/jquery-1.11.3.min.js"></script>
		<!-- Include all compiled plugins (below), or include individual files as needed -->
		<script src="../js/bootstrap.min.js"></script>
		<script>
			var shiftWindow = function() { scrollBy(0, -55) };
			window.addEventListener("hashchange", shiftWindow);
			function load() { if (window.location.hash) shiftWindow(); }
		</script>
	</body>
</html>