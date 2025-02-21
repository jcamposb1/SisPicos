<?php

namespace App\Models;

Use CodeIgniter\Model;

class MovimientosModel extends Model{

    protected $table = 'movimientos';
    protected $primaryKey= 'IDmovimiento';
    protected $allowedFields = ['fechaingreso', 'codigo', 'ubicacion', 'cantidad','observaciones','responsable','tipo'];

    public function agregarMovimiento ($data){
        return $this->insert($data);
    }

    public function eliminarMovimiento($id){
        return $this->delete($id);
    }

}
