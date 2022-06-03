<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Alquiler;

class Alquileres extends Controller{
    
    public function index(){

        $alquiler = new Alquiler();
        $datos['alquileres']=$alquiler->orderBy('id', 'ASC')->findAll();

        $datos['header']=view('template/header');
        $datos['footer']=view('template/footer');

        return view('alquileres/listar', $datos);

    }
    public function agregar(){

        $datos['header']=view('template/header');
        $datos['footer']=view('template/footer');

        return view('alquileres/agregar', $datos);
    }
    public function guardar(){

        $alquiler= new Alquiler();

        $fechaSalida=$this->request->getVar('fechaSalida');
        $fechaEntrada=$this->request->getVar('fechaEntrada');
        $idLector=$this->request->getVar('idLector');
        $idLibro=$this->request->getVar('idLibro');
            
            $datos=[
                'fechaSalida'=>$fechaSalida,
                'fechaEntrada'=>$fechaEntrada,
                'idLector'=>$idLector,
                'idLibro'=>$idLibro,
            ];
            $alquiler->insert($datos);

        return $this->response->redirect(site_url('/listarAlquileres'));
    }

    public function borrar($id=null){
        
        $alquiler= new Alquiler();
        $datosAlquiler=$alquiler->where('id', $id)->first();

        $alquiler->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('/listarAlquileres'));
        
    }

    public function editar($id=null){

        $alquiler= new Alquiler();

        $datos['alquiler']=$alquiler->where('id', $id)->first();

        $datos['header']=view('template/header');
        $datos['footer']=view('template/footer');

        return view('alquileres/editar', $datos);
    }

    public function actualizar(){
    
        $alquiler= new Alquiler();

        $datos=[
            'fechaSalida'=>$this->request->getVar('fechaSalida'),
            'fechaEntrada'=>$this->request->getVar('fechaEntrada'),
            'idLector'=>$this->request->getVar('idLector'),
            'idLibro'=>$this->request->getVar('idLibro')
        ];
        
        $id= $this->request->getVar('id');

        $alquiler->update($id, $datos);

        return $this->response->redirect(site_url('/listarAlquileres'));
    }
}