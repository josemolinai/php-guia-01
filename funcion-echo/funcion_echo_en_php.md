[Índice](../readme.md) / [Anterior](../readme.md) / [Siguiente](../separador-intrucciones/separador_intrucciones_php.md)

# Función echo en PHP
 La función on instrucción **echo** permite mostrar una o varias cadenas y, por lo tanto, incluir texto en la página HTML enviada al explorador.


 ```php
<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo</title>
    </head>
    <body>

        <?php
            echo('¡Hola, soy un script de PHP!');
        ?>
        <?php
            echo '¡Hola,',' soy un script', ' de PHP!';
        ?>

    </body>
</html>
```
En este ejemplo examinado la primera sintaxis solo recibe un parámetro de entrada, mientras que en la segunda se ocupa la sintaxis donde se permiten múltiples parámetros de entrada separados por una coma.

## Saltos de línea

No hay salto de línea automático en el resultado de la ejecución del código PHP. Si es necesario, hay que insertar la etiqueta HTML 
 ```html
<br/>
```
que fuerza el salto de línea en la página HTML final.

El texto pasado como parámetro a la instrucción echo puede escribirse en varias líneas en la página original, pero se muestra en una sola en el resultado HTML
