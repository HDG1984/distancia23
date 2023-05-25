<?php
/**
 * Script para cálculos matemáticos.
 *
 * Este script contiene dos funciones: sumar y multiplicar.
 * Permite realizar operaciones de suma y multiplicación de números.
 *
 * @package Scripts
 * @version 1.1
 * @author Helio Díaz Gutiérrez
 */

/**
 * Función para sumar dos números.
 *
 * Esta función recibe dos números como parámetros de entrada
 * y devuelve la suma de ambos.
 *
 * @param int $num1 El primer número a sumar.
 * @param int $num2 El segundo número a sumar.
 * @return int La suma de los dos números.
 * @since 1.1
 */
function sumar($num1, $num2) {
    return $num1 + $num2;
}

/**
 * Función para multiplicar dos números.
 *
 * Esta función recibe dos números como parámetros de entrada
 * y devuelve su producto.
 *
 * @param int $num1 El primer número a multiplicar.
 * @param int $num2 El segundo número a multiplicar.
 * @return int El producto de los dos números.
 * @since 1.0
 */
function multiplicar($num1, $num2) {
    return $num1 * $num2;
}
