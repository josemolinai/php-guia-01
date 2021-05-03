[Índice](../readme.md) / [Anterior](constantes_php.md) / [Siguiente](alcance_de_constante.md)
## Restricciones para los nombres de constantes
El nombre de una constante no debe comenzar por **$**, ya que este prefijo se reserva para los nombres de las variables.

Una vez definida, una constante ya no puede ser modificada a continuación, ni por una nueva invocación a define (devuelve FALSE y deja el valor de la constante igual), ni por una asignación directa (genera un error de análisis del script).


El nombre de una constante sigue las mismas reglas que cualquier otra etiqueta de PHP. Un nombre de constante válido empieza por una letra o guion bajo, seguido por cualquier número de letras, números o guiones bajos. Usando una expresión regular, se representaría de la siguiente manera: [a-zA-Z_\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*


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