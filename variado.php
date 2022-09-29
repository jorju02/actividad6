<?php

class variado extends espacio
{

    private $tipo;

   

    /**
     *
     * @return string
     */
    public function getTipo()
    {
        return $this->tipo;
    }

    /**
     *
     * @param string $tipo
     */
    public function setTipo($tipo)
    {
        $this->tipo = $tipo;
    }
}