<?php
if ($_SERVER["REQUEST_METHOD"] === 'POST'){
    $mesa = $_POST["mesa"];
    $folio = $_POST["folio"];
    $articulo = $_POST["articulo"];
    $... = $_POST["favorito"];
    $nuevaasignacion... = 
    } 
else {echo "No se registraron datos";
    die();
    }
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prototipo comanda</title>
</head>
<body>
    <form>
        <header>
            <label for="mesa">Mesa:</label>
            <input type="text" id="mesa" name="fname">
            <label for="folio">Folio:</label>
            <input type="text" id="folio" name="folio">
        </header>
        <body>

    <div class="modal-header">
        <h4 class="modal-title">Sistema de Cobro</h4>
            <label for="mesa">Mesa:</label>
            <input type="text" id="mesa" name="mesa">
            <label for="folio">Folio:</label>
            <input type="text" id="folio" name="folio">
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
    </div>

      <!-- Modal body -->
      <div class="modal-body">

        <label for="articulo">Art:</label>
        <input type="text" id="articulo" name="articulo";
        <?php
        $articulo = 1;
        for($i = 0; $i < $txd; $i++) {
        //$variablex[$i] = (rand(1,6));

     ?>
     <p>Art <?= $articulo++ ?> : <?= $variablex[$i] ?></p>

    <?php
        
    }

    ?>
        
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button style="background-color: aqua;" type="button" class="btn btn-submit" data-bs-dismiss="modal">Añadir</button>
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cerrar</button>
        <button style="background-color: rgb(255, 230, 0);" type="button" class="btn btn-submit" data-bs-dismiss="modal">Pagar</button>
      </div>
    </div>
  </div>


</html>









Document