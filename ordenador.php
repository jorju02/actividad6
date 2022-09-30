<?php

class ordenador {
    private $sO;
    private $codHZ;
    private $esSobremesa;
    /**
     * @return boolean
     */
    
    public function __construct($sO,$codHZ,$esSobre){
        $this->sO=$sO;
        $this->codHZ=$codHZ;
        $this->esSobremesa=$esSobre;
        
    }
    public function getEsSobremesa()
    {
        return $this->esSobremesa;
    }

    /**
     * @param boolean $esSobremesa
     */
    public function setEsSobremesa($esSobremesa)
    {
        $this->esSobremesa = $esSobremesa;
    }

    /**
     * @return string
     */
    public function getSO()
    {
        return $this->sO;
    }

    /**
     * @return string
     */
    public function getCodHZ()
    {
        return $this->codHZ;
    }

    /**
     * @param string $sO
     */
    public function setSO($sO)
    {
        $this->sO = $sO;
    }

    /**
     * @param string $codHZ
     */
    public function setCodHZ($codHZ)
    {
        $this->codHZ = $codHZ;
    }
  
    
    public function __toString() {
     
        return "<h1 style='border:1px solid black;'>".$this->sO."</h1>"
            ."<h2 style='border:1px solid black;'>".$this->codHZ."</h2>"
                .($this->esSobremesa ?"<h3 style='color:green; border:1px solid black;'>ORDENADOR SOBREMESA</h3>" :"<h3 style='color:blue;border:1px solid black;'>PORTATIL</h3>");
        
    }

    public static function guardarSerializado($nombreFichero, $ordenadores){
        // guardar coches en archivo
        $s = serialize($ordenadores);
        // almacenamos $s en algún lugar en el que page2.php puede encontrarlo.
        file_put_contents($nombreFichero, $s);
    }
    
    /*de un fichero con coches serializados guardado
     devuelve un arrray de coches*/
    public static function getOrdenaUnselizados($nombreFichero){
        
        $s = file_get_contents($nombreFichero);
        $ordenadores = unserialize($s);
        return $ordenadores;
    }
    
    
    
    
}