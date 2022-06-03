<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Lector;

class Lectores extends Controller{
    
    public function index(){

        $lector = new Lector();
        $datos['lectores']=$lector->orderBy('id', 'ASC')->findAll();

        $datos['header']=view('template/header');
        $datos['footer']=view('template/footer');

        return view('lectores/listar', $datos);

    }
    public function agregar(){

        $datos['header']=view('template/header');
        $datos['footer']=view('template/footer');

        return view('lectores/agregar', $datos);
    }
    public function guardar(){

        $lector= new Lector();

        $validacion = $this->validate([
                'nombre' => 'required|min_length[3]',
                'telefono' => 'required|min_length[3]',
                'direccion' => 'required|min_length[3]'
        ]);

        if(!$validacion){
            $session= session();
            $session->setFlashdata('mensaje', 'Los datos no son correctos');

            return redirect()->back()->withInput();
        }

        $nombre=$this->request->getVar('nombre');
        $telefono=$this->request->getVar('telefono');
        $direccion=$this->request->getVar('direccion');
            
            $datos=[
                'nombre'=>$nombre,
                'telefono'=>$telefono,
                'direccion'=>$direccion
            ];
            $lector->insert($datos);

        return $this->response->redirect(site_url('/listarLectores'));
    }

    public function borrar($id=null){
        
        $lector= new Lector();
        $datosLector=$lector->where('id', $id)->first();

        $lector->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('/listarLectores'));
        
    }

    public function editar($id=null){

        $lector= new Lector();

        $datos['lector']=$lector->where('id', $id)->first();

        $datos['header']=view('template/header');
        $datos['footer']=view('template/footer');

        return view('lectores/editar', $datos);
    }

    public function actualizar(){
    
        $lector= new Lector();

        $datos=[
            'nombre'=>$this->request->getVar('nombre'),
            'telefono'=>$this->request->getVar('telefono'),
            'direccion'=>$this->request->getVar('direccion')
        ];
        
        $id= $this->request->getVar('id');

        $validacion = $this->validate(['nombre' => 'required|min_length[3]']);

        if(!$validacion){
            $session= session();
            $session->setFlashdata('mensaje', 'Los datos no son correctos');

            return redirect()->back()->withInput();
        }

        $lector->update($id, $datos);

        return $this->response->redirect(site_url('/listarLectores'));
    }
}