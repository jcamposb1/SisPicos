<?php

namespace App\Models;

Use CodeIgniter\Model;

class UsuarioModel extends Model {

    protected $table = 'usuarios';
    protected $primaryKey ='IDusuario';
    protected $allowedFields = ['usuario','contrasena','nombre','apellido','tipo'];

    public function obtenerUsuario($usuario){
        return $this->where('usuario',$usuario)->first();
    }
}

?>