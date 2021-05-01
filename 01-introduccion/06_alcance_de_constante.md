[Índice](readme.md) / [Anterior](05_nombres_de_constantes.md) / [Siguiente](ejercicio_01.md)
# Alcance de las Constantes en PHP

El alcance de una constante es el script en el que está definida. Una constante puede definirse, por lo tanto, en una primera sección de código PHP y utilizarse en otra parte del código PHP del mismo script

```php
<?php
define("CONSTANTE", "Hola mundo.");
?>

<?php
echo CONSTANTE; // imprime "Hola mundo."
echo Constante; // imprime "Constante" y emite un aviso.

define("SALUDO", "Hola tú.", true);

?>
<?php
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
Ecuentra el archivo de ejemplo en [./ejemplos/ejemplo_03.php](ejemplos/ejemplo_03.php)