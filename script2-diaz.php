<?php
/**
 * Clase para manejo de usuarios.
 *
 * Esta clase define un usuario con sus atributos y métodos relacionados.
 * Permite obtener y establecer el nombre y la edad del usuario.
 *
 * @package Scripts
 * @version 1.0
 * @author Helio Díaz Gutiérrez
 */
class Usuario {
    private $nombre;
    private $edad;

    /**
     * Constructor de la clase Usuario.
     *
     * Crea un nuevo objeto Usuario con el nombre y la edad especificados.
     *
     * @param string $nombre El nombre del usuario.
     * @param int $edad La edad del usuario.
     * @since 1.0
     */
    public function __construct($nombre, $edad) {
        $this->nombre = $nombre;
        $this->edad = $edad;
    }

    /**
     * Obtiene el nombre del usuario.
     *
     * @return string El nombre del usuario.
     * @since 1.0
     */
    public function getNombre() {
        return $this->nombre;
    }

    /**
     * Establece el nombre del usuario.
     *
     * @param string $nombre El nuevo nombre del usuario.
     * @since 1.0
     */
    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    /**
     * Obtiene la edad del usuario.
     *
     * @return int La edad del usuario.
     * @since 1.0
     */
    public function getEdad() {
        return $this->edad;
    }

    /**
     * Establece la edad del usuario.
     *
     * @param int $edad La nueva edad del usuario.
     * @since 1.0
     */
    public function setEdad($edad) {
        $this->edad = $edad;
    }
}
