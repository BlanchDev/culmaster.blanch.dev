<style type="text/css" media="screen">
	
	@import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');

	@import url('https://fonts.googleapis.com/css2?family=Blinker&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Secular+One&display=swap');
	@import url('https://fonts.googleapis.com/css2?family=Russo+One&display=swap');



	body{
		padding:0;
		margin:0;
		width: 100%;
		height: 100%;
		background: #292734;
		font-family: 'Blinker';
		text-rendering:optimizeSpeed;
		line-height: 1.6;
		text-shadow: 1px 1px 1px #080808;
	}

	.mainflexbox{
		width: 100%;
		height: 100%;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: center;
		margin-top: 80px;
	}

	h1{
		font-family: 'Russo One';
		font-size: 1.7em;
	}
	p{
		font-family: 'Blinker';
		font-size: 1.2em;
	}

	.redBtn-radius{
		text-align: center;
		cursor: pointer;
		font-family: 'Secular One';
		color: whitesmoke;
		background: rgb(142,44,52);
		background: linear-gradient(145deg, rgba(142,44,52,1) 0%, rgba(75,16,0,1) 70%, rgba(64,0,0,1) 100%); 
		text-decoration: none;
		outline: 1px solid black;
		padding: 12px 30px;
		font-size: 1.2em;
		transition: all 0.3s ease;
		border-radius: 7px;
	}
	.redBtn-radius:hover{
		background: #742329;
		transition: all 0.3s ease;
		outline: 1px solid #444444;
	}

	.redBtn-sharp{
		text-align: center;
		cursor: pointer;
		font-family: 'Russo One';
		color: whitesmoke;
		background: rgb(142,44,52);
		background: linear-gradient(145deg, rgba(142,44,52,1) 0%, rgba(75,16,0,1) 70%, rgba(64,0,0,1) 100%); 
		text-decoration: none;
		padding: 12px 30px;
		font-size: 1.2em;
		text-shadow: 1px 1px 2px black;
		transition: all 0.3s ease;
		outline: 1px solid black;
	}
	.redBtn-sharp:hover{
		background: #742329;
		transition: all 0.3s ease;
		outline: 1px solid #444444;
	}
	.redBtn-border{
		text-align: center;
		cursor: pointer;
		font-family: 'Russo One';
		color: whitesmoke;
		background: rgba(0, 0, 0, 0.0);
		border: 5px solid #8E2C34;
		text-decoration: none;
		padding: 7px 25px;
		font-size: 1.2em;
		text-shadow: 1px 1px 2px black;
		transition: all 0.3s ease;
	}
	.redBtn-border:hover{
		background: rgb(142,44,52);
		background: linear-gradient(145deg, rgba(142,44,52,1) 0%, rgba(75,16,0,1) 70%, rgba(64,0,0,1) 100%); 
		transition: all 0.3s ease;
		border: 0px solid #444444;
		padding: 12px 30px;
	}

	@media only screen and (max-width: 1050px) {
		.mainflexbox{
			margin-top: 0px;
		}

		h1{
			font-size: 1.3em;
		}
		p{
			font-size: 1.2em;
		}
	}

</style>

<?php require $_SERVER["DOCUMENT_ROOT"]."/resources/css/headerStyle.php" ?>
<?php require $_SERVER["DOCUMENT_ROOT"]."/resources/css/footerStyle.php" ?>

<?php require $_SERVER["DOCUMENT_ROOT"]."/resources/css/anasayfaStyle.php" ?>

<?php require $_SERVER["DOCUMENT_ROOT"]."/resources/css/sidePageStyle.php" ?>
<?php require $_SERVER["DOCUMENT_ROOT"]."/resources/css/satinalStyle.php" ?>
<?php require $_SERVER["DOCUMENT_ROOT"]."/resources/css/sssStyle.php" ?>
<?php require $_SERVER["DOCUMENT_ROOT"]."/resources/css/serverlerStyle.php" ?>
<?php require $_SERVER["DOCUMENT_ROOT"]."/resources/css/uyelikStyle.php" ?>