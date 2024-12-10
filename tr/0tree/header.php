<?php require $_SERVER["DOCUMENT_ROOT"]."/resources/css/mainStyle.php" ?>

<?php 

if (strstr($_SERVER['PHP_SELF'], "anasayfa")) {
	$activeAnaSayfa = "active";
	$pageName = "home";
}

if (strstr($_SERVER['PHP_SELF'], "satinal")) {
	$activeSatinAl = "active";
	$pageName = "pricing";
}

if (strstr($_SERVER['PHP_SELF'], "sss")) {
	$activeSSS = "active";
	$pageName = "faq";
}

if (strstr($_SERVER['PHP_SELF'], "serverler")) {
	$activeServerler = "active";
	$pageName = "servers";
}

?>

<header>
	<div class="container">
		<div class="left">

			<img class="header-logo" style="cursor: pointer;" onclick="location.href = '/tr/anasayfa';" src="/resources/photos/header-logo.webp" alt="cul master header logo">
			
			<a class="lang" href="/en/<?php echo $pageName; ?>" title="">EN <i class="fa-solid fa-globe"></i></a>
		</div>
		<div class="right">
			<div class="navs">
				<a class="nav <?php echo $activeAnaSayfa; ?>" href="/tr/anasayfa" title="Ana Sayfa">ANA SAYFA</a>
				<a class="nav <?php echo $activeSatinAl; ?>" href="/tr/satinal" title="Cul Master Metin 2 hilesi satın al" style="color: lightyellow;">SATIN AL</a>
				<a class="nav <?php echo $activeSSS; ?>" href="/tr/sss" title="Sıkça Sorulan Sorular">S.S.S</a>
				<a class="nav <?php echo $activeServerler; ?>" href="/tr/serverler" title="Server Listesi">SERVERLER</a>
				<a class="nav" href="https://discord.culmaster.com.tr" target="_blank" title="Discord Link" style="border: none;"><i style="background: #5662F6; color: snow; border-radius: 50%; padding: 7px;" class="fa-brands fa-discord"></i></a>
			</div>
			<a class="redBtn-radius" href="/tr/satinal" title="Cul Master Metin2 Hile Sürümleri">Sürümler</a>
		</div>
		<div class="mobileRight" id="mobileMenuBtn">
			<i style="color: white; font-size: 2em;" class="fa-solid fa-bars"></i>
		</div>
	</div>
</header>

<div class="mobileNavs" id="mobileMenu">
	<a class="nav <?php echo $activeAnaSayfa; ?>" href="/tr/anasayfa" title="Ana Sayfa">ANA SAYFA</a>
	<a class="nav <?php echo $activeSatinAl; ?>" href="/tr/satinal" title="Cul Master Metin 2 hilesi satın al" style="color: lightyellow;">SATIN AL</a>
	<a class="nav <?php echo $activeSSS; ?>" href="/tr/sss" title="Sıkça Sorulan Sorular">S.S.S</a>
	<a class="nav <?php echo $activeServerler; ?>" href="/tr/serverler" title="Server Listesi">SERVERLER</a>
	<a class="nav" href="https://discord.culmaster.com.tr " target="_blank" title="Discord Link" style="border: none;"><i style="background: #5662F6; color: snow; border-radius: 50%; padding: 7px;" class="fa-brands fa-discord"></i></a>
	<a class="redBtn-radius" href="/tr/satinal" title="Cul Master Metin2 Hile Sürümleri">Sürümler</a>
	<a class="nav" href="/en/<?php echo $pageName; ?>" title="Click to make the page in English">TR <i class="fa-solid fa-globe"></i></a>
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