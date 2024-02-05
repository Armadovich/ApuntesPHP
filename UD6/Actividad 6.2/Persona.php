<?php
class Persona
{
    protected string $nombre;
    protected string $apellidos;
    protected string $numTelefono;

    /**
     * @param string $nombre
     * @param string $apellidos
     * @param string $numTelefono
     */
    public function __construct(string $nombre, string $apellidos, string $numTelefono)
    {
        $this->nombre = $nombre;
        $this->apellidos = $apellidos;
        $this->numTelefono = $numTelefono;
    }
    public function verInformacion(){
        echo "$this->nombre $this->apellidos ($this->numTelefono)";
    }
}