<?php
require_once 'header.php';
// $my_class = new MiClase();
// $my_class->foo();
// echo "<p> cte pública " . MiClase::MY_PUBLIC . "</p>";
// //echo "<p> cte private " . MiClase::MY_PRIVATE . "</p>";

$puntoA = new Point(0, 0);
$puntoA->mostrarCoord();

$puntoB = new Point(100, 0);
$puntoB->mostrarCoord();

$cuadrado = new Cuadrado("Cuadrado", 4, $puntoA, 4);

$area_cuadrado = $cuadrado->calcularArea();
echo "<p>El área del cuadrado  es $area_cuadrado</p>";

$circulo = new Circulo("Círculo", 3.5, $puntoB);
$area_circulo = $circulo->calcularArea();
echo "<p>El área del círculo es $area_circulo</p>";

$arrayFiguras[] = new Cuadrado("Cuadrado", 4, $puntoA, 4);
$arrayFiguras[] = new Circulo("Círculo", 3.5, $puntoB);

for ($i = 0; $i < count($arrayFiguras); $i++) {
    $arrayFiguras[$i]->verInformacion();
    $area = $arrayFiguras[$i]->calcularArea();
    echo "<p>El área del círculo es $area</p>";
}