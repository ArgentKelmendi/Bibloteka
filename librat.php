
<?php
require '../konfigurimi.php';
$id = $_GET['id'];

	$sql = "SELECT * FROM librat WHERE id = '" . $id. "'";
	$rezultati = mysqli_query($conn, $sql);
	$stmt = mysqli_stmt_init($conn);
	$rowid = mysqli_fetch_array($rezultati);

if(isset($_SESSION['perdoruesId'])){

?>

<!DOCTYPE html>
<html>
<head>
	<title><?php echo $rowid['titulli'] ?></title>
	<link rel="stylesheet" type="text/css" href="css/stili2.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<?php
		require '../navbar.php';
		?>
<div class="mesi">
	<h1><?php echo $rowid['titulli'] ?></h1>
	<img width="400" height="500" src="fotot/<?php echo $rowid['foto'] ?>">
</div>

<div class="mesi">
	<h1>Pershkrimi:</h1>
	<p style="font-size: large;"><?php echo $rowid['pershkrimi']; ?></p>
</div>

<button style="background-color: red;">Shlyej librin</button>


</body>
</html>


<?php
} else {

	header("Location: ../indexLogin.php");
}
?>
