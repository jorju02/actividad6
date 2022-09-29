<?php
class alumno extends persona {
    private $codMatricula="";
    private $ciclo="";
    /**
     * @return string
     */
    public function getCodMatricula()
    {
        return $this->codMatricula;
    }

    /**
     * @return string
     */
    public function getCiclo()
    {
        return $this->ciclo;
    }

    /**
     * @param string $codMatricula
     */
    public function setCodMatricula($codMatricula)
    {
        $this->codMatricula = $codMatricula;
    }

    /**
     * @param string $ciclo
     */
    public function setCiclo($ciclo)
    {
        $this->ciclo = $ciclo;
    }

    
    
}