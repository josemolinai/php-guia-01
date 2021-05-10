[Índice](../readme.md) / [Anterior](../tipo-datos/tipo_datos_tablas.md) / [Siguiente](../tipo-datos/tipo_datos_tablas.md)

# Tipos de Datos Tablas

**Creación**

Una variable de tipo tabla puede definirse explícitamente gracias a la función array() o implícitamente utilizando una notación con corchetes ([]).

```php
<?php 
    $array = array(
        "0" => "Cero",
        2 => "Dos",
        "1" => "Uno",
        3 => "Tres",
    );

?>
```

Desde la versión 5.4, también se pueden definir tablas explícitamente usando una notación con corchetes ([]) en vez de usar la función array().

```php
<?php 
// a partir de PHP 5.4
    $array = [
        "0" => "Cero",
        2 => "Dos",
        "1" => "Uno",
        3 => "Tres",
    ];
?>
```

## Notación con Corchetes

Una variable utilizada por primera vez con una notación del tipo $variable[...], es automáticamente creada como tabla.

La misma operación efectuada sobre una variable ya definida con un tipo escalar provoca un mensaje de error.

El contenido de una tabla puede definirse así mediante varias asignaciones del tipo $tabla[...] = valor.

```php
<?php 
    $array["0"] = "Cero";
    $array[2] = "Dos";
    $array["1"] = "Uno";
    $array[3] = "Tres";
?>
```

Con una asignación del tipo $tabla[] = valor, PHP busca el índice más grande entero utilizado y asocia el valor del índice inmediatamente superior. Si la tabla está vacía, el elemento se establece con el índice 0.

Con una asignación del tipo $tabla[clave] = valor, PHP asocia el valor con la clave indicada (que puede ser de tipo entero o de tipo cadena).

Ambas notaciones pueden mezclarse en una secuencia de asignación.