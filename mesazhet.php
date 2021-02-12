<?php
require 'konfigurimi.php';
$sqlKontakt = "SELECT * FROM kontakt ORDER BY id desc";
$rezultatiKontakt = mysqli_query($conn, $sqlKontakt);
if($row['roli'] != "admin"){
    header("Location: mesazhi.php");
} else {
?>
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

<link rel="stylesheet" type="text/css" href="faqet/css/logini.css">
<link rel="stylesheet" type="text/css" href="faqet/css/adminpanel.css">
<table width="100%" border="1" style="border-collapse:collapse;">


<title>Mesazhet nga Kontakt Forma</title>

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

<h1 style="color: white;" align="center">Mesazhet nga Kontakt forma</h1>


<thead>
<tr>
<th style="color: white;"><strong>Numerimi</strong></th>
<th style="color: white;"><strong>Emri</strong></th>
<th style="color: white;"><strong>Emaili</strong></th>
<th style="color: white;"><strong>Mesazhi</strong></th>
</tr>
</thead>
<tbody>

<?php
$count=1;
while($rowKontakt = mysqli_fetch_assoc($rezultatiKontakt)) { ?>

<tr><td style="color: white;" align="center"><?php echo $count; ?></td>
<td align="center"><p style="color: white;"><?php echo $rowKontakt["emri"]; ?></p></td>
<td align="center"><p style="color: white;"><?php echo $rowKontakt["emaili"]; ?></p></td>
<td align="center"><p style="color: white;"><?php echo $rowKontakt["mesazhi"]; ?></p></td>
</tr>
<?php $count++; } ?>

</tbody>
</table>


<?php

} 
?>
