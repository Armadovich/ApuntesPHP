<?php

class UsuarioRepository extends BaseRepository implements IUsuarioRepository
{


    public function __construct()
    {
        parent::__construct();
        $this->table_name = "usuario";
        $this->pk_name = "id";
        $this->class_name = "Usuario";
        $this->default_order_column = "email";
    }

    public function create($object)
    {
        return null;
    }

    public function update($object): bool
    {
        return false;
    }

    public function findUsuarioByEmail($email): Usuario
    {
        $consulta = "SELECT * FROM usuario WHERE email = $email";

        $pdostmt = $this->conn->prepare($consulta);
        $pdostmt->execute();

        $usuario = $pdostmt->fetch(PDO::FETCH_OBJ);

        if ($usuario)   {
            return $usuario;
        } else{
            return null;
        }
        //puede que no funcione
    }

    public function getUsuarios(): array
    {
        // TODO: Implement getUsuarios() method.
    }
}
