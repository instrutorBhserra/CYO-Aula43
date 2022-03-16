<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>String Functions</title>
</head>
<body>
	<h1>String Functions - Split</h1>
<?php


include_once "./functionDeclarations.php";

//Try i
defineInterval();
defineStr();

echoLen($str);

$tmpArr = str_split($str,$interval);

tableAssembly($tmpArr)

?>

</body>
</html>
