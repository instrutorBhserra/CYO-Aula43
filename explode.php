
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>String Functions</title>
</head>
<body>
	<h1>String Functions - Explode</h1>
<?php

include_once "./functionDeclarations.php";

//Try i
defineChar();
defineStr();

echoLen($str);

$tmpArr = explode($char,$str);

tableAssembly($tmpArr)
?>

<a href="https://www.w3schools.com/tags/ref_urlencode.asp"> W3 url encoder </a>
</body>
</html>
