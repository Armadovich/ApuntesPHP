<?php

class UsuarioServicio
{

    const USER_DOES_NOT_EXIST = "No existe usuario";
    const PWD_INCORRECT = "La contraseña no es correcta";

    private IUserRepository $userRepository;
    private IRolRepository  $rolRepository;

    /**
     * @param IUserRepository $userRepository
     * @param IRolRepository $rolRepository
     */
    public function __construct()
    {
        $userRepository = new UsuarioRepository();
        $rolRepository = new RolRepository();
    }


    public function getUsuarios(): array
    {
        //TODO

    }

    public function login(string $user, string $pwd, $rolId): ?Usuario
    {
        //TODO
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