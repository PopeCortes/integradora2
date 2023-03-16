<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="./assets/css/inicio.css">
	<title>Cliente</title>
</head>
<body>
<div id ="contenedor">
			<div id ="cabecera"></div>
			<div id ="menu"></div>
			<div id ="izquierda"> <h2> Top artistas </h2>
		
			<br>
			<br>
			<html>
	<head>
		<title>Menu Desplegable</title>
		<style type="text/css">
			
			* {
				margin:0px;
				padding:0px;
			}
			
			#header {
				margin:auto;
				width:100%;
				font-family:Arial, Helvetica, sans-serif;
			}
			
			ul, ol {
				list-style:none;
			}
			
			.nav > li {
				float:left;
			}
			
			.nav li a {
				background-color:#000;
				color:#fff;
				text-decoration:none;
				padding:10px 12px;
				display:block;
			}
			
			.nav li a:hover {
				background-color:#434343;
			}
			
			.nav li ul {
				display:none;
				position:absolute;
				min-width:140px;
			}
			
			.nav li:hover > ul {
				display:block;
			}
			
			.nav li ul li {
				position:relative;
			}
			
			.nav li ul li ul {
				right:-140px;
				top:0px;
			}

			.audio_ejemplo{
				display:flex;
			}
			
		</style>
	</head>
	<body>
		<div id="header">
			<ul class="nav">
			<li><a href="">Anuel aa</a>
					<ul>
						<li class="audio_ejemplo"  ><audio controls><source src="./audio/1.mp3" type="audio/mpeg">shakira</audio> <a href="./audio/1.mp3"  download><img width="50px" src="https://cdn-icons-png.flaticon.com/128/7566/7566356.png" alt=""></a>
</li>
						<li><a href="">Submenu2</a></li>
						<li><a href="">Submenu3</a></li>
						<li><a href="">Submenu4</a>
			</ul>
			</li>
			<br><br><br>
			<li><a href="">Bad Bunny</a>
					<ul>
						<li><a href="">Submenu1</a></li>
						<li><a href="">Submenu2</a></li>
						<li><a href="">Submenu3</a></li>
						<li><a href="">Submenu4</a>
			</ul>
			</li>
			<br><br><br>
			<li><a href="">Daddy Yankee</a>
					<ul>
						<li><a href="">Submenu1</a></li>
						<li><a href="">Submenu2</a></li>
						<li><a href="">Submenu3</a></li>
						<li><a href="">Submenu4</a>
			</ul>
			</li>
		</div>
	</body>
</html>
		
		</div>
			<div id ="derecha"> <h2> Canciones </h2>
			<audio controls>
	  <source src="./audio/1.mp3" type="audio/mpeg">
	</audio>
	<!-- <br> -->
			<a href="./audio/1.mp3"  download><img width="50px" src="https://cdn-icons-png.flaticon.com/128/7566/7566356.png" alt=""></a>
		
		</div>
			<div id ="pie"></div>
		</div>

		

</body>
</html>


