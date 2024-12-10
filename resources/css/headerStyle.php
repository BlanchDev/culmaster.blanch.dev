<style type="text/css" media="screen">

	header{
		position: fixed;
		top: 0px;
		z-index: 9999;

		display: flex;
		flex-direction: row;
		align-items: center;
		justify-content: center;

		background: #292734;
		width: 100%;
		height: 80px;
	}
	header > .container{
		display: flex;
		flex-direction: row;
		column-gap: 25px;
		align-items: center;
		justify-content: space-around;
		width: 1050px;
	}
	header > .container > .left{
		display: flex;
		flex-direction: row;
		align-items: center;
		column-gap: 20px;
	}
	header > .container > .left > .lang{
		display: flex;
		flex-direction: row;
		align-items: center;
		column-gap: 5px;
		color: white;
		text-decoration: none;
	}


	header > .container > .right{
		display: flex;
		flex-direction: row;
		align-items: center;
		column-gap: 10px;
	}
	header > .container > .right > .navs{
		display: flex;
		flex-direction: row;
		align-items: center;
	}
	header > .container > .right > .navs > .nav{
		font-family: 'Blinker';
		color: #D4D4D6;
		text-decoration: none;
		font-weight: 700;
		border-right: 1px solid #54525D;
		padding: 0px 13.5px;
		font-size: 1.1em;
		transition: all 0.3s ease;
	}
	header > .container > .right > .navs > .nav:hover{
		color: white;
		transition: all 0.3s ease;
	}
	header > .container > .right > .navs > .active{
		color: white;
		filter: brightness(1.1);
	}
	header > .container > .mobileRight{
		display: none;
	}

	.mobileNavs{
		display: none;
		position: absolute;
		z-index: 9999;
		flex-direction: column;
		row-gap: 5px;
		align-items: center;
		text-align: center;
		width: 100%;
		height: 100%;
		height: max-content;
		background: #292734;
		padding-bottom: 20px;
		border-bottom: 3px solid black;
	}
	.mobileNavs > .nav{
		color: snow;
		text-decoration: none;
		font-size: 1.5em;
		width: 100%;
		padding: 10px 0px;
		background: rgb(0, 0, 0, 0.0);
		border-bottom: 1px solid #444444;
	}
	.mobileNavs > .redBtn-radius{
		width: 60%;
	}

</style>


<style type="text/css" media="screen">

	@media only screen and (max-width: 1050px) {
		header{
			position: relative;
			top: 0;
		}
		header > .container{
			width: 95%;

		}
		header > .container > .left > .lang{
			display: none;
		}
		header > .container > .right{
			display: none;
		}
		header > .container > .mobileRight{
			display: block;
		}

	}

</style>