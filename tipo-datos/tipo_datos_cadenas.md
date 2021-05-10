[Índice](../readme.md) / [Anterior](tipo_datos_disponibles.md) / [Siguiente](../tipo-datos/tipos_datos_especiales.md)

# Cadena de caracteres

El tipo cadena de caracteres (string) permite almacenar cualquier secuencia de caracteres en un octeto (código ASCII comprendido entre 0 y 255), sin límite de tamaño.

Una expresión literal de tipo cadena de caracteres puede especificarse entre comillas ("esto es una cadena") o entre apóstrofos (’esto también es una cadena’) con diferencias de comportamiento muy importantes que veremos a continuación.

Las comillas presentes en una cadena delimitada por comillas o los apóstrofos presentes en una cadena delimitada por apóstrofos deben ser "escapados", es decir, precedidos de la barra invertida (\). Como complemento, una barra invertida presente al final de la cadena, justo antes de la comilla o el apóstrofo final, también debe "escaparse" mediante una barra invertida.

```php
<?php // Tipos de de datos Escalares ?>
<?php
//Cadena de caracteres
echo  'Esto es una cadena de caracteres';

// Escapando las comillas simples y dobles
echo  '\'Esto\' es una \"cadena de caracteres\"';
?>
```
