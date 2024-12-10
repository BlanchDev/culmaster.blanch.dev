<?php 

$userLang =  substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0,2);
if($userLang == "tr"){
	header("Location:http://culmaster.blanch.dev/tr/anasayfa");
}else{
	header("Location:http://culmaster.blanch.dev/en/home");
}

?>

