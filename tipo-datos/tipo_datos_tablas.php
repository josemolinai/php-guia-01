<?php // Tipos de datos Tabla ?>
<?php 

// Tabla Ordenada o Numérica
   $array = array(
        0 => "Cero",
        1 => "Uno",
        2 => "Dos",
        3 => "Tres",
    );

// Tabla Asociativa
    $array = array(
        "0" => "Cero",
        2 => "Dos",
        "1" => "Uno",
        3 => "Tres",
    );
?>

<?php 

// a partir de PHP 5.4
$array = [
    0 => "Cero",
    1 => "Uno",
    2 => "Dos",
    3 => "Tres",
];

$array = [
    "0" => "Cero",
    2 => "Dos",
    "1" => "Uno",
    3 => "Tres",
];

?>


<?php 

// Tabla Multidimensional
    $array = array(
        "0" => "Cero",
        2 => "Dos",
        "1" => "Uno",
        3 => array(1,2,3),
    );
?>