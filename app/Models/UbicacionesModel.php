<?php

namespace App\Models;

Use CodeIgniter\Model;

class UbicacionesModel extends Model {

    protected $table = 'ubicacion';
    protected $primaryKey = 'IDubicacion';
    protected $allowedFields = ['ubicacion'];

    public function agregarUbicacion($data){
        return $this->insert($data);
    }

    public function eliminarUbicacion ($id){
        return $this->delete($id);
    }

    public function existeUbicacion ($ubicacion){
        return $this->where('ubicacion',$ubicacion)->countAllResults()>0;
    }
}