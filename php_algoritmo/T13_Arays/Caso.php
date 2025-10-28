<?php
$salarios_mensuales = array(2500, 2800, 3000, 3500, 3150, 1030);

echo "Salario mensuales: " . $salarios_mensuales[0] . "\n";
echo "Salario mensuales: " . $salarios_mensuales[1] . "\n";
echo "Salario mensuales: ". $salarios_mensuales[2] . "\n";
echo "Salario mensuales: ". $salarios_mensuales[3] . "\n";
echo "Salario mensuales: ". $salarios_mensuales[4] . "\n";
echo "Salario mensuales: ". $salarios_mensuales[5] . "\n";

$suma = array_sum($salarios_mensuales);

$cantidad = count($salarios_mensuales);

$promedio = $suma / $cantidad;

echo "\nSuma total: " . $suma . "\n";
echo "Cantidad de los salarios: " . $cantidad . "\n";
echo "Promedio de los salarios: " . number_format($promedio, 2) . "\n";

echo "\nListado de los salarios mensuales: \n";
foreach ($salarios_mensuales as $salario) {
    echo $salario . "\n";
}
?>