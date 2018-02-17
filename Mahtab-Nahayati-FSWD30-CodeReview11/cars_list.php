<?php  
	ob_start();
	session_start();

	require_once 'db_connection.php';

	
	$res=mysqli_query($conn, "SELECT * FROM customer WHERE customer_id=".$_SESSION['customer']);

	$customerRow=mysqli_fetch_array($res, MYSQLI_ASSOC);

	

	$allcars = "SELECT * FROM car
				LEFT JOIN cartype ON car.fk_cartype_id = cartype.cartype_id
				LEFT JOIN car_status ON car.fk_status_id = car_status.status_id
				
				LEFT JOIN office ON car.fk_office_id = office.office_id
				";

	$result = mysqli_query($conn, $allcars);

	include_once 'header_navbar.php'
?>

		

	<div class="container">
		<div class="table-responsive">
			
			<table class="table">
				<thead>
					<tr>
						<th scope="col">ID</th>
						<th scope="col">Model</th>
						<th scope="col">Office</th>
						<th scope="col">Status</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						while ($row = mysqli_fetch_assoc($result)) {
							echo 
								" 
								<tr>
									<td scope='row'>".$row["car_id"]."</td>
									<td>".$row["type"]."</td>
									<td>".$row["address"]."</td>
									<td>".$row["car_status"]."</td>
								</tr>
								";
						};
					?>
				</tbody>
			</table>
		</div>
	</div>
	<?php include_once 'footer.php' ?>
</body>
</html>

<?php ob_end_flush(); ?>