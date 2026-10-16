<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';

    protected $allowedFields = ['usuario', 'password', 'rol'];

    public function getUserUsuario($usuario)
    {
        return $this->where('usuario', $usuario)->first();
    }

    public function getUsuarios()
    {
        return $this->findAll();
    }

    public function getUserId($id)
    {
        return $this->where('id', $id)->first();
    }
}