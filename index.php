<!DOCTYPE html>
<html>
<head>
	<title>Selamat Datang</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link  rel="stylesheet" type="text/css" href="style.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>

<div class="content">
	<header>
		<h1 class="judul">Selamat Datang di Website Dusun Takan Kidul</h1>
		<h3 class="deskripsi">Kecamatan Pabelan, Kabupaten Semarang</h3>
	</header>

	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
		    <div class="navbar-nav">
		      <a class="nav-link" id="home">Home</a>
		      <a class="nav-link" id="about">About</a>
		      <a class="nav-link" id="galery">Gallery</a>
		      <a class="nav-link" id="umkm">UMKM</a>
					<a class="nav-link" id="wisata">Wisata Desa</a>
					<a class="nav-link" id="kontak">Kontak Desa</a>
					<a class="nav-link" id="login">Login</a>
		    </div>
		</nav>
	</div>

<!--
	<div class="menu">
		<ul>
			<li><a class="klik_menu" id="home">Home</a></li>
			<li><a class="klik_menu" id="about">About</a></li>
			<li><a class="klik_menu" id="galery">Gallery Desa</a></li>
			<li><a class="klik_menu" id="umkm">UMKM</a></li>
			<li><a class="klik_menu" id="wisata">Wisata Desa</a></li>
		</ul>
	</div>
-->
	<div class="badan">



	</div>
</div>
</body>

<script type="text/javascript">
	$(document).ready(function(){
		$('.nav-link').click(function(){
			var menu = $(this).attr('id');
			if(menu == "home"){
				$('.badan').load('home.php');
			}else if(menu == "about"){
				$('.badan').load('about.php');
			}else if(menu == "galery"){
				$('.badan').load('galery.php');
			}else if(menu == "umkm"){
				$('.badan').load('umkm.php');
			}else if (menu == "wisata") {
				$('.badan').load('wisata.php')
			}else if (menu == "kontak") {
				$('.badan').load('kontak.php')
			}else if (menu == "login") {
				$('.badan').load('login.php')
			}
		});


		$('.badan').load('home.php');

	});
</script>

</html>
