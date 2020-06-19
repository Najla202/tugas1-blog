<!DOCTYPE html>
<html>
	<head>
		<title>Tugas 1 Blog Najla</title>
		<link rel="stylesheet" type="text/css" href="layout/assets/css/style.css">
	</head>
	<body>

		<?php
			include_once "app/Controller.php";
			include_once "app/Login.php";
			session_start();
			if(!isset($_SESSION['author_name'])) {
			header("location:login.php");
			}
		?>

		<div class="wrapper">
			<img src="layout/assets/images/header.jpg" width="100%">
			<header>
				<h1>Blog Najla</h1>
				<nav>
					<ul>
						<li><a href="index.php" class="current">Beranda</a></li>
						<li><a href="index.php?page=category_tampil">Kategori</a></li>
						<li><a href="index.php?page=post_tampil">Post</a></li>
						<li><a href="index.php?page=photos_tampil">Photos</a></li>
						<li><a href="index.php?page=album_tampil">Album</a></li>
						<li><a href="index.php?page=logout">Logout</a></li>
					</ul>
				</nav>
			</header>

			<div class="main">
		
				<?php
					if(isset($_GET['page'])) {
						include $_GET['page'] . ".php";
					} else {
						include "main.php";
					}
			
				?>
		
			</div>

			<footer>
				<center>&copy; 2020 Blog Najla</center>
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>