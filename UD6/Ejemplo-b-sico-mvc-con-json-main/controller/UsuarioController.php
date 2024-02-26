<?php

class UsuarioController{
    public string $page_title;
    public string $view;
    private const VIEW_FOLDER ="usuario".DIRECTORY_SEPARATOR;

    /**
     * @param string $page_title
     * @param string $view
     */
    public function __construct()
    {
        $this->page_title = '';
        $this->view = self::VIEW_FOLDER.'list_user';
        $this->usuarioServicio = new UsuarioServicio();
    }
    public function list() {
        $this->page_title = 'Listado de usuarios';
        return $this->usuarioServicio->listarUsuarios();
    }

}