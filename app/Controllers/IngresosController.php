<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MovimientosModel;
use App\Models\UbicacionesModel;
use App\Controllers\MovimientosController;

class IngresosController extends MovimientosController {

    public function index(){
        $movimientosModel = new MovimientosModel();
        $ubicacionesModel = new UbicacionesModel();
        $page = $this->request->getVar('page') ?? 1;
        $data['ingresos'] = $movimientosModel->getMovimientos(10, ($page - 1) * 10);
        $data['pager']= $movimientosModel->pager;  //Ojo uso pager para mi paginacion basandome en documentacionoficial de codeigniter 4 Jcampos
        $data['ubicaciones']= $ubicacionesModel->findAll();
        return view('ingresos/index', $data);
    }

    public function guardar(){
        return $this->guardarMovimiento('ingreso');
    }

    public function eliminar($id){
        return $this->eliminarMovimiento($id, 'ingreso');
    }
    

   
}

?>