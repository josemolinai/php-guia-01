[Índice](../readme.md) / [Anterior](../readme.md) / [Siguiente](ejercicio_02.md)
# Ejercicio - Formulario PHP

- Utilizando el siguiente código PHP realiza el ejercicio que esta descrito en sus comentarios
- Publica la página una vez que la hayas modificado y observa los resultados
- ¿Se logra visualizar de forma correcta el formulario tras los cambios que has realizado?

```php
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
<?php
  /*
    Definiendo constantes para los textos que se usaran como etiquetas
  */
  define("labelCorreoElectronico","Correo Electrónico");
  define("labelContrasena","Contraseña");
?>

  <div class="container">
   <h1><?php echo '¿Formulario de inicio de Sesión'?> </h1> 
  <form name="formLogin" method="post" action="procesar_ejercicio_02.php" >
    <div class="form-group">

      <!--Un ejemplo de como escribir el valor de una etiqueta HTML usando una constante PHP-->
      <label for="correoElectronicoInput"> <? echo labelCorreoElectronico?></label>
      <input type="email" class="form-control" name="email" placeholder="Ingrese el correo electrónico">
    </div>
    <div class="form-group">
      
      <!--Otro ejemplo de como escribir el valor de una etiqueta HTML usando una constante PHP-->
      <label for="contrasennaInput"><?php echo labelContrasena?></label>
      <input type="password" name="password" class="form-control"  placeholder="Contraseña">
    </div>
    <!--Intenta definir una constante  PHP para luego escribit el texto de este botón HTML-->
    <button type="submit" class="btn btn-primary">Iniciar</button>
  </form>
</div>
<script src="assets/js/bootstrap.js" ></script>
</body>
</html>
```