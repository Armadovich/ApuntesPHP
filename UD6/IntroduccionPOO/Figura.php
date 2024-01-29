<?php

class Figura
{
    protected int $numeroLados;
    protected String $nombre;

    /**
     * @param int $numeroLados
     * @param String $nombre
     */
    public function __construct(int $numeroLados, string $nombre)
    {
        $this->numeroLados = $numeroLados;
        $this->nombre = $nombre;
    }


}