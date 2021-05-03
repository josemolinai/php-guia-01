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