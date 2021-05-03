[Índice](../readme.md) / [Anterior](../funcion-echo/funcion_echo_en_php.md) / [Siguiente](../comentarios/comentarios_php.md)

# Separador de Instrucciones 

En PHP, todas las instrucciones debe terminarse con un punto y coma.

```php
<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo</title>
    </head>
    <body>

        <?php
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

En caso de omisión, se genera un error. La única excepción es la instrucción que precede a la marca de final para la cual el punto y coma puede omitirse.

Pueden escribirse varias instrucciones en la misma línea, siempre que estén separadas por un punto y coma. No obstante, esta escritura dificulta la legibilidad del código.