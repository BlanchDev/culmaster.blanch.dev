<?php 

$url = $_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];


if ($url == "www.culmaster.com.tr/admin/panel" OR $url == "culmaster.com.tr/admin/panel") {

	$dcinvContent = file_get_contents($_SERVER["DOCUMENT_ROOT"].'/bothPull/dclink.txt');

	$youtubeContent = file_get_contents($_SERVER["DOCUMENT_ROOT"].'/bothPull/youtubeVideo.txt');

	$primeServers = file_get_contents($_SERVER["DOCUMENT_ROOT"].'/bothPull/primeplusServers.txt');

	$globalServers = file_get_contents($_SERVER["DOCUMENT_ROOT"].'/bothPull/globalplusServers.txt');

	?>



	<div class="adminPanel sidepage">

		<style type="text/css" media="screen">
			.pageBanner{
				background: url("/resources/photos/sidepageBlur.webp") !important;
			}
		</style>
		<div class="pageBanner">

			<div class="pageTitle">
				<h1>Admin Paneline Hoşgeldiniz</h1>
			</div>

		</div>

		<div class="container">

			<div class="desc">
				<p>Cul Master sitesindeki içerikleri bu panel üzerinden değiştirebilirsiniz.</p>
			</div>

			<style type="text/css" media="screen">

				.contentArea{
					display: flex;
					flex-direction: column;
					row-gap: 50px;
				}
				.contentEditArea{
					display: flex;
					flex-direction: column;
					row-gap: 20px;
					border-bottom: 3px dotted #606060;
					height: 100%;
					padding-bottom:20px;
				}
				.contentEditArea > .saveBtn,
				.contentEditArea > .row > .editTextArea > .saveBtn{
					border: none;
					outline: none;
					border-radius: 10px;
					font-size: 1.3em;
					color: snow;
					padding: 10px 0px;
					background: #666279;
					transition: all 0.2s ease;
					cursor: pointer;
					width: 100%;
				}
				.contentEditArea > .saveBtn:hover,
				.contentEditArea > .row > .editTextArea > .saveBtn:hover{
					background: yellowgreen;
					color: black;
					transition: all 0.2s ease;
				}
				.contentEditArea > h1{
					color: snow;
					margin: 0;
					width: 100%;
					text-align: center;
				}
				.contentEditArea > h1 > a{
					color: silver;
					cursor: pointer;
				}
				.contentEditArea > .editTextArea{
					width: 1050px;
				}

				.contentEditArea > .row{
					display: flex;
					flex-direction: row;
					flex-wrap: wrap;
					column-gap: 20px;
					row-gap: 20px;
					justify-content: space-between;
				}
				.contentEditArea > .row > .editTextArea{
					width: 100%;
					height: 100%;
					color: snow;
				}
				.contentEditArea > .editTextArea > textarea,
				.contentEditArea > .row > .editTextArea > textarea{
					width: calc(100% - 50px);
					height: calc(100% - 10px);
					padding: 10px 25px;
					outline: none;
					border: none;
					background: #56526A;
					color: snow;
					font-size: 1.4em;
					border-radius: 10px;
					overflow-y: auto;
				}

				.contentEditArea > .row > .editTextArea > textarea{
					height: 700px;
				}

			</style>

			<div class="contentArea">

				<div class="contentEditArea">
					<h1><a href="http://discord.culmaster.com.tr/" target="_blank" title="'Davet' sayfasına gider." ><i class="fa-solid fa-link"></i>[Davet]</a> Discord Davet Linki</h1>
					<div class="editTextArea">
						<textarea id="dclinkText"><?php echo $dcinvContent; ?></textarea>
					</div>
					<button class="saveBtn" id="dclink">Kaydet</button>
				</div>

				<div class="contentEditArea">
					<h1><a href="/tr/anasayfa" target="_blank" title="'Ana Sayfa' sayfasına gider." ><i class="fa-solid fa-link"></i>[Ana Sayfa]</a> Youtube Video</h1>
					<div class="editTextArea">
						<textarea id="youtubeVideoText"><?php echo $youtubeContent; ?></textarea>
					</div>
					<button class="saveBtn" id="youtubeVideo">Kaydet</button>
				</div>

				<div class="contentEditArea">
					<h1><a href="/tr/serverler" target="_blank" title="'Serverler' sayfasına gider." ><i class="fa-solid fa-link"></i>[Serverler]</a> Aktif Serverler</h1>
					<div class="row">
						<div class="editTextArea">
							<h1>TR Pvp PRIME++</h1>
							<textarea id="primeplusServersText"><?php echo $primeServers; ?></textarea>
							<button class="saveBtn" id="primeplusServers" >Kaydet</button>
						</div>
						<div class="editTextArea">
							<h1>Global Pvp GLOBAL++</h1>
							<textarea id="globalplusServersText"><?php echo $globalServers; ?></textarea>
							<button class="saveBtn" id="globalplusServers" >Kaydet</button>
						</div>
					</div>
				</div>

			</div>

		</div>

	</div>

	<script type="text/javascript" charset="utf-8" async defer>
		
		$(".saveBtn").click(function(){

			var fileName = this.id;
			var fileContent = $("#"+fileName+"Text").val();


			$.post("https://www.culmaster.com.tr/admin/ajax/api.php",{
				filename:fileName,
				content:fileContent
			},
			function(data,status){
				location.href = "https://www.culmaster.com.tr/admin/panel";
			});
		});


	</script>

	<style type="text/css" media="screen">

		@media only screen and (max-width: 1050px) {

			.contentEditArea > .editTextArea{
				width: 100%;
			}

		}

	</style>



	<?php 

}

?>