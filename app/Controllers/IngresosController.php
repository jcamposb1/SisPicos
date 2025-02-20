<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MovimientosModel;

class IngresosController extends Controller {

    public function index(){
        $movimientosModel = new MovimientosModel();
        $data['ingresos'] = $movimientosModel->paginate(10);
        $data['pager']= $movimientosModel->pager;  //Ojo uso pager para mi paginacion basandome en documentacionoficial de codeigniter 4 Jcampos
        return view('ingresos/index', $data);
    }

    public function guardar(){
        $movimientosModel = new MovimientosModel();
        $movimiento = $this->request->getPost('movimientos');

        if(!empty($movimiento)){
          $movimientosModel->insert(['movimientos'=> $movimiento]);
          return redirect()->to(base_url('ingresos'))->with('success','Ingreso agregado con exito.');
        } else {
            return redirect()->to(base_url('ingresos'))->with('error','El ingreso no fue agregado.');
        }
        return redirect()->to(base_url('ingresos'));
    }

    public function eliminar ($id){
        $movimientosModel = new MovimientosModel();
        $movimientosModel->eliminarMovimiento($id);
        return redirect()->to(base_url('ingresos'));
    }

   
}

?>