<?php

namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MovimientosModel;
use App\Models\UbicacionesModel;

class IngresosController extends Controller {

    public function index(){
        $movimientosModel = new MovimientosModel();
        $ubicacionesModel = new UbicacionesModel();
        $data['ingresos'] = $movimientosModel->paginate(10);
        $data['pager']= $movimientosModel->pager;  //Ojo uso pager para mi paginacion basandome en documentacionoficial de codeigniter 4 Jcampos
        $data['ubicaciones']= $ubicacionesModel->findAll();
        return view('ingresos/index', $data);
    }

    public function guardar(){
        $movimientosModel = new MovimientosModel();
        $movimiento = [
            'fechaingreso' => $this->request->getPost('fechaingreso'),
            'codigo'=> $this->request->getPost('codigo'),
            'ubicacion'=> $this->request->getPost('ubicacion'),
            'cantidad' => $this->request->getPost('cantidad'),
            'observaciones'=> $this->request->getPost('observaciones'),
            'responsable'=> $this->request->getPost('responsable'),
            'tipo'=> 'ingreso',
        ];

        if (!empty($movimiento['fechaingreso']) && !empty($movimiento['codigo']) && !empty($movimiento['ubicacion']) && !empty($movimiento['cantidad']) && !empty($movimiento['responsable'])) {
            $movimientosModel->agregarMovimiento($movimiento);
            return redirect()->to(base_url('ingresos'))->with('success', 'Ingreso agregado con éxito.');
        } else {
            return redirect()->to(base_url('ingresos'))->with('error', 'El ingreso no fue agregado. Verifique los datos.');
        }
    }

    public function eliminar ($id){
        $movimientosModel = new MovimientosModel();
        $movimientosModel->eliminarMovimiento($id);
        return redirect()->to(base_url('ingresos'));
    }

   
}

?>