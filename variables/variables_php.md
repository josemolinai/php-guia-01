[Índice](../readme.md) / [Anterior](../constantes/alcance_de_constante.md) / [Siguiente](ejercicio_01.md)
# Variables en PHP 

**Una variable es una zona de memoria identificada por un nombre que contiene un valor legible o modificable en la aplicación.**


## Inicialización y Asignación


En PHP, las variables están identificadas por el prefijo __$__ seguido de un nombre.

El nombre de las variables tiene en cuenta las _minúsculas/mayúsculas_: **$nombre** y **$Nombre** son vistas por PHP como dos variables diferentes. 

Algunas recomendacioness:

- Todo en minúsculas **$nombre**;
- Primera letra en mayúscula y el resto en minúscula **$Nombre**;
- primera letra de cada palabra en mayúscula y el resto en minúscula **$NombreCompleto**;

```php
<?php 
// Inicializar una variable $nombre. 
$nombre = 'Alberto'; 
// Mostrar la variable $nombre. 
echo '$nombre = ',$nombre,'<br />'; 
// Mostrar la variable $Nombre. 
echo '$<b>N</b>ombre = ',$Nombre; 
echo ' => vacía (es otra variable)<br />'; 
// Modificar el valor (y el tipo) de la variable $nombre. 
$nombre = 345; 
// Mostrar la variable $nombre. 
echo '$nombre = ',$nombre,'<br />'; 
?>
```