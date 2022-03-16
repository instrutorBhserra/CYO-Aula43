<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Aula 41</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Aula 41</h1>
	<!-- Use um array para escrever essas páginas -->
	<ul>
<?php
//TODO
//Make a post to the files who need it
$links = array(
	"stringFunctions.php",
	"split.php",
	"explode.php",
);

//Print indixes
foreach( $links as $url){
	echo "<li><a href='$url'>$url</a></li>";
}
?>
	</ul>
</body>
</html>
