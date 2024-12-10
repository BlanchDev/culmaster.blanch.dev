<?php require $_SERVER["DOCUMENT_ROOT"]."/resources/css/mainStyle.php" ?>

<?php 

if (strstr($_SERVER['PHP_SELF'], "home")) {
	$activeAnaSayfa = "active";
	$pageName = "anasayfa";
}

if (strstr($_SERVER['PHP_SELF'], "pricing")) {
	$activeSatinAl = "active";
	$pageName = "satinal";
}

if (strstr($_SERVER['PHP_SELF'], "faq")) {
	$activeSSS = "active";
	$pageName = "sss";
}

if (strstr($_SERVER['PHP_SELF'], "servers")) {
	$activeServerler = "active";
	$pageName = "serverler";
}

?>

<header>
	<div class="container">
		<div class="left">

			<img class="header-logo" style="cursor: pointer;" onclick="location.href = '/en/home';" src="/resources/photos/header-logo.webp" alt="cul master header logo">
			
			<a class="lang" href="/tr/<?php echo $pageName; ?>" title="">TR <i class="fa-solid fa-globe"></i></a>
		</div>
		<div class="right">
			<div class="navs">
				<a class="nav <?php echo $activeAnaSayfa; ?>" href="/en/home" title="Home">HOME</a>
				<a class="nav <?php echo $activeSatinAl; ?>" href="/en/pricing" title="Buy Cul Master Metin 2 hack" style="color: lightyellow;">BUY NOW</a>
				<a class="nav <?php echo $activeSSS; ?>" href="/en/faq" title="Frequently Asked Questions">F.A.Q</a>
				<a class="nav <?php echo $activeServerler; ?>" href="/en/servers" title="Server List">SERVERS</a>
				<a class="nav" href="https://discord.culmaster.com.tr" target="_blank" title="Discord Link" style="border: none;"><i style="background: #5662F6; color: snow; border-radius: 50%; padding: 7px;" class="fa-brands fa-discord"></i></a>
			</div>
			<a class="redBtn-radius" href="/en/pricing" title="Cul Master Hack Versions">Versions</a>
		</div>
		<div class="mobileRight" id="mobileMenuBtn">
			<i style="color: white; font-size: 2em;" class="fa-solid fa-bars"></i>
		</div>
	</div>
</header>

<div class="mobileNavs" id="mobileMenu">
	<a class="nav <?php echo $activeAnaSayfa; ?>" href="/en/home" title="Home">HOME</a>
	<a class="nav <?php echo $activeSatinAl; ?>" href="/en/pricing" title="Buy Cul Master Metin 2 hack" style="color: lightyellow;">BUY NOW</a>
	<a class="nav <?php echo $activeSSS; ?>" href="/en/faq" title="Frequently Asked Questions">F.A.Q</a>
	<a class="nav <?php echo $activeServerler; ?>" href="/en/servers" title="Server List">SERVERS</a>
	<a class="nav" href="https://discord.culmaster.com.tr" target="_blank" title="Discord Link" style="border: none;"><i style="background: #5662F6; color: snow; border-radius: 50%; padding: 7px;" class="fa-brands fa-discord"></i></a>
	<a class="redBtn-radius" href="/en/pricing" title="Cul Master Hack Versions">Versions</a>
	<a class="nav" href="/tr/<?php echo $pageName; ?>" title="Sayfayı İngilizce yap">EN <i class="fa-solid fa-globe"></i></a>
</div>

<script type="text/javascript">
	
	$("#mobileMenuBtn").click(function(){
		
		if($("#mobileMenu").css("display") == "none"){
			$("#mobileMenu").css({"display":"flex"});
		}else{
			$("#mobileMenu").css({"display":"none"});
		}

	});

</script>

<div class="mainflexbox">