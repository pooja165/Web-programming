<html>
<head>
	<title> Video Background </title>
	<style>
		body{
			font-family:Calibri;
		}
		div.background-wrap{
			position:fixed;
			z-index:-2000;
			width:100%;
			height:100%;
			overflow:hidden;
			top:0;
			left:0;
			right:0;
		}
		#video-bg-elem{
			position:absolute;
			top:0;
			left:0;
			min-height:100%;
			min-width:100%;
		}
		div.content{
			position:absolute;
			width:100%;
			min-width:100%;
			z-index:1000;
			}
		.content h1{
			text-align:center;
			font-size:65px;
			text-transform:uppercase;
			font-weight:300;
			color:#fff;
			padding-top:15%;
			margin-bottom:10px;
		}
		.content p{
			text-align:center;
			font-size:20px;
			letter-spacing:3px;
			color:#aaa;
		}
		.new_op{
			opacity:0.8;
			text-align:center;
		} 

	</style>
</head>
<body>
	<div class="background-wrap">
	<video id="video-bg-elem" preload="auto" autoplay ="true" loop="loop" muted="muted">
		<source src="bokeh2.mp4" type="video/mp4">
	</video>
	</div>
	<div class="content">
	<h1>Welcome to Galerie d' Art</h1>
	<p>This gallery contains information about Artist and Painting.There are painters who transform the sun to a yellow spot, but there are others who, with the help of their art and their intelligence, transform a yellow spot into sun. </p>
	</div>
	<!--<div class="new_op">
	<img src="image.jpg"></img>
	</div>-->
</body>
	
</html>

