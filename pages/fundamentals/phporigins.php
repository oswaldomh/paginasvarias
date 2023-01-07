<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora de Nomina</title>
</head>
<body>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <br><br>
  <h2>Calculadora de nomina: </h2><br>
  <form method="post" action="./nomina2.php">
    <div class="form-group">
      <label for="nombre">Nombre: </label>
      <input type="text" id="nombre" placeholder="Ingrese su nombre" name="nombre">
    </div>
    <div class="form-group">
      <label for="bruto">Sueldo acordado mensual: </label>
      <input type="number" id="bruto" placeholder="Ingrese cantidad depositada" name="bruto">
    </div>
    <div class="form-group">
      <label for="dlab">Días laborados: </label>
      <input type="number" id="dlab" placeholder="días del periodo " name="dlab">
    <div class="form-group">  
      <label for="faltas">Días faltados: </label>
      <input type="number" id="faltas" placeholder="faltas " name="faltas">
    </div>
    <div class="form-group">
      <label for="retardos">Días retardados: </label>
      <input type="number" id="retardos" placeholder="retardos " name="retardos">  
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
  </form>
</div>














<!-- <form name="Nomina pro" method="post" action="./nomina2.php">  
        <label for="nombre">Nombre: </label><br>
        <input type="text" id="nombre" name="nombre"><br><br>
        <label for="percibido">Sueldo percibido: </label><br>
        <input type="number" id="percibido" name="percibido"><br><br>
        <label for="dlab">Días laborados: </label>
        <input type="number" id="dlab" name="dlab">
        <label for="faltas">Días faltados: </label>
        <input type="number" id="faltas" name="faltas">
        <label for="retardos">Días retardados: </label>
        <input type="number" id="retardos" name="retardos">  
    </form> -->

</body>
</html>

