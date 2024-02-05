<?php
class Profesor extends Persona
{
    private string $NIF;
    public function __construct(string $nombre, string $apellidos, string $numTelefono, string $NIF) {
        parent::__construct($nombre, $apellidos, $numTelefono);
        $this->NIF = $NIF;
    }

}