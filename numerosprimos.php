<?php

// Función para verificar si un número es primo
function esPrimo($numero) {
    // Verificar si el parámetro es un número entero mayor que 1
    if (!is_int($numero) || $numero <= 1) {
        return "Error: El parámetro debe ser un número entero mayor que 1."; // Mensaje de error si la entrada es inválida
    }

    // Iterar desde 2 hasta la raíz cuadrada del número para verificar divisibilidad
    for ($i = 2; $i <= sqrt($numero); $i++) {
        // Si el número es divisible por algún número en este rango, no es primo
        if ($numero % $i === 0) {
            return "$numero no es primo (divisible por $i)."; // Indicar que no es primo y mostrar el divisor
        }
    }

    // Si no se encontró divisor, el número es primo
    return "$numero es un número primo.";
}

// Función para mostrar resultados en una tabla HTML
function mostrarPrimosEnTabla($numeros) {
    // Iniciar la tabla HTML con borde y espaciado en celdas
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>Número</th><th>Resultado</th></tr>"; // Encabezado de la tabla

    // Iterar por cada número en el array proporcionado
    foreach ($numeros as $numero) {
        // Llamar a la función esPrimo para verificar cada número
        $resultado = esPrimo($numero);
        // Mostrar el número y el resultado en una fila de la tabla
        echo "<tr><td>$numero</td><td>$resultado</td></tr>";
    }

    echo "</table><br>"; // Cerrar la tabla y agregar un salto de línea
}

// Título de la página
echo "<h2>Resultados de Verificación de Números Primos en Tabla</h2>";

// Definir un array de números para verificar
$numeros = [2, 15, 29, 0, 1, 13, 4, 37, 50];
// Llamar a la función para mostrar los resultados en una tabla
mostrarPrimosEnTabla($numeros);

?>
