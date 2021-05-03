<!doctype html>
<html lang="es">

<head>
  <meta charset="utf-8">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="assets/css/bootstrap.css">

</head>

<body>
  <div class="container">
   <h1><?php echo '¿Formulario de inicio de Sesión'?> </h1> 
  <form name="formLogin" method="post" action="form_inicio_sesion_procesar.php" >
    <div class="form-group">
      <label for="correoElectronicoInput">Correo Electrónico</label>
      <input type="email" class="form-control" name="email" placeholder="Ingrese el correo electrónico">
    </div>
    <div class="form-group">
      <label for="contrasennaInput">Contraseña</label>
      <input type="password" name="password" class="form-control"  placeholder="Contraseña">
    </div>
    <button type="submit" class="btn btn-primary">Iniciar</button>
  </form>
</div>
<script src="assets/js/bootstrap.js" ></script>
</body>
</html>
