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
		<link rel="stylesheet" type="text/css" href="css/main2.css">
	<title>Rreth Nesh</title>
	</head>
	<body>

<?php
		require '../navbar.php';
		?>

				<div class="row" align="middle">
					<div class="column">
						<h2 >Rreth Bibliotekes<span></span></h2>
						<p>Eshte shenuar kete te hene 70-vjetori i funksionimit te Bibliotekes Nderkomunale te Prizrenit. Drejtoresha e ketij institucioni, Sahadete Sadikaj-Kukaj tha se perkunder sfidave te ndryshme, me mjaft sukses po permbyllet edhe dekada e shtat e funksionimit.</p>
						<p> Pas fjalimeve eshte bere promovimi i librit “Nga gjerdani kombetar” me poezi nga 70 shkrimtare nga te gjitha trojet shqiptare. Gjithashtu eshte hapur edhe ekspozita e librave qe jane bere pjese e Bibliotekes gjate vitit 2018, si dhe ka qene e hapur ajo e fotografive te vjetra te qytetit te Prizrenit.
						Te pranishem ishin krijues letrare, zyrtare te ambasadave te huaja ne vend, perfaqesues te bibliotekave nga hapesirat mbareshqiptare e qytetare te shumte.</p>
					</div>
					<div>
						<img width="100" class="responsive" src="fotot/prizren3.png"> 
					</div>
				</div>
				


			<div>
				<h2>Ekipi</span></h2>

				<div>
					<div>
						<img src="fotot/prizren4.png">
						<h3>Sahadete Sadikaj-Kukaj</h3>
						<h4>Drejtoreshe</h4>
					
					
					</div>
					<div>
						<img>
						<h3>Nathalie Kosley</h3>
						<h4>Co-Founder, CTO</h4>
						
					</div>
					<div>
						<img>
						<h3>Yanna Kuzuki</h3>
						<h4>Co-Founder, Principal</h4>
						
					</div>
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
