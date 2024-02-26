<?php

class UsuarioServicio implements IUsuarioServicio{

    private IUsuarioRepository $repository;

    /**
     * @param IUsuarioRepository $repository
     */
    public function __construct()
    {
        $this->repository = new UsuarioRepository();
    }


    function listarUsuarios(): array
    {
        return $this->repository->getUsuarios();
    }
}