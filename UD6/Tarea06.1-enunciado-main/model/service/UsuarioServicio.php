<?php

class UsuarioServicio
{

    const USER_DOES_NOT_EXIST = "No existe usuario";
    const PWD_INCORRECT = "La contraseña no es correcta";

    private IUsuarioRepository $usuarioRepository;
    private IRolRepository  $rolRepository;


    public function __construct()
    {
        $this->usuarioRepository = new UsuarioRepository();
        $this->rolRepository = new RolRepository();
    }


    public function getUsuarios(): array
    {
        $arrayUsuarios = $this->usuarioRepository->findAll();

        foreach ($arrayUsuarios as $usuario){
            $usuario->setRoles($this->rolRepository->findRolesByUserId($usuario->getId()));
        }
        return $arrayUsuarios;
    }

    public function login(string $user, string $pwd, $rolId): ?Usuario
    {
        $usuario = $this->usuarioRepository->findUsuarioByEmail($user);

        if (password_verify($pwd,$usuario->getPwdhash())){
            $usuario->setRoles($this->rolRepository->findRolesByUserId($usuario->getId()));

            if ($this->isUserInRole($usuario, $rolId)){
                return $usuario;
            }
        }
        return null;
    }

    public function getRoles(): array
    {

        $roles = $this->rolRepository->findAll();

        return $roles;
    }

    public function getRoleById(int $roleId): ?Rol
    {

        return $this->rolRepository->read($roleId);




    }

    private function isUserInRole(Usuario $usuario, int $roleId): bool
    {
        $rolesArray = $usuario->getRoles();
        foreach ($rolesArray as $rol) {
            if ($rol->getId() === $roleId) {
                return true;
            }
        }
        return false;
    }


}

?>