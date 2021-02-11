<?php
require '../konfigurimi.php';
$sqlLibrat = "SELECT * FROM librat ORDER BY id desc";

$rezultatiLibrat = mysqli_query($conn, $sqlLibrat);
$stmtLibrat = mysqli_stmt_init($conn);
$rowLibrat = mysqli_fetch_assoc($rezultatiLibrat);



if(isset($_SESSION['perdoruesId'])){
	
?>

<!DOCTYPE html>
<html> 
	<head>
<link rel="stylesheet" type="text/css" href="css/main2.css">
<link rel="stylesheet" type="text/css" href="css/stili2.css">
	<title>Biblioteka &mdash; </title>
	</head>
	<body>

		<?php
		require '../navbar.php';
		?>

<h2 align="middle">Libra<p>Biblioteka e Prizrenit</p></h2>
<?php  
		$count = 1;
		while($rowLibrat = mysqli_fetch_assoc($rezultatiLibrat)){

?>
		
				


<!-- E KE TEK NOTES KETE KOD -->

				<div align="middle">
					<div class="leftcolumn">
    					<div class="card">
						<a href="br.php">
							
							<img src ="<?php echo 'fotot/'.$rowLibrat['foto']; ?>" alt="" />
							<h3><?php echo $rowLibrat["titulli"]; ?></h3>
							<p><?php echo $rowLibrat["autori"]; ?></p>
							<p><?php echo $rowLibrat["pershkrimi"]; ?></p>
						</a>
					</div>
				</div>
					</div>



			<?php

			$count++; } 
 ?>

<?php
} else {

	header("Location: ../indexLogin.php");
}
?>
