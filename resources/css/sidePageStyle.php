<style type="text/css" media="screen">
	
	.sidepage{
		display: flex;
		flex-direction: column;
		row-gap: 50px;
		align-items: center;
		width: 100%;
		height: 100%;
		background-color: #39364e;
		background-repeat: no-repeat;
		background-position: right;
		padding: 50px 0px;
	}

	.sidepage > .pageBanner{
		margin-top: -50px;
		display: flex;
		flex-direction: column;
		width: 100%;
		height: 400px;
		align-items: center;
		justify-content: center;
		background: url("/resources/photos/bannerBlur.webp");
	}

	.sidepage > .pageBanner > .pageTitle{
		border-top: 1px solid #5d5d5d;
		border-bottom: 1px solid #5d5d5d;
		display: flex;
		flex-direction: column;
		row-gap: 30px;
		align-items: center;
		justify-content: center;
		text-align: center;
		width: 1050px;
		height: 200px;
	}
	.sidepage > .pageBanner > .pageTitle > h1{
		color: snow;
		margin: 0px;
		width: 100%;
		font-size: 2.5em;
	}

	.sidepage > .pageBanner > .pageTitle > .pusula{
		display: flex;
		flex-direction: column;
		height: max-content;
		color: white;
	}
	.sidepage > .pageBanner > .pageTitle > .pusula > p{
		display: flex;
		flex-direction: row;
		column-gap: 10px;
		line-height: 0px;
		margin: 0;
	}
	.sidepage > .pageBanner > .pageTitle > .pusula > p > a{
		color: silver;
		z-index: 9;
	}

	.sidepage > .container{
		display: flex;
		flex-direction: column;
		row-gap: 10px;
		width: 1050px;
	}
	.sidepage > .container > .row{
		display: flex;
		flex-direction: row;
		column-gap: 10px;
		row-gap: 30px;
		flex-wrap: wrap;
		justify-content: space-between;
		width: 100%;
	}

	.sidepage > .container > .desc{
		display: flex;
		flex-direction: column;
		width: 100%;
		border-bottom: 1px solid #5d5d5d;
		padding-bottom:30px;
	}
	.sidepage > .container > .desc > p{
		color: snow;
		font-size: 1.5em;
		line-height: 1.5em !important;
		white-space: pre-line;
	}

	.sidepage > .container > p{
		color: snow;
		margin-bottom: -40px;
		margin-top: 40px;
		font-size: 1.5em;
		text-align: center;
	}

	.sidepage > .container > .detay{
		display: none;
		flex-direction: column;
		width: 100%;
		align-items: center;
		border-bottom: 2px dotted #5d5d5d;
		padding-bottom: 20px;
	}
	.sidepage > .container > .detay > h1{
		color: snow;
	}
	.sidepage > .container > .detay > .store{
		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: center;
		column-gap: 50px;
	}


	.sidepage > .container > .baslik{
		display: flex;
		flex-direction: column;
		border-bottom: 2px dotted #5d5d5d;
	}
	.sidepage > .container > .baslik > h1{
		color: floralwhite;
		font-weight: lighter;
		margin-bottom: 0px;
		font-size: 1.5em;
	}
	.sidepage > .container > .baslik > .desc{
		font-weight: lighter;
		margin-bottom: 0px;
	}
	.sidepage > .container > .baslik > .desc > p{
		color: #e3e3e8;
		font-size: 1.4em;
	}

	.sidepage > .container > .row > .serverlist{
		display: flex;
		flex-direction: column;
		border-bottom: 2px dotted #5d5d5d;
		height: max-content;
	}
	.sidepage > .container > .row > .serverlist > h1{
		color: floralwhite;
		font-weight: lighter;
		margin-bottom: 0px;
		font-size: 1.5em;
	}
	.sidepage > .container > .row > .serverlist > .desc{
		font-weight: lighter;
		margin-bottom: 0px;
	}
	.sidepage > .container > .row > .serverlist > .desc > p{
		color: #e3e3e8;
		font-size: 1.2em;
		white-space: pre-line;
		line-height: 1.1em;
		margin-bottom: 0px;
	}

	.sidepage > .container > .row > .box{
		color: snow;
		background: #494561;
		border-radius: 30px;
		width: 48%;
		height: 600px;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: space-between;
		box-shadow: 0px 0px 10px #333333;
	}
	.sidepage > .container > .row > .box > .boxHeader{
		border-bottom: 0px solid #3c355f;
		width: 100%;
		height: 80px;
		text-align: center;
		background: rgb(142,44,52);
		background: linear-gradient(145deg, rgba(142,44,52,1) 0%, rgba(75,16,0,1) 70%, rgba(64,0,0,1) 100%);
		border-radius: 20px 20px 0px 0px;
	}
	.sidepage > .container > .row > .box > .boxHeader > h1{
		padding: 0px 25px;
	}
	.sidepage > .container > .row > .box > .boxFooter{
		border-top: 0px solid #3c355f;
		width: 100%;
		height: 80px;
		text-align: center;
		background: rgb(142,44,52);
		background: linear-gradient(145deg, rgba(142,44,52,1) 0%, rgba(75,16,0,1) 70%, rgba(64,0,0,1) 100%);
		border-radius: 0px 0px 20px 20px;
	}
	.sidepage > .container > .row > .box > form{
		display: flex;
		flex-direction: column;
		row-gap: 20px;
		width: 70%;
	}
	.sidepage > .container > .row > .box > form > .dataArea{
		display: flex;
		flex-direction: column;
		row-gap: 5px;
	}
	.sidepage > .container > .row > .box > form > .dataArea > label{
		color: silver;
	}
	.sidepage > .container > .row > .box > form > .dataArea > input[type=text],
	.sidepage > .container > .row > .box > form > .dataArea > input[type=password]{
		border:none;
		outline:3px solid #514d6d;
		background: #56526a;
		padding: 10px 20px;
		color: ghostwhite;
		border-radius: 10px;
		font-size: 1.3em;
		transition: all 0.2s ease;
	}
	.sidepage > .container > .row > .box > form > .dataArea > input[type=text]:focus,
	.sidepage > .container > .row > .box > form > .dataArea > input[type=password]:focus{
		outline:3px solid #602E4B;
		transition: all 0.2s ease;
		background: #666279;
	}
	.sidepage > .container > .row > .box > form > .dataSubmit{
		margin-top: 15px;
	}
	.sidepage > .container > .row > .box > form > .dataSubmit > input[type=button]{
		border:none;
		outline:0px solid #3c355f;
		background: #666279;
		padding: 10px 20px;
		color: ghostwhite;
		border-radius: 10px;
		font-size: 1.3em;
		cursor: pointer;
		box-shadow: 0px 0px 5px #606060;
		transition: all 0.2s ease;
	}
	.sidepage > .container > .row > .box > form > .dataSubmit > input[type=button]:hover{
		outline: 3px solid #5ca95c;
		transition: all 0.2s ease;
	}

</style>

<style type="text/css" media="screen">

	@media only screen and (max-width: 1050px) {
		.sidepage > .pageBanner > .pageTitle{
			width: 90%;
		}

		.sidepage > .container{
			width: 90%;
		}

		.sidepage > .container > .desc > p{
			line-height: 1em;
		}

		.sidepage > .container > .row{
			justify-content: center;
		}
		.sidepage > .container > .row > .box{
			width: 95%;
		}
	}

</style>