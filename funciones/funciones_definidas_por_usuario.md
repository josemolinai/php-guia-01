[Índice](../readme.md) / [Anterior](../funciones/funcion_empty.md) / [Siguiente](../separador-intrucciones/separador_intrucciones_php.md)

# Funciones definidas por el usuario

Una función puede ser definida empleando una sintaxis como la siguiente:

 ```php
<?php
function foo($arg_1, $arg_2, /* ..., */ $arg_n)
{
    echo "Función de ejemplo.\n";
    return $valor_devuelto;
}
?>
```

Los nombres de las funciones siguen las mismas reglas que las demás etiquetas de PHP. Un nombre de función válido comienza con una letra o guión bajo, seguido de cualquier número de letras, números o guiones bajos. 
 
```php
<?php
function escribir($data) {
  echo $data;
}

function sumar($a,$b){
    return $a + $b;
}
escribir(sumar(1,2));

?>
```

