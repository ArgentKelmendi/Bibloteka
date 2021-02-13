<link rel="stylesheet" type="text/css" href="faqet/css/adminpanel.css">
<table width="100%" border="1" style="border-collapse:collapse;">
<style>
table, td, th {  
  border: 1px solid #ddd;
  text-align: left;
}

table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  padding: 15px;
}
</style>
<?php
require 'konfigurimi.php';
$sqlPerdorusit = "SELECT * FROM perdoruesit ORDER BY idPerdoruesit desc";
$rezultatiPerdoruesit = mysqli_query($conn, $sqlPerdorusit);
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
	<h1>Mirë se erdhe <?php echo $row['perdoruesiPerdoruesit']; ?>!</h1>
	<thead>
<tr>
<th style="color: white;"><strong>Numerimi</strong></th>
<th style="color: white;"><strong>Emri</strong></th>
<th style="color: white;"><strong>Emaili</strong></th>
<th style="color: white;"><strong>Nderro Rolin</strong></th>
</tr>
</thead>
<tbody>


	<?php  
		$count=1;
		while($rowPerdorusit = mysqli_fetch_assoc($rezultatiPerdoruesit)){
?>		

	<tr><td align="center"><p style="color: white;"><?php echo $count; ?></p></td>
		<td align="center"><p style="color: white;"><?php echo $rowPerdorusit["perdoruesiPerdoruesit"]; ?></p></td>
		<td align="center"><p style="color: white;"><?php echo $rowPerdorusit["emailiPerdoruesit"]; ?></p></td>
		<td align="center">
			<form action="menaxhimiPerdorueseve.php" method="post">
				<?php if($rowPerdorusit['roli'] == "admin"){  ?>
			<?php echo '<div align="middle"><button> Bëj user </button></div>'; } else { ?>	 
			<div align="middle">
				<button>Bëj Admin </button>
				</div> <?php } ?>
		</form>
		</td>
	</tr>

			<?php
$count++;
			 } 
 ?>

 </tbody>
</table>

 	<?php } ?>
