<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MovimientosModel;
use App\Models\UbicacionesModel;
class EgresosController extends MovimientosController{

    public function index(){
        $movimientosModel = new MovimientosModel();
        $ubicacionesModel = new  UbicacionesModel();
        $page = $this->request->getVar('page')??1;
        $data['egresos'] = $movimientosModel->getEgresos(10,($page - 1)*10);
        $data['pager'] = $movimientosModel->pager;
        $data['ubicaciones']= $ubicacionesModel->findAll();
        return view('egresos/index', $data);
    }

    public function guardar(){
        return $this->guardarMovimiento('egreso');
    }

    public function eliminar($id){
        return $this->eliminarMovimiento('$id', 'egreso');
    }
}