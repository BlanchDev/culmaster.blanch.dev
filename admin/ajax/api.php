<?php 

if (isset($_POST['filename']) AND isset($_POST['content']) ) {
	
	$dosyaName = $_SERVER["DOCUMENT_ROOT"]."/bothPull/".$_POST['filename'].".txt";

	echo $dosyaName;

	$dosya = fopen($dosyaName, 'w');
	fwrite($dosya, $_POST['content']);
	fclose($dosya);


}




?>