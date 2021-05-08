[Índice](../readme.md) / [Anterior](tipo_datos_enteros.md) / [Siguiente](../tipo-datos/tipo_datos_cadena.md)

 # Número de coma flotante
 
 El tipo número de coma flotante (float) permite almacenar un número decimal en un intervalo de valores que depende de la plataforma (generalmente del orden de 10-308 a 10+308).
 
 Un número como este puede expresarse en notación decimal x.y (por ejemplo, 123.456) o en notación científica x.yEz o x.yez (por ejemplo, 1.23456E2).

 En caso de conversión de un número de coma flotante en entero, el número es truncado (no redondeado) al entero inferior (1.9 da 1, por ejemplo). En caso de rebasamiento de capacidad, no se muestra ningún mensaje, pero el valor final es indefinido.

```php
<?php // Tipos de de datos Escalares ?>
<?php 
// Números de coma flotante
echo 3.1416;
?>
```