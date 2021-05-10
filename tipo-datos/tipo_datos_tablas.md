[Índice](../readme.md) / [Anterior](../tipo-datos/tipos_datos_especiales.md) / [Siguiente](../tipo-datos/tipo_datos_tablas_numericas_ordenadas)

# Tipos de Datos Tablas

**Definición**

En PHP, una tabla es una lista de elementos ordenada en pares clave/valor, donde la clave puede ser de tipo entero o de tipo cadena.

Cuando la clave es de tipo entero la tabla se considera numérica y si la clave es de tipo cadena, entonces la tabla se considera asociativa. 

Las claves no son obligatoriamente consecutivas ni ordenadas, y una tabla puede incluir claves enteras y claves de tipo cadena.

```php
<?php // Tipos de datos Tabla ?>
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

En cuanto a los valores, estos pueden ser de cualquier tipo, y fundamentalmente de tipo tabla; en ese caso, la tabla se considera multidimensional.

```php
<?php // Tipos de datos Tabla Multidimensional ?>
<?php 
    $array = array(
        "0" => "Cero",
        2 => "Dos",
        "1" => "Uno",
        3 => array(1,2,3),
    );
?>
```
