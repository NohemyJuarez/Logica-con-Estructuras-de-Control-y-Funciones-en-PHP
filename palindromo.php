<?php

// Función para verificar si una cadena de texto es un palíndromo
function esPalindromo($texto) {
    // Verificar si el parámetro es una cadena de texto no vacía
    if (!is_string($texto) || trim($texto) === '') {
        return "Error: El parámetro debe ser una cadena de texto no vacía."; // Mensaje de error si la entrada es inválida
    }

    // Convertir el texto a minúsculas y eliminar caracteres no alfanuméricos
    $texto = strtolower(preg_replace("/[^a-z0-9]/", '', $texto));

    // Verificar si el texto es igual a su versión invertida
    return ($texto === strrev($texto)) ? "Es un palíndromo." : "No es un palíndromo.";
}

// Función para mostrar resultados de verificación de palíndromos en una tabla HTML
function mostrarPalindromosEnTabla($textos) {
    // Iniciar la tabla HTML con borde y espaciado en celdas
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr><th>Texto</th><th>Resultado</th></tr>"; // Encabezado de la tabla

    // Iterar por cada texto en el array proporcionado
    foreach ($textos as $texto) {
        // Llamar a la función esPalindromo para verificar cada texto
        $resultado = esPalindromo($texto);
        // Mostrar el texto y el resultado en una fila de la tabla
        echo "<tr><td>$texto</td><td>$resultado</td></tr>";
    }

    echo "</table><br>"; // Cerrar la tabla y agregar un salto de línea
}

// Título de la página
echo "<h2>Resultados de Verificación de Palíndromos en Tabla</h2>";

// Definir un array de textos para verificar
$textos = ["radar", "A man a plan a canal Panama", "Hello", "", "racecar", "Madam", "Not a palindrome"];
// Llamar a la función para mostrar los resultados en una tabla
mostrarPalindromosEnTabla($textos);

?>
