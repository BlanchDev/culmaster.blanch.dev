	<style type="text/css" media="screen">
		.welcome-title{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			width: 100%;
			height: 700px;
			background: url("/resources/photos/sidepageBlur.webp");
		}
		.welcome-title > .container{
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			text-align: center;
			color: whitesmoke;
		}
		.welcome-title > .container > .logo{
			display: flex;
			flex-direction: row;
			column-gap: 20px;
			align-items: center;
			justify-content: center;
		}
		.welcome-title > .container > h1{
			font-family: 'Russo One';
			font-size: 2.4em;
			text-rendering:optimizeSpeed;
			border-top:1px solid #606060;
			border-bottom:1px solid #606060;
			padding: 20px 30px;
		}
		.welcome-title > .container > h1 > p{
			font-family: "Blinker";
			font-size: 0.5em;
			margin-bottom: -1px;
			color: silver;
		}

		.welcome-title > .container > .mainnavs{
			display: flex;
			flex-direction: row;
			column-gap: 25px;
			row-gap: 25px;
			flex-wrap: wrap;
			align-items: center;
			justify-content: center;
		}
	</style>


	<style type="text/css" media="screen">
		.welcome-desc{
			margin-top: 25px;
			width: 100%;
			height: auto;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			padding: 50px 0px;
			background: #292734;
		}
		.welcome-desc > .container{
			width: 100%;
			height: 100%;
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			column-gap: 70px;
			row-gap: 50px;
			align-items: center;
			justify-content: center;
		}
		.welcome-desc > .container > .desc{
			width: 550px;
			height: 100%;
			display: flex;
			flex-direction: column;
			align-items: center;
			text-align: center;
			background: rgb(0,38,2);
			background: radial-gradient(circle, rgba(0,38,2,1) 0%, rgba(0,29,0,1) 25%, rgba(14,38,0,1) 41%, rgba(50,144,0,1) 100%); 
			box-shadow: 0px 0px 15px #606060;
			border-radius: 20px;
			padding: 0px 20px;
			padding-bottom: 30px;
		}
		.welcome-desc > .container > .desc > h1{
			font-family: 'Russo One';
			font-size: 1.7em;
			color: #cffdca;
		}
		.welcome-desc > .container > .desc > div {
			background: #292734;
			width: 630px;
		}
		.welcome-desc > .container > .desc > div > p{
			font-family: 'Blinker';
			font-size: 1.2em;
			color: #D4D4D6;
		}
		.welcome-desc > .container > .youtubevid{
			width: 510px;
			height: 450px;
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: space-between;
		}
		.welcome-desc > .container > .youtubevid > iframe{
			width: 100% !important;
			height: 315px !important;
		}
	</style>

	<style type="text/css" media="screen">
		.metinhack{
			margin-top: 100px;
			width: 100%;
			height: auto;
			display: flex;
			flex-direction: column;
			row-gap: 50px;
			align-items: center;
			justify-content: center;
			padding: 50px 0px;
			background-image: url("/resources/photos/leftman.webp"), url("/resources/photos/rightman.webp");
			background-color: #292735;
			background-repeat: no-repeat, no-repeat;
			background-position: left, right;
		}
		.metinhack > .container{
			width: 100%;
			height: 100%;
			display: flex;
			flex-direction: column;
			flex-wrap: wrap;
			align-items: center;
			justify-content: center;
		}
		.metinhack > .container > .desc{
			margin-top: -50px;
			margin-bottom: 20px;
			width: 520px;
			display: flex;
			flex-direction: column;
			flex-wrap: wrap;
			align-items: center;
			justify-content: center;
		}
		.metinhack > .container > .desc > h1{
			font-family: 'Russo One';
			font-size: 1.7em;
			color: white;
			margin-bottom: 0px;
		}

		.metinhack > .container > .desc > div {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: center;
			text-align: center;
		}
		.metinhack > .container > .desc > div > p{
			font-size: 1.5em;
			color: #F1F1F1;
			margin-bottom: 0px;
		}
	</style>

	<style type="text/css" media="screen">
		.memnuniyet{
			width: 100%;
			height: auto;
			display: flex;
			flex-direction: column;
			row-gap: 50px;
			align-items: center;
			justify-content: center;
			padding: 50px 0px;
			background-color: #39364e;
			background-image: url("/resources/photos/memnuniyetBlur.webp");
			background-repeat: no-repeat;
			background-position: center;
			background-size: cover;	
		}
		.memnuniyet > .visual{
			width: 50px;
			height: 50px;
			background: #292735;
			transform: rotate(45deg);
			margin-top: -80px;
			border-radius: 10px;
		}
		.memnuniyet > .container{
			width: 100%;
			height: 100%;
			display: flex;
			flex-direction: column;
			flex-wrap: wrap;
			column-gap: 50px;
			row-gap: 50px;
			align-items: center;
			justify-content: center;
		}

		.memnuniyet > .container > .discord{
			display: flex;
			flex-direction: row;
			column-gap: 20px;
			row-gap: 20px;
			align-items: center;
			justify-content: space-between;
			flex-wrap: wrap;
		}

		.memnuniyet > .container > .discord > .discordPanel{
			display: flex;
			flex-direction: row;
			height: 700px;
			box-shadow: 0px 0px 15px #505050;
			border-radius: 25px;
		}
		.memnuniyet > .container > .discord > .discordPanel > .mainBar{
			display: flex;
			flex-direction: row;
		}
		.memnuniyet > .container > .discord > .discordPanel > .mainBar > .leftBar{
			border-radius: 25px 0px 0px 25px;
			display: flex;
			flex-direction: column;
			align-items: center;
			row-gap: 15px;
			padding-top: 25px;
			width: 70px;
			height: calc(100% - 25px);
			background: rgb(21,90,95);
			background: linear-gradient(165deg, rgba(21,90,95,1) 10%, rgba(32,52,102,1) 39%, rgba(40,19,108,1) 72%, rgba(58,12,99,1) 100%); 
		}
		.memnuniyet > .container > .discord > .discordPanel > .mainBar > .leftBar > .guild{
			width: 50px;
			height: 50px;
			border-radius: 50%;
			background: rgb(36,7,37);
			background: radial-gradient(circle, rgba(36,7,37,1) 24%, rgba(35,16,56,1) 53%, rgba(22,47,37,1) 100%); 
		}
		.memnuniyet > .container > .discord > .discordPanel > .mainBar > .leftBar > img{
			width: 60px;
			height: 60px;
			border-radius: 50%;
			box-shadow: 2px 2px 5px #151515;
		}
		.memnuniyet > .container > .discord > .discordPanel > .mainBar > .rightBar{
			display: flex;
			flex-direction: column;
			align-items: center;
			row-gap: 10px;
			padding-top: 20px;
			width: 240px;
			height: calc(100% - 20px);
			background: rgb(14,49,58);
			background: linear-gradient(135deg, rgba(14,49,58,1) 10%, rgba(19,29,61,1) 27%, rgba(29,8,64,1) 54%, rgba(49,7,50,1) 100%); 
		}
		.memnuniyet > .container > .discord > .discordPanel > .mainBar > .rightBar > .guildName{
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: center;
			column-gap: 10px;
			color: snow;
			margin-bottom: 20px;
			padding-bottom: 20px;
			width: 100%;
			height: 20px;
			border-bottom: 1px solid #10102E;
		}
		.memnuniyet > .container > .discord > .discordPanel > .mainBar > .rightBar > .channel1{
			width: 90%;
			height: 35px;
			border-radius: 10px;
			background: rgb(13,28,6);
			background: linear-gradient(135deg, rgba(36,7,37,1) 28%, rgba(35,16,56,1) 63%); 
		}
		.memnuniyet > .container > .discord > .discordPanel > .mainBar > .rightBar > .channel2{
			width: 90%;
			height: 35px;
			border-radius: 10px;
			background: rgb(13,28,6);
			background: linear-gradient(328deg, rgba(36,7,37,1) 28%, rgba(35,16,56,1) 63%); 
		}
		.memnuniyet > .container > .discord > .discordPanel > .mainBar > .rightBar > .channelActive{
			display: flex;
			flex-direction: row;
			align-items: center;
			column-gap: 5px;
			padding: 0px 10px;
			width: calc(90% - 20px);
			height: 35px;
			border-radius: 5px;
			background: rgb(81,53,149);
			background: linear-gradient(106deg, rgba(81,53,149,1) 10%, rgba(79,58,149,1) 45%, rgba(111,49,129,1) 94%);  
			color: #F2F3EF;
		}
		.memnuniyet > .container > .discord > .discordPanel > .contentBar{
			border-radius: 0px 25px 25px 0px;
			display: flex;
			flex-direction: column;
			justify-content: space-between;
			row-gap: 10px;
			width: 650px;
			height: 100%;
			background: rgb(16,8,44);
			background: linear-gradient(135deg, rgba(16,8,44,1) 17%, rgba(32,4,33,1) 38%, rgba(32,16,49,1) 60%, rgba(30,17,49,1) 75%, rgba(16,26,46,1) 88%); 
			color: snow;
		}
		.memnuniyet > .container > .discord > .discordPanel > .contentBar > .pageTitle{
			display: flex;
			flex-direction: row;
			column-gap: 15px;
			padding: 0px 20px;
			padding-bottom: 20px;
			width: calc(100% - 40px);
			height: 40px;
			border-bottom: 1px solid #10102E;
		}
		.memnuniyet > .container > .discord > .discordPanel > .contentBar > .comments{
			display: flex;
			flex-direction: column;
			row-gap: 15px;
			width: auto;
			height: 100%;
			padding: 25px;
			overflow-y: auto;
		}
		.memnuniyet > .container > .discord > .discordPanel > .contentBar > .comments > .yorum{
			display: flex;
			flex-direction: row;
			column-gap: 15px;
			max-width: 92%;
		}
		.memnuniyet > .container > .discord > .discordPanel > .contentBar > .comments > .yorum > img{
			width: 40px;
			height: 40px;
			border-radius: 50%;
		}
		.memnuniyet > .container > .discord > .discordPanel > .contentBar > .comments > .yorum > .data{
			display: flex;
			flex-direction: column;
			row-gap: 0px;
		}
		.memnuniyet > .container > .discord > .discordPanel > .contentBar > .comments > .yorum > .data > .userName{
			display: flex;
			flex-direction: row;
			column-gap: 15px;
			align-items: center;
			font-weight: 600;
		}
		.memnuniyet > .container > .discord > .discordPanel > .contentBar > .comments > .yorum > .data > .userName > .tarih{
			font-size: 0.7em;
			color: gray;
			font-weight: lighter;
			font-family: serif;
		}
		.memnuniyet > .container > .discord > .discordPanel > .contentBar > .andMore{
			display: flex;
			flex-direction: row;
			align-items: center;
			justify-content: center;
			color: silver;
			font-size: 0.6em;
		}

		.memnuniyet > .container > .mostwanted{
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			column-gap: 10px;
			row-gap: 10px;
			align-items: center;
			justify-content: center;
			text-align: center;
		}
		.memnuniyet > .container > .mostwanted > h1{
			font-family: 'Russo One';
			font-size: 1.3em;
			color: white;
			margin-bottom: 0px;
		}
	</style>

	<style type="text/css" media="screen">
		.featurevideo{
			width: 100%;
			height: auto;
			display: flex;
			flex-direction: column;
			row-gap: 50px;
			align-items: center;
			justify-content: center;
			padding: 50px 0px;
			background: #5D6072;
		}
		.featurevideo > .visual{
			display: none;

			width: 50px;
			height: 50px;
			background: #39364e;
			transform: rotate(45deg);
			margin-top: -80px;
			border-radius: 10px;
		}
		.featurevideo > .container{
			width: 100%;
			height: 100%;
			display: flex;
			flex-direction: row;
			flex-wrap: wrap;
			column-gap: 50px;
			row-gap: 50px;
			align-items: center;
			justify-content: center;
		}

		.featurevideo > .container > .video{
			width: 100%;
			height: auto;
		}
	</style>

	<style type="text/css" media="screen">

		@media only screen and (max-width: 1050px) {
			.welcome-title{
				height: auto;
				padding: 50px 0px;
			}


			.welcome-desc > .container > .desc{
				width: 70%;
			}
			.welcome-desc > .container > .desc > h1{
				font-size: 1.3em;
			}
			.welcome-desc > .container > .desc > div {
				width: 120%;
			}
			.welcome-desc > .container > .desc > div > p{
				font-size: 1.2em;
			}
			.welcome-desc > .container > .youtubevid{
				width: 95%;
			}
			.welcome-desc > .container > .youtubevid > a{
				font-size: 1.2em !important;
			}


			.metinhack{
				background-image: none;
				background-color: #292734;
			}
			.metinhack > .container > video{
				display: none;
			}
			.metinhack > .container > a{
				font-size: 1em;
			}
			.metinhack > .container > .desc{
				width: 95%;
			}
			.metinhack > .container > .desc > h1{
				font-size: 1.3em;
			}
			.metinhack > .container > .desc > div > p{
				font-size: 1.2em;
			}

			.memnuniyet > .container > .discord{
				justify-content: center;
			}
			.memnuniyet > .container > .discord > .discordPanel{
				width: 99%;
			}
			.memnuniyet > .container > .discord > .discordPanel > .contentBar{
				width: 99%;
			}
		}

	</style>