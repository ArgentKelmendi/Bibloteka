<?php
session_start();
require '../databaza.php';
$id = $_SESSION['perdoruesId'];
$sql = "SELECT * FROM perdoruesit WHERE idPerdoruesit ='" . $id . "'";
$rezultati = mysqli_query($conn, $sql);
$stmt = mysqli_stmt_init($conn);
$row = mysqli_fetch_array($rezultati);
if(isset($_SESSION['perdoruesId'])){

?>
<!DOCTYPE html>
<html> 
	<head>
		<link rel="stylesheet" type="text/css" href="css/stili2.css">
		<link rel="stylesheet" type="text/css" href="css/main.css">
	<title>Biblioteka</title>
	</head>
	<body>

<?php
		require '../navbar.php';
		?>
			<div>
				<h2>Qyteti dhe biblioteka</span></h2>
				
					<div>
						<a href="#">
							<img height="500" width="600" src="fotot/prizren1.png" >
							<h3>Prizren</h3>
							<p>Kalaja Prizrenit</p>
						</a>
					</div>
					<div>
						<a href="#">
							<img src="fotot/prizren2.png" >
							<h3>Prizren</h3>
							<p>Marash</p>
						</a>
					</div>
					
					<div>
						<a href="#">
							<img src="fotot/prizren3.png" >
							<h3>Prizren</h3>
							<p>Shadervani</p>
						</a>
					</div>
					
					<div>
						<a href="#">
							<img src="fotot/prizren4.png" >
							<h3>Prizren</h3>
							<p>Kisha</p>
						</a>
					</div>

				

					<div>
						<a href="#">
							<img src="fotot/abi1.png" >
							<h3>Prizren</h3>
							<p>Abi Qarshia</p>
						</a>
					</div>


					
				</div>
			</div>
		

		

		</div>
	</div>

	</body>
</html>
<?php
} else {

	header("Location: ../indexLogin.php");
}
?>
