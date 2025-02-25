<?php
namespace App\Controllers;
use CodeIgniter\Controller;
use App\Models\MovimientosModel;

class MovimientosController extends Controller {
    protected $movimientosModel;

    public function __construct() {
        $this->movimientosModel = new MovimientosModel();
    }

    protected function guardarMovimiento($tipo) {
        $movimiento = [
            'fechaingreso' => $this->request->getPost('fechaingreso'),
            'codigo' => $this->request->getPost('codigo'),
            'ubicacion' => $this->request->getPost('ubicacion'),
            'cantidad' => $this->request->getPost('cantidad'),
            'observaciones' => $this->request->getPost('observaciones'),
            'responsable' => $this->request->getPost('responsable'),
            'tipo' => $tipo
        ];

        if (!empty($movimiento['fechaingreso']) && !empty($movimiento['codigo']) && !empty($movimiento['ubicacion']) && !empty($movimiento['cantidad']) && !empty($movimiento['responsable'])) {
            $this->movimientosModel->agregarMovimiento($movimiento);
            return redirect()->to(base_url($tipo . 's'))->with('success', ucfirst($tipo) . ' agregado con éxito.');
        } else {
            return redirect()->to(base_url($tipo . 's'))->with('error', 'El ' . $tipo . ' no fue agregado. Verifique los datos.');
        }
    }

    protected function eliminarMovimiento($id, $tipo) {
        $this->movimientosModel->update($id,['estado'=>'inactivo']);
        return redirect()->to(base_url($tipo . 's'))->with('success', ucfirst($tipo) . ' marcado como inactivo éxito.');
    }
}
?>
