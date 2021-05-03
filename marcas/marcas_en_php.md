[Índice](../readme.md) / [Anterior](../introduccion/versiones_php.md) / [Siguiente](../funcion-echo/funcion_echo_en_php.md)

# Marcas de PHP
El código PHP se incluye en la página HTML delimitado por marcas o etiquetas (tags).

Php admite 4 formas de delimitación
```php
<!DOCTYPE html>
<html>
    <head>
        <title>Ejemplo</title>
    </head>
    <body>
        <?php ... ?>
        <!-- Forma habitual recomendada -->
        
        
        <script language="php"> ... </script>
        <!-- Utiliza la etiqueta estándar script; puede ser útil si el editor HTML utilizado interpreta mal las otras sintaxis. -->
        

        <? ... ?>
        <!-- Sólo debe considerarse si ha sido autorizada en el archivo de configuración de PHP ( php.ini) estableciendo el parámetro short_open_tag en on. -->
        
        <% ... %>
        <!-- Permite emplear la marca ASP, pero sólo puede utilizarse si ha sido autorizada en el archivo de configuración de PHP estableciendo el parámetro asp_tags en on. -->
        

    </body>
</html>
```
