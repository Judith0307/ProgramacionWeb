<?php
/*Elabora un programa que permita determinar el salario empleado considerenado las horas trabajadas y el monto que gana por hora, imprimir el total a pagar*/
$horas = (int) readline("Ingrese las horas trabajadas: ");
$montoHora = (double) readline("Ingrese el monto por hora: ");

$Pago = $horas * $montoHora;

echo "==================REPORTE DE SALARIO==================\n";
echo "Horas trabajadas: ". $horas . "\n";
echo "Pago por hora: ". $montoHora . "\n";
echo "Total a pagar: ". number_format($Pago,2) ."\n";
?>

<?php
/*Caso 02: Pago total de empleados de un año
Enunciado: La empresa necesita saber el monto total que debe pagar a sus dos empleados despues de haber trabajado todo el año.
El empleado A gana 2500 por mes, el empleado B 3000 por mes. 
Cada empleado recibe un beneficio extra en julio y diciembre de 350.
Se pide determinar: 
1.¿Cuanto se le debe pagar al empleado A en el año?
2. ¿Cuanto se le debe pagar al empleado B en todo el año?
3.¿Cuanto en total a pagado la empresa a sus empleados?*/
$beneficio = 350;
$empleadoA = 2500;
$empleadoB = 3000;
$meses = 12;

$ResultadoA = $empleadoA * $meses + ($beneficio * 2);
$ResultadoB = $empleadoB * $meses + ($beneficio * 2);

$PagoAnual = $ResultadoA + $ResultadoB;

echo "================== REPORTE DE SALARIO POR TODO EL AÑO ==================\n";
echo "El empleado A gana en todo el año ". $ResultadoA . "\n";
echo "El empleado B gana en todo el año ". $ResultadoB . "\n";
echo "Tienen de beneficios en julio y diciembre de " . $beneficio . " cada uno. \n";
echo "El pago total a sus dos empleados es de: ". number_format($PagoAnual,2) ."\n";

?>