<?php

namespace App\Models;

Use CodeIgniter\Model;

class MovimientosModel extends Model{

    protected $table = 'movimientos';
    protected $primaryKey= 'IDmovimiento';
    protected $allowedFields = ['fechaingreso', 'codigo', 'ubicacion', 'cantidad','observaciones','responsable','tipo','estado'];

    public function agregarMovimiento ($data){
        return $this->insert($data);
    }

    public function eliminarMovimiento($id){
        return $this->delete($id);
    }

    public function getMovimientos($limit = 10, $offset = 0){
        return $this->select('movimientos.*, ubicacion.ubicacion AS nombre_ubicacion')
                    ->join('ubicacion', 'ubicacion.IDubicacion= movimientos.ubicacion')
                    ->where('estado', 'activo')
                    ->paginate($limit, 'default', $offset);
    }

    public function getEgresos($limit = 10, $offset = 0){
        return $this->select('movimientos.*, ubicacion.ubicacion AS nombre_ubicacion')
                    ->join('ubicacion', 'ubicacion.IDubicacion = movimientos.ubicacion')
                    ->where('tipo', 'egreso') 
                    ->where('estado', 'activo')
                    ->paginate($limit, 'default', $offset);
    }

    //ojo uso movbimientos por ID para impresion 
    public function getMovimientoById($id) {
        return $this->select('movimientos.*, ubicacion.ubicacion AS nombre_ubicacion')
                    ->join('ubicacion', 'ubicacion.IDubicacion = movimientos.ubicacion')
                    ->where('movimientos.IDmovimiento', $id)
                    ->first();
    }
    
    

}
