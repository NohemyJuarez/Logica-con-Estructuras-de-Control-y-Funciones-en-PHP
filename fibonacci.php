<?php

function generarFibonacci($n) {
    // Verificación de tipo de dato y valor
    if (!is_int($n) || $n <= 0) {
        return "Error: El parámetro debe ser un número entero positivo.";
    }

    // Caso especial: cuando $n es 1, devolvemos solo el primer término
    if ($n === 1) {
        return [0];
    }

    // Inicialización de la serie con los dos primeros términos
    $fibonacci = [0, 1];

    // Cálculo de la serie Fibonacci hasta el término n
    for ($i = 2; $i < $n; $i++) {
        $fibonacci[] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
    }

    return $fibonacci;
}

// Genera una tabla con el resultado
function mostrarResultadoEnTabla($n, $resultado) {
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>Ejemplo</th><th>Serie Fibonacci ($n términos)</th></tr>";

    // Verifica si el resultado es un arreglo (serie de Fibonacci generada)
    if (is_array($resultado)) {
        echo "<tr><td>n = $n</td><td>" . implode(", ", $resultado) . "</td></tr>";
    } else {
        // Si es un mensaje de error
        echo "<tr><td>n = $n</td><td>$resultado</td></tr>";
    }

    echo "</table><br>";
}

echo "<h2>Resultados de la Serie Fibonacci en Tabla</h2>";

//Generar los primeros 5 términos de la serie Fibonacci
$n = 5;
$resultado = generarFibonacci($n);
mostrarResultadoEnTabla($n, $resultado);

//Generar los primeros 15 términos de la serie Fibonacci
$n = 15;
$resultado = generarFibonacci($n);
mostrarResultadoEnTabla($n, $resultado);

//Probar con un valor no válido (-5)
$n = -5;
$resultado = generarFibonacci($n);
mostrarResultadoEnTabla($n, $resultado);

//Generar un solo término de la serie (n = 1)
$n = 1;
$resultado = generarFibonacci($n);
mostrarResultadoEnTabla($n, $resultado);

?>

