<!DOCTYPE html>
<html>
<head>
	<title>Menu Utama</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<!-- <script type="text/javascript" src="jquery.js"></script> -->
</head>
<body>
<div class="content">
	<div class="menu">
		<ul>
			<li><a href="index.php?page=home">Beranda</a></li>
			<li><a href="index.php?page=tentang">Tentang Kami</a></li>
			<li><a href="index.php?page=tutorial">Pemesanan</a></li>
		</ul>
	</div>
 
	<div class="badan">
 
 
	<?php 
	if(isset($_GET['page'])){
		$page = $_GET['page'];
 
		switch ($page) {
			case 'home':
				include "halaman/home.php";
				break;
			case 'tentang':
				include "halaman/tentang.php";
				break;
			case 'tutorial':
				include "halaman/tutorial.php";
				break;			
			default:
				echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
				break;
		}
	}else{
		include "halaman/home.php";
	}
 
	 ?>
 
	</div>
</div>
</body>
</html>