<?php

namespace App\Controllers;

use App\Models\UbicacionesModel;
use CodeIgniter\Controller;

class UbicacionesController extends Controller{

    public function index(){
        $ubicacionesModel = new UbicacionesModel();
        $data['ubicaciones'] = $ubicacionesModel->paginate(7);
        $data['pager'] = $ubicacionesModel->pager;
        return view('ubicaciones/index', $data);
    }

    public function guardar(){

        $ubicacionesModel = new UbicacionesModel();
        $ubicacion = $this->request->getPost('ubicacion');

        if (!empty($ubicacion)) {

            if (!$ubicacionesModel->existeUbicacion($ubicacion)) {
                $ubicacionesModel->insert(['ubicacion' => $ubicacion]);
                return redirect()->to(base_url('ubicaciones'))->with('success', 'Ubicación agregada con éxito.');
            } else {
                return redirect()->to(base_url('ubicaciones'))->with('error', 'La ubicación ya existe.');
            }
        }

        return redirect()->to(base_url('ubicaciones'));
    }

    public function eliminar ($id){
        $ubicacionesModel = new UbicacionesModel();
        $ubicacionesModel->eliminarUbicacion($id);
        return redirect()->to(base_url('ubicaciones'));
    }
}