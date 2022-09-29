<?php

abstract class espacio
{

    private $puntuWifi;

    private $puntosRed;

    private $centroFp;

    /**
     *
     * @return mixed
     */
    public function getCodCentro()
    {
        return $this->centroFp;
    }

    /**
     *
     * @param mixed $codCentro
     */
    public function setCodCentro($centroFp)
    {
        $this->codCentro = $centroFp;
    }

    /**
     *
     * @return boolean
     */
    public function getPuntuWifi()
    {
        return $this->puntuWifi;
    }

    /**
     *
     * @return number
     */
    public function getPuntosRed()
    {
        return $this->puntosRed;
    }

    /**
     *
     * @param boolean $puntuWifi
     */
    public function setPuntuWifi($puntuWifi)
    {
        $this->puntuWifi = $puntuWifi;
    }

    /**
     *
     * @param number $puntosRed
     */
    public function setPuntosRed($puntosRed)
    {
        $this->puntosRed = $puntosRed;
    }
}