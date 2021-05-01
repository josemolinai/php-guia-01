[Índice](readme.md) / [Anterior](03_versiones_php.md) / [Siguiente](05_nombres_de_constantes.md)
# Constantes en PHP
La función **define** o la palabra clave **const** (desde la versión 5.3) permiten definir una constante.

## Sintaxis

_booleano_ **define**(_cadena_ nombre, _mixto_ valor [, booleano distingue_mayús_minús) 

- nombre : Nombre de la constante.
- valor: Valor de la constante.
- distingue_mayús_minús : Indica si el nombre de la constante tiene en cuenta las minúsculas/mayúsculas (TRUE - valor predeterminado) o no (FALSE).


La función define devuelve **TRUE** en caso de éxito y **FALSE** en caso de error.

Cualquier tipo de datos escalar puede utilizarse como tipo de datos de una constante.

Ejemplo de uso de constantes en PHP

```php
<?php
define("CONSTANTE", "Hola mundo.");
echo CONSTANTE; // imprime "Hola mundo."
echo Constante; // imprime "Constante" y emite un aviso.

define("SALUDO", "Hola tú.", true);
echo SALUDO; // imprime "Hola tú."
echo Saludo; // imprime "Hola tú."

// Funciona a partir de PHP 7
define('ANIMALES', array(
    'perro',
    'gato',
    'pájaro'
));
echo ANIMALES[1]; // muestra "gato"

?>
```
Ecuentra el archivo de ejemplo en [./ejemplos/ejemplo_02.php](01-introduccion/ejemplos/ejemplo_02.php)
