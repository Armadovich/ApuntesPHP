<?php
class Alumno extends Persona
{
    private int $numClases;
    public function __construct(string $nombre, string $apellidos, string $numTelefono)
    {
        parent::__construct($nombre, $apellidos, $numTelefono);
    }

    public function setNumClases(int $numClases): void
    {
        $this->numClases = $numClases;
    }

    public function aPagar() {
        if ($this->numClases == 1){
            echo "Importe a pagar 1 actividad: 20€";
        }
        elseif ($this->numClases == 2){
            echo "Importe a pagar 2 actividades: 32€";
        }
        elseif ($this->numClases >= 3){
            echo "Importe a pagar 3 o más actividades : 40€";
        }
        else echo "Debe indicar previamente el número de clases";
    }


}