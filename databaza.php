 <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bibloteka";
$conn = mysqli_connect($servername, $username, $password, $dbname);
if(!$conn){
	die("Deshtoi lidhja".mysqli_connect_error());
}
?>

