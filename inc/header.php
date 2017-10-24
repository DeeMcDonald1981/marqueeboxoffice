<?php include('db_connect.php')?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php echo TITLE?></title>
<link rel="stylesheet" href="bootstrap4/css/bootstrap.css">
<link rel="stylesheet" href="bootstrap4/css/font-awesome.min.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body>

<nav class="navbar navbar-expand-md navbar-light bg-dark">
	<div class="container">
		<a href="index.php" class="navbar-brand">Marquee Box Office</a>
		<button class="navbar-toggler" data-toggle="collapse" data-target="#navbarNav"><span class="navbar-toggler-icon"></span></button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="index.php" class="nav-link">Home</a></li>
				<li class="nav-item"><a href="add_movies.php" class="nav-link">Movies</a></li>
			</ul>
		</div>
	</div>
</nav>