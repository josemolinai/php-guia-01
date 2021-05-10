[Índice](../readme.md) / [Anterior](../tipo-datos/tipos_datos_especiales.md) / [Siguiente](../tipo-datos/tipo_datos_tablas_creacion.md)

#  Tabla Mixta

    | Clave/Índice  | Valor    |
    |---------------|----------|
    | cero          | Cero     |
    | 30            | Treinta  |
    | dos           | Dos      |
    | 5             | Cinco    |

```php
<?php // Tipos de datos Tabla Mixta ?>
<?php 
    $array = array(
        "0" => "Cero",
        2 => "Dos",
        "1" => "Uno",
        3 => "Tres",
    );

// a partir de PHP 5.4
    $array = [
        "0" => "Cero",
        2 => "Dos",
        "1" => "Uno",
        3 => "Tres",
    ];
?>
```