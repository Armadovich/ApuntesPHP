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
        $consulta = "SELECT * FROM $this->table_name WHERE email = :email";

        $pdostmt = $this->conn->prepare($consulta);
        $pdostmt->bindParam("email", $email);
        $pdostmt->execute();

        $usuario = $pdostmt->fetchObject($this->class_name);

        return $usuario;
    }
}
