<?php
require '../konfigurimi.php';
$sqlLibrat = "SELECT * FROM librat ORDER BY id desc";
$rezultatiLibrat = mysqli_query($conn, $sqlLibrat);
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
		require '../slider.php';
		?>
<h2 align="middle">Libra<p>Biblioteka e Prizrenit</p></h2>
<?php  
		
		while($rowLibrat = mysqli_fetch_assoc($rezultatiLibrat)){
?>
		
<!-- E KE TEK NOTES KETE KOD -->
				
					<div class="leftcolumn">
    					<div align="middle" class="card">
						<a href="librat.php?id=<?php echo $rowLibrat['id'] ?>">
							
							<img width="400" src ="<?php echo 'fotot/'.$rowLibrat['foto']; ?>" alt="" />
							<h3><?php echo $rowLibrat["titulli"]; ?></h3>
							<p><?php echo $rowLibrat["autori"]; ?></p>
							<p><?php echo $rowLibrat["pershkrimi"]; ?></p>

						</a>
					</div>
				</div>

			<?php

			 } 
 ?>

<?php
} else {

	header("Location: ../indexLogin.php");
}
?>
 </head>
</body>

