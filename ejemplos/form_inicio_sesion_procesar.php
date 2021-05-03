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
  <?php // Definición de variables con valores iniciales vacios
    
    $emailErr = $passwordErr = "";
    $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  
  if (empty($_POST["email"])) {
    $emailErr = "El correo es requerido";
  } else {
    $email = test_input($_POST["email"]);
    // Revisando si el correo tiene un formato correcto.
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $emailErr = "Correo no tienen formato correcto";
    }
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
} ?>

  <div class="container">
   <h1><?php echo 'Procesando el inicio de Sesión'?> </h1> 
  <form>
    <div class="form-group">
      <label for="correoElectronicoInput">Correo Electrónico</label>
      <input readonly type="email" class="form-control" name="email"  value="<?php echo $email;?>">
    </div>
    <div class="form-group">
      <label for="contrasennaInput">Contraseña</label>
      <input readonly type="password" class="form-control" name="password" value="<?php echo $password;?>">
    </div>
  </form>
</div>
<script src="assets/js/bootstrap.js" ></script>
</body>
</html>
