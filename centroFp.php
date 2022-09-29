<?php

// Definimos la clase
class centroFp
{

    // Atributos
    private $cod;

    private $nombre;

    /**
     *
     * @return mixed
     */
    public function getCod()
    {
        return $this->cod;
    }

    /**
     *
     * @return mixed
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     *
     * @param mixed $cod
     */
    public function setCod($cod)
    {
        $this->cod = $cod;
    }

    /**
     *
     * @param mixed $nombre
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;
    }

   
}
    