<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title></title>
	<link rel="stylesheet" href="public/css/bootstrap.css">
	<link rel="stylesheet" href="public/css/estilos.css">

</head>
<body>
<div class="container">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#">TIENDA VIRTUAL</a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Link</a></li>
					<li><a href="#">Link</a></li>
				</ul>
				<form class="navbar-form navbar-left" role="search">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Search">
					</div>
					<button type="submit" class="btn btn-default">Submit</button>
				</form>
				<ul class="nav navbar-nav navbar-right">
					<li><a href="#">Link</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
						<ul class="dropdown-menu">
							<li><a href="#">Action</a></li>
							<li><a href="#">Another action</a></li>
							<li><a href="#">Something else here</a></li>
							<li><a href="#">Separated link</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
</div>


<div id="carousel-id" class="carousel slide" data-ride="carousel">
	<ol class="carousel-indicators">
		<li data-target="#carousel-id" data-slide-to="0" class=""></li>
		<li data-target="#carousel-id" data-slide-to="1" class=""></li>
		<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
	</ol>
	<div class="carousel-inner">
		<div class="item">
			<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="public/slider/2.jpg">
			<div class="container">
				<div class="carousel-caption">
					<h1>NO POR  QUE EXISTA EL PERDON LA GENTE TIENE DERECHO A DAÑAR LAS VECES QUE QUIERA</h1>
					<p>No se trata de ser mejor que otra persona, se trata de ser mejor de lo que eras AYER<code>siempre te recordare</code>La razón teme la derrota, pero la intuición disfruta la vida y sus desafíos.</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Un amigo de todos es una amigo de nadie</a></p>
				</div>
			</div>
		</div>
		<div class="item">
			<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="public/slider/DELICIA.PNG">
			<div class="container">
				<div class="carousel-caption">
					<h1>La felicidad no es la ausencia de problemas; es la habilidad para tratar con ellos</h1>
					<p>Muchos de los fracasos vitales son de gente que no se dieron cuenta lo cerca que estaban del éxito cuando se rindieron</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
				</div>
			</div>
		</div>
		<div class="item active">
			<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="public/slider/Captura.jpg">
			<div class="container">
				<div class="carousel-caption">
					<h1> </h1>
					<p>Si no te gusta algo, cámbialo. Si no lo puedes cambiar, cambia tu actitud</p>
					<p><a class="btn btn-lg btn-primary" href="#" role="button">Cuando te sientas sola, mira el cielo y fijate en el sol, siempre esta solo, pero no por eso deja de brillar..!!!</a></p>
				</div>
			</div>
		</div>
	</div>
	<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
	<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
</div>


<div class="container">
	
	  
	<div class="row">
		<div class="col-md-4">
			<div class="mi-video">
				<video autobuffer autoloop loop controls>
					<source src="public/video/1.mp4">
				</video>
			</div>
		</div>
		<div class="col-md-4">
			<div class="mi-video">
				<video autobuffer autoloop loop controls>
					<source src="public/video/2.mp4">
				</video>
			</div>
		</div>
		<div class="col-md-4">
			<div class="mi-video">
				<video autobuffer autoloop loop controls>
					<source src="public/video/3.mp4">
				</video>
			</div>
		</div>
		 
	</div>

<div class="row">
		<div class="col-md-4">
			<div class="mi-video">
				<video autobuffer autoloop loop controls>
					<source src="public/video/2.mp4">
				</video>
			</div>
		</div>
		<div class="col-md-4">
			<div class="mi-video">
				<video autobuffer autoloop loop controls>
					<source src="public/video/3.mp4">
				</video>
			</div>
		</div>
		<div class="col-md-4">
			<div class="mi-video">
				<video autobuffer autoloop loop controls>
					<source src="public/video/1.mp4">
				</video>
			</div>
		</div>
		 
	</div>

</div>
 
	<<script src="public/js/jquery-1.12.1.js"></script>
	<<script src="public/js/bootstrap.js"></script>
</body>
</html>