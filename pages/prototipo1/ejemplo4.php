<?php

//"<form action="/action_page.php">
//<div class="form-group">
//  <label for="cafe">Algo sobre cafe:</label>
//  <input type="cafe" class="form-control" id="cafe">
//</div>
//<div class="form-group">
//  <label for="pwd">Password:</label>
//  <input type="password" class="form-control" id="pwd">
//</div>
//<div class="checkbox">
//  <label><input type="checkbox"> Remember me</label>
//</div>
//<button type="submit" class="btn btn-default">Submit</button>
//</form>"*/

?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }
    
  .carousel-inner img {
      width: 100%; /* Set width to 100% */
      margin: auto;
      min-height:200px;
  }

  /* Hide the carousel text when the screen is less than 600 pixels wide */
  @media (max-width: 600px) {
    .carousel-caption {
      display: none; 
    }
  }
  </style>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#"><img src="multimedia/logo.png" alt="Image" width="28" height="28"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Hola</a></li>
        <li><a href="#">Sobre Nosotros</a></li>
        <li><a href="#">Ubicaciones</a></li>
        <li><a href="#">Contacto</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="multimedia/imagencafe5.png" alt="Image">
        <div class="carousel-caption">
          <h3>Piso 78</h3>
          <p>Cafeteria artesanal.</p>
        </div>      
      </div>

      <div class="item">
        <img src="multimedia/imagencafe6.png" alt="Image">
        <div class="carousel-caption">
          <h3>Cosecha de granos Mexicanos</h3>
          <p>Volviendo a nuestras raices...</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>
  
<div class="container text-center">    
  <h3>Nuestra Mision</h3><br>
  <div class="row">
    <div class="col-sm-4">
      <img src="multimedia/imagencafe1.png" class="img-responsive" style="width:100%" alt="imagenCafe1">
      <p>Para nosotros es importante brindar calidad y ejecucion<br>
        artesanal, transportamos al que bebe nuestro cafe a las<br>
        maravillosas sierras de Oaxaca, Chiapas y Veracruz, todo<br>
        esto mediante un concepto completo y multicultural que <br>
        resalta la importancia del cafe.</p>
    </div>
    <div class="col-sm-4"> 
      <img src="multimedia/imagencafe2.png" alt="imagenCafe2" width="400" height="200">
      <p> Una nueva cafeteria con un toque mas humano que <br>
        nos lleva a nuestras raices. <br>
        Hemos fusionado las culturas del <u>cafe</u> <br>
        al rededor del mundo para poder convivir en <br>
        armonia con los toques celestiales de esta <br>
        admirable bebida. class="img-responsive</p></p>    
    </div>
    <div class="col-sm-4">
      <div class="well">
       <p>Caja de comentarios</p>
      </div>
      <div class="well">
       <p>Ingresa para facturar</p>
      </div>
    </div>
  </div>
</div><br>

<footer class="container-fluid text-center">
  <pre>           Uma xícara de café
            Para ficar acordado e estudar
                  Café com um bom
            Para ter um dia bem sucedido.</pre>
</footer>

</body>
</html>



<head>
    <title>Cafeteria</title>
</head>
<body style="background-color:burlywood; font-family:Arial, Helvetica, sans-serif;">
    <h1 style="font-size:80px;background-color:rgb(95, 51, 30);text-align:center;color: white;"> El mejor grano se tosta en piso 78</h1>
    <h2>Sobre nosotros</h2>
    <b>Equipo copo de nieve</b><br>    
    <i>Somos expertos en Sifon Japones</i><br>
    <p title='Nuestra mision' style="font-size:100%;background-color:rgb(92, 42, 9); color:white; text-align: justify;">
        Para nosotros es importante brindar calidad y ejecucion<br>
        artesanal, transportamos al que bebe nuestro cafe a las<br>
        maravillosas sierras de Oaxaca, Chiapas y Veracruz, todo<br>
        esto mediante un concepto completo y multicultural que <br>
        resalta la importancia del cafe.<br>
    </p>
        <hr>
    <h4 title="El 'cafe' vive en nosotros" style="color:rgb(105, 27, 27);background-color:rgb(248, 201, 139);">
        Una nueva cafeteria con un toque mas humano que nos lleva a nuestras raices.</h4>
    <p>Hemos fusionado las culturas del <u>cafe</u> al rededor del mundo <br>
        para poder convivir en armonia con los toques celestiales de esta <br>
        admirable bebida. </p>
    <h3 style="color:rgb(199, 122, 21); text-align: justify;">
        Desde el Expresso Italiano, la Prensa Francesa, hasta el Sifon Japones.<br>
        Las notas de nuestro cafe y su tostado personalizado resaltan la pureza.<br>
        de la tierra y el contacto de la naturaleza con la humanidad.<br>
        Una experiencia artesanal.</h3><br>
        <pre title="Asi vivimos el cafe">
                Uma xícara de café
            Para ficar acordado e estudar
                Café com um bom
            Para ter um dia bem sucedido.
        </pre>
        <hr>
    <p style="text-align:center">   
    <img src="multimedia/imagencafe0.jpg" alt="sifon_japones" width="888" height="888"></p> 
    <hr>
    <a href="multimedia/imagencafe0.jpg">Esta es la url del Sifon Japones</a><br>
</body>
</html>

