<?php

namespace App\Controllers;
use App\Models\Usuarios;

class Home extends BaseController
{
    public function index()
    {
        $mensaje = session('mensaje');
		return view('login', ["mensaje" => $mensaje]);
    }

    public function dashboard(){
        $datos['header']=view('template/header');
        $datos['footer']=view('template/footer');
        return view('dashboard', $datos);
    }

    public function login() {

		$usuario = $this->request->getPost('usuario');
		$password = $this->request->getPost('password');
		$Usuario = new Usuarios();

		$datosUsuario = $Usuario->obtenerUsuario(['usuario' => $usuario]);

		if (count($datosUsuario) > 0 && 
			password_verify($password, $datosUsuario[0]['password'])) {

			$data = [
						"usuario" => $datosUsuario[0]['usuario'],
						"type" => $datosUsuario[0]['type']
					];

			$session = session();
			$session->set($data);

			return redirect()->to(base_url('/dashboard'));

		} else {
			return redirect()->to(base_url('/'));
		}


	}
    public function salir() {
		$session = session();
		$session->destroy();
		return redirect()->to(base_url('/'));
	}
}
