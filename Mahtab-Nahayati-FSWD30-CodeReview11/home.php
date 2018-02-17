<?php  
	ob_start();
	session_start();

	require_once 'db_connection.php';



	$res=mysqli_query($conn, "SELECT * FROM customer WHERE customer_id=".$_SESSION['customer']);

	$customerRow=mysqli_fetch_array($res, MYSQLI_ASSOC);

	$sql = "SELECT * FROM car";
	
	$result = mysqli_query($conn, $sql);

	include_once 'header_navbar.php'
?>
		<!-- MAIN (Center website) -->

	<html>
	<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
	* {
    box-sizing: border-box;
	}

	body {
	background-image: url('');
    background-color: #f1f1f1;
    padding: 20px;
    font-family: Arial;
	}

	/* Center website */
	.main {
    max-width: 1000px;
    margin: auto;
	}

	h1 {
    font-size: 50px;
    word-break: break-all;
	}

	.row {
    margin: 8px -16px;
	}

	/* Add padding BETWEEN each column */
	.row,
	.row > .column {
    padding: 8px;
	}

	/* Create four equal columns that floats next to each other */
	.column {
    float: left;
    width: 25%;
	}

	/* Clear floats after rows */ 
	.row:after {
    content: "";
    display: table;
    clear: both;
	}

	/* Content */
	.content {
    background-color: white;
    padding: 10px;
	}

	/* Responsive layout - makes a two column-layout instead of four columns */
	@media (max-width: 900px) {
    .column {
        width: 50%;
    }
	}

	/* Responsive layout - makes the two columns stack on top of each other instead of next to each other */
	@media (max-width: 600px) {
    .column {
        width: 100%;
    }
	}
	</style>
	</head>
	<body>
	<div class="main">


	<hr>

	<h2>Search,compare & save</h2>
	<p>Compare 900 companies at over 53,000 Location.Best price guranteed</p>


	<div class="row">
	  <div class="column">
	    <div class="content">
	      <img src="img/rent.jpg" alt="road" style="width:100%">
	      <h3>Manage your booking online</h3>
	      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
	    </div>
	  </div>
	  <div class="column">
	    <div class="content">
	    <img src="img/road.jpg" alt="Lights" style="width:100%">
	      <h3>World's biggest online car rental</h3>
	      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
	    </div>
	  </div>
	  <div class="column">
	    <div class="content">
	    <img src="img/winter.jpg" alt="Nature" style="width:100%">
	      <h3>Rated by more than 3,5 million people</h3>
	      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
	    </div>
	  </div>
	  <div class="column">
	    <div class="content">
	    <img src="img/anywhere.jpg" alt="Mountains" style="width:100%">
	      <h3>Our most popular destination</h3>
	      <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
	    </div>
	  </div>
	<!-- END GRID -->
	</div>

	<div class="content">
	  <img src="img/road1.jpg" alt="Bear" style="width:100%">
	  <h3>Some Other Work</h3>
	  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
	  <p>Lorem ipsum dolor sit amet, tempor prodesset eos no. Temporibus necessitatibus sea ei, at tantas oporteat nam. Lorem ipsum dolor sit amet, tempor prodesset eos no.</p>
	</div>

	<!-- END MAIN -->
	</div>




	
	<?php include_once 'footer.php' ?>
</body>
</html>

<?php ob_end_flush(); ?>