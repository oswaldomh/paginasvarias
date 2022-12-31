<!DOCTYPE html>
<html>
<head><title>Control de mesas :)</title>
<title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    .btn-primary {
      background-color: #009933;
      height: 108px;
      width: 208px;
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
      <a class="navbar-brand" href="#"><img src="multimedia/logoreal.png" alt="Image" width="28" height="28"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="home.php">Hola</a></li>
        <li><a href="#">Sobre Nosotros</a></li>
        <li><a href="#">Ubicaciones</a></li>
        <li><a href=" ./mesas.php">Cobro</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="btn-group">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cobro1">
    Mesa 1
  </button>
  </div>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cobro1">
    Mesa 2
  </button>
  </div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cobro1">
    Mesa 3
  </button>
  </div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cobro1">
    Mesa 4
  </button>
  </div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cobro1">
    Mesa 5
  </button>
  </div>
</div>
<br>
<hr>


<div class="btn-group">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cobro1">
    Barra 1
  </button>
  </div>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cobro1">
    Barra 2
  </button>
  </div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cobro1">
    Barra 3
  </button>
  </div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cobro1">
    Barra 4
  </button>
  </div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cobro1">
    Barra 5
  </button>
  </div><button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cobro1">
    Barra 6
  </button>
  </div>
</div>
<br>
<hr>

<div class="btn-group">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cobro1">
    Afuera 1
  </button>
  </div>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cobro1">
    Afuera 2
  </button>
  </div>
</div>
<br>
<hr>

<div class="btn-group">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cobro1">
    Para Llevar
  </button>
  </div>
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cobro1">
    A Domicilio
  </button>
  <div class="btn-group">
  <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#cobro1">
    Mesa Raṕida
  </button> 
  </div>
</div>
<br>
<hr>

<!-- The Modal -->
<div class="modal" id="cobro1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">MESA ?</h4>
        <h3>Folio ?</h3>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <p>
            Articulos: ?<br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <b>Total: ?</b>
        </p>
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button style="background-color: aqua;" type="button" class="btn btn-submit" data-bs-dismiss="modal">Añadir</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button style="background-color: rgb(255, 230, 0);" type="button" class="btn btn-submit" data-bs-dismiss="modal">Pagar</button>
      </div>
    </div>
  </div>
</div>
</body>




</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</html>
