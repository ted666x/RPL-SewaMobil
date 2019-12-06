<?php
	include 'konek.php';
	if(!isset($_SESSION['user'])){
		header("login.php");
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Surabaya AIR</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="content">
	<center>
		<a href="tiket.php?act=tambah-tiket"><input type="submit" class="submit" value="Tambah Tiket"></a>
		<a href="tiket.php?act=data-tiket"><input type="submit" class="submit" value="Data Tiket"></a>
		<a href="tiket.php?act=data-transaksi"><input type="submit" class="submit" value="Data Transaksi"></a>
	</center>
	<div class="kotak">
		<?php
			if(isset($_GET['act'])){
				if($_GET['act'] == 'tambah-tiket')
					include 'tambah-tiket.php';
				else if($_GET['act'] == 'data-tiket')
					include 'data-tiket.php';
				else if($_GET['act'] == 'data-transaksi')
					include 'data-transaksi.php';
			}else if(isset($_GET['detail'])){
					include 'detail.php';
			} else {
				include 'data-transaksi.php';
			}
		?>
	</div>
</div>
</body>
</html>
