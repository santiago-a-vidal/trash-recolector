<?php
require_once  "./view/FormView.php";
require_once  "./model/FormModel.php";
class FormController
{
   // private $model;
    private $titulo;
    private $view;
    function __construct(){
        $this->model= new FormModel();
        $this->titulo = "Formulario Principal";
        $this->view = new FormView();
    }

    public function home()
    {
        $this->view->mostrar($this->titulo);
    }

    public function agregarDenuncia(){
     $latitud=$_POST['latitude'];
    $longitud=$_POST['longitude'];
    $detalle=$_POST['details'];
    $rutaTempimagen=$_FILES['imagenes']['name'];
    $id_usuario=99999;
    $this->model->createAComplaint($detalle,$latitud,$longitud,$rutaTempimagen[0],$id_usuario);
    $this->home();





    }



    function sonJPG($ruta){

                    $tamaño = strlen($ruta)-3;
                    $ext = substr($ruta, $tamaño);
           return     (($ext == "jpg") || ($ext == "png"));


      }
}

?>
