<?php 
namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\Libro;

class Libros extends Controller{
    
    public function index(){

        $libro = new Libro();
        $datos['libros']=$libro->orderBy('id', 'ASC')->findAll();

        $datos['header']=view('template/header');
        $datos['footer']=view('template/footer');

        return view('libros/listar', $datos);

    }
    public function agregar(){

        $datos['header']=view('template/header');
        $datos['footer']=view('template/footer');

        return view('libros/agregar', $datos);
    }
    public function guardar(){

        $libro= new Libro();

        $validacion = $this->validate([
                'nombre' => 'required|min_length[3]',
                'imagen' => [
                'uploaded[imagen]',
                'mime_in[imagen,image/jpg,image/jpeg,image/png]',
                'max_size[imagen,1024]',
            ]
        ]);

        if(!$validacion){
            $session= session();
            $session->setFlashdata('mensaje', 'Los datos no son correctos');

            return redirect()->back()->withInput();
        }

        $nombre=$this->request->getVar('nombre');

        if($imagen=$this->request->getFile('imagen') ){
            $nuevoNombre= $imagen->getRandomName();
            $imagen->move('../public/uploads/', $nuevoNombre);
            $datos=[
                'nombre'=>$nombre,
                'imagen'=>$nuevoNombre
            ];
            $libro->insert($datos);

        }
        return $this->response->redirect(site_url('/listarLibros'));
    }

    public function borrar($id=null){
        
        $libro= new Libro();
        $datosLibro=$libro->where('id', $id)->first();

        $ruta=('../public/uploads/'.$datosLibro['imagen']);
        unlink($ruta);

        $libro->where('id', $id)->delete($id);

        return $this->response->redirect(site_url('/listarLibros'));
        
    }

    public function editar($id=null){

        $libro= new Libro();

        $datos['libro']=$libro->where('id', $id)->first();

        $datos['header']=view('template/header');
        $datos['footer']=view('template/footer');

        return view('libros/editar', $datos);
    }

    public function actualizar(){
    
        $libro= new Libro();

        $datos=[
            'nombre'=>$this->request->getVar('nombre')
        ];
        $id= $this->request->getVar('id');

        $validacion = $this->validate(['nombre' => 'required|min_length[3]']);

        if(!$validacion){
            $session= session();
            $session->setFlashdata('mensaje', 'Los datos no son correctos');

            return redirect()->back()->withInput();
        }

        $libro->update($id, $datos);

        $validacion = $this->validate([
            'imagen' => [
                'uploaded[imagen]',
                'mime_in[imagen,image/jpg,image/jpeg,image/png]',
                'max_size[imagen,1024]',
            ]
        ]);

        if($validacion){

            if($imagen=$this->request->getFile('imagen') ){
                
                $datosLibro=$libro->where('id', $id)->first();
                $ruta=('../public/uploads/'.$datosLibro['imagen']);
                unlink($ruta);

                $nuevoNombre= $imagen->getRandomName();
                $imagen->move('../public/uploads/', $nuevoNombre);

                $datos=['imagen'=>$nuevoNombre];
                $libro->update($id, $datos);
    
            }
        }
        return $this->response->redirect(site_url('/listarLibros'));
    }
}