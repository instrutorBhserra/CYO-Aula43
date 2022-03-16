<?php

$br = "<br>";

function echoLen($str){
	$len = strlen($str);
	echo "Length: $len";
}

function defineStr(){
	global $str;
	if(isset($_GET['str'])){
		$str = $_GET['str'];
	}else{
		$str = "This is one string.";
	}
}

function defineChar(){
	global $char;
	if(isset($_GET['char'])){
		$char = $_GET['char'];
	}else{
		$char = " ";
	}
	return $char;
}

function defineInterval(){
	global $interval;
	if(isset($_GET['interval'])){
		$interval = $_GET['interval'];
	}else{
		$interval = 3;
	}
}


function tableAssembly($arr){
	?>
<table>
	<tr>
		<th>Key</th>
		<th>Value</th>
	</tr>
<?php
foreach($arr as $key => $value){
echo "<tr>";

echo "<td>$key</td>";
echo "<td>$value</td>";

echo "</tr>";
}
?>
</table>
<?php
}
?>


