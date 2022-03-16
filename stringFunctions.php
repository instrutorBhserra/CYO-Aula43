<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="style.css">
	<title>String Functions</title>
</head>
<body>
	<h1>String Functions</h1>
<?php
$myString = "this sentence has no upper case.";
$sentence = "This is a propper sentence.";
$name = "Juvenal Juvento Joarez";

$br = "<br>";

echo $br;
echo "<b>strtolower()</b><br>";
echo strtolower($myString) . $br;
echo strtolower($name) . $br;
echo strtolower($sentence) . $br;

echo $br;
echo "<b>strtoupper()</b><br>";
echo strtoupper($myString) . $br;
echo strtoupper($name) . $br;
echo strtoupper($sentence) . $br;

echo $br;
echo "<b>ucfirst()</b><br>";
echo ucfirst($myString) . $br;
echo ucfirst($name) . $br;
echo strtoupper($sentence) . $br;

echo $br;
echo "<b>ucwords()</b><br>";
echo ucwords($myString) . $br;
echo ucwords($name) . $br;
echo ucwords($sentence) . $br;


?>
</body>
</html>
