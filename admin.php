<link rel="stylesheet" type="text/css" href="faqet/css/adminpanel.css">
<?php

session_start();
require 'databaza.php';
$id = $_SESSION['perdoruesId'];
$sql = "SELECT * FROM perdoruesit WHERE idPerdoruesit ='" . $id . "'";
$rezultati = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($rezultati);
if($row['roli'] != "admin"){
	header("Location: mesazhi.php");
} else {
?>

<title>Admin Paneli</title>

<div class="header">
	<div class="logo">
		<a href="admin.php">
			<h1>ADMIN PANELI</h1>
		</a>


	<div class="logo">
		<a href="faqet/index.php">
			<h1 style="float: right;">KTHEHU NE HOMEPAGE</h1>
		</a>
	</div>
</div>
</div> <br> <br>


<div style=" text-transform: capitalize;" class="container dashboard">
	<h1>Mirëse Erdhe <?php echo $row['perdoruesiPerdoruesit']; ?>!</h1>
<div class="stats">
			<a style="color: white;" href="mesazhet.php" class="first">
				<span>Lexo Mesazhet</span> 
				<span>Nga Kontakt Forma</span>
			</a>

				<a style="color: white;" href="shtoliber.php">
				<span>Shto nje Liber</span> <br>
				</a>
		</div>

</div>
<div align="middle">

		<img height="500" width="500" src="faqet/fotot/admin.png">

</div>

<?php } ?>

