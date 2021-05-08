[Índice](../readme.md) / [Anterior](../separador-intrucciones/separador_intrucciones_php.md) / [Siguiente](../tipo-datos/tipo_datos_disponibles.md)

# Comentarios en PHP

PHP ofrece dos formas de comentar el código:

- **//** o **#** para incluir un comentario hasta el final de la línea
- __/* ... */__ para insertar comentarios en varias líneas.


```php
<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo</title>
    </head>
    <body>

        <?php

        // comentario en una sola línea 
        # comentario en una sola línea 
        /* comentario 
        en varias líneas */ 
            echo('¡Hola,!');
            echo(' soy un script de PHP!');
        ?>
        <?php
            echo '¡Hola,',' soy un script';
            echo ' de PHP!';
        ?>

    </body>
</html>
```
