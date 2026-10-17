<?php
namespace App\Models;
use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'users';
    protected $allowedFields = ['nombre', 'email', 'password', 'rol'];

    public function getUserEmail($email)
    {
        return $this->where('email', $email)->first();
    }

    public function getUsuarios()
    {
        return $this->findAll();
    }

    public function getUserId($id)
    {
        return $this->where('id', $id)->first();
    }

    public function saveUser($nombre, $email, $password, $rol)
    {
        $this->save([
            'nombre' => $nombre,
            'email' => $email,
            'password' => password_hash($password, PASSWORD_DEFAULT),
            'rol' => $rol
        ]);
    }
}