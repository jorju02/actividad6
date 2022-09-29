<?php

class aula extends espacio
{

    private $numero;

    private $proyector;

    private $pizarraDigital;

    private $pantallaTactil;
    
    private $ordenador;

  

    /**
     * @return multitype:
     */
    public function getOrdenador()
    {
        return $this->ordenador;
    }

    /**
     * @param multitype: $ordenador
     */
    public function setOrdenador($ordenador)
    {
        $this->ordenador = $ordenador;
    }

    /**
     *
     * @return String
     */
    public function getNumero()
    {
        return $this->numero;
    }

    /**
     *
     * @return boolean
     */
    public function getProyector()
    {
        return $this->proyector;
    }

    /**
     *
     * @return boolean
     */
    public function getPizarraDigital()
    {
        return $this->pizarraDigital;
    }

    /**
     *
     * @return boolean
     */
    public function getPantallaTactil()
    {
        return $this->pantallaTactil;
    }

    /**
     *
     * @param String $numero
     */
    public function setNumero($numero)
    {
        $this->numero = $numero;
    }

    /**
     *
     * @param boolean $proyector
     */
    public function setProyector($proyector)
    {
        $this->proyector = $proyector;
    }

    /**
     *
     * @param boolean $pizarraDigital
     */
    public function setPizarraDigital($pizarraDigital)
    {
        $this->pizarraDigital = $pizarraDigital;
    }

    /**
     *
     * @param boolean $pantallaTactil
     */
    public function setPantallaTactil($pantallaTactil)
    {
        $this->pantallaTactil = $pantallaTactil;
    }
    
    public function addOrdenador($ordenador) {
        return array_push($ordenador);
    }
}