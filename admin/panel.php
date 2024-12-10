<!DOCTYPE html>
<html lang="tr">
<head>
	<?php
	ob_start();
	session_start();
	require ($_SERVER["DOCUMENT_ROOT"]."/head.php");
	?>
	<meta name="description" content="Cul Master sitesindeki içerikleri bu panel üzerinden değiştirebilirsiniz.">
	<meta name="robots" content="noindex" />
	<title>Admin Panel - Cul Master</title>
</head>
<body>

	<?php

	if ($_GET['adminLogin'] == "true" AND empty($_COOKIE['adminLogin']) ) {
		setcookie("cookie", "test", time() + (86400 * 360), "/admin/panel");
		header("Location:https://www.culmaster.com.tr/admin/panel");
	}

	if($_COOKIE['adminLogin'] == "true"){
		require ($_SERVER["DOCUMENT_ROOT"]."/tr/0tree/header.php");
		require ($_SERVER["DOCUMENT_ROOT"]."/admin/panel/content.php");
		require ($_SERVER["DOCUMENT_ROOT"]."/tr/0tree/footer.php");
	}



	?>

</body>
</html>