<style type="text/css" media="screen">
	
	footer{
		background: #292734;
		display: flex;
		flex-direction: column;
		align-items: center;
		justify-content: space-around;
		width: 100%;
		height: 85px;
	}
	footer > .container{
		display: flex;
		flex-direction: column;
		width: 1050px;
	}
	footer > .container > .navs{
		display: flex;
		flex-direction: row;
		align-items: center;
		width: max-content;
		border-bottom: 2px solid #363541;
		padding: 5px 0px;
	}
	footer > .container > .navs > .nav{
		color: #D4D4D6;
		text-decoration: none;
		font-size: 0.9em;
		padding: 0px 15px;
	}
	footer > .container > .navs > .nav:hover{
		color: whitesmoke;
	}
	footer > .container > .compInfo{
		display: flex;
		flex-direction: row;
		column-gap: 5px;
		align-items: center;
		color: darkgray;
		font-size: 1.2em;
	}

</style>


<style type="text/css" media="screen">

	@media only screen and (max-width: 1050px) {
		footer > .container{
			width: 100%;
			justify-content: center;
			align-items: center;
		}
		footer > .container > .navs{
			width: 100%;
		}
	}

</style>