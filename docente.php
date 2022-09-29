<?php

class docente extends persona
{

    private $sueldo;
    
    public function getSueldo()
    {
        return $this->sueldo;
    }
    
    public function setSueldo($sueldo)
    {
        $this->sueldo = $sueldo;
    }
}