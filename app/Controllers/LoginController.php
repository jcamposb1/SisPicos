<?php
namespace APP\Controllers;
use App\Controllers\BaseController;
use App\Models\UsuarioModel;
use CodeIgniter\HTTP\ResponseInterface;

class LoginController extends BaseController{

    public function login(){
            return view('login/login');
    }

    public function autenticar() {
        $usuario = $this->request->getPost('usuario');
        $contrasena = $this->request->getPost('contrasena');

        $userModel = new UsuarioModel();
        $usuarioData = $userModel->obtenerUsuario($usuario);

        if($usuarioData && password_verify($contrasena,$usuarioData['contrasena'])){

            session()->set([
                'usuario'=>$usuarioData['usuario'],
                'contrasena'=>$usuarioData['nombre'],
                'apellido'=>$usuarioData['apellido'],
                'tipo'=>$usuarioData['tipo'],
                'isLoggedIn'=> true
            ]);
            return redirect()->to('/dashboard');
        } else{
            return redirect()->back()->with('error', 'Usuario o contraseña incorrectos');
        }
    }

    public function logout(){
        session()->destroy();
        return redirect()->to('/login');
    }
}
?>