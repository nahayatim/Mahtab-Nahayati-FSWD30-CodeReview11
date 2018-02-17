<!DOCTYPE html>
<html>
<head>
	<title>PHP Car Rental Agency</title>

	<link rel="stylesheet" type="text/css" href="style.css">

	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha256-k2WSCIexGzOj3Euiig+TlR8gA0EmPjuc79OEeY5L45g="
            crossorigin="anonymous"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- font -->
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script|Great+Vibes" rel="stylesheet">
</head>
<body>

	<header id="header" class="">
		
		<h3>Welcome  <?php echo $customerRow['customer_name']; ?> ,to our carrental service!</h3>

		<div class="row">
			<div class="col-md-5 col-lg-4 col-5 col-md-offset-8 col-offset-8">
						
				<ul class="nav nav-pills">
					<li><a href="home.php">Home</a></li>

					<li><a href="office_list.php">Offices</a></li>
					<li>
						<div class="dropdown">
					        <button class="btn dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
					          Cars
								<span class="caret"></span>
					        </button>
						        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
						        	<li><a href="cars_list.php">Carlist</a></li>
						        	<li>
						        		<a href="cars_locations.php">Cars Location</a>
						        	</li>
						        	
						        </ul>
						</div>
					</li>
					<li>
						<button class="btn">
							<a href="logout.php?logout">Sign Out</a>
						</button>
					</li>

		  		</ul>
		  	</div>
		</div>
	</header><!-- /header -->
	