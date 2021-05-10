[Índice](../readme.md) / [Anterior](../funciones/funcion_echo_en_php.md) / [Siguiente](../funciones/funciones_definidas_por_usuario.md)

# Función empty

Determina si una variable es considerada vacía. Una variable se considera vacía si no existe o si su valor es igual a false. empty() no genera una advertencia si la variable no existe.

 ```php
<?php
$var = 0;

// Se evalúa a true ya que $var está vacia
if (empty($var)) {
    echo '$var es o bien 0, vacía, o no se encuentra definida en absoluto';
}
?>
```
