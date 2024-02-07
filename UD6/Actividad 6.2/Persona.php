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

    public function getNombre(): string
    {
        return $this->nombre;
    }

    public function setNombre(string $nombre): void
    {
        $this->nombre = $nombre;
    }

    public function getApellidos(): string
    {
        return $this->apellidos;
    }

    public function setApellidos(string $apellidos): void
    {
        $this->apellidos = $apellidos;
    }

    public function getNumTelefono(): string
    {
        return $this->numTelefono;
    }

    public function setNumTelefono(string $numTelefono): void
    {
        $this->numTelefono = $numTelefono;
    }

}