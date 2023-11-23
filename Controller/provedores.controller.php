<?php
require_once 'Model/provedores.php';

class provedoresController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new provedores();
    }
    
    public function Index(){
        require_once 'View/header.php';
        require_once 'View/provedores.php';
        require_once 'View/footer.php';
    }
    
    public function Crud(){
        $alm = new provedores();
        
        if(isset($_REQUEST['idprovedores'])){
            $alm = $this->model->getting($_REQUEST['idprovedores']);
        }
        
        require_once 'View/header.php';
        require_once 'View/provedores-editar.php';
        require_once 'View/footer.php';
    }
    
    public function Guardar(){
        $alm = new provedores();
        
        $alm->idprovedores = $_REQUEST['idprovedores'];
        $alm->nombrecomercial = $_REQUEST['nombrecomercial'];
        $alm->RFC = $_REQUEST['RFC'];
        $alm->nombreSAT = $_REQUEST['nombreSAT'];
        $alm->direccion = $_REQUEST['direccion'];
        $alm->telefono = $_REQUEST['telefono'];
        $alm->email = $_REQUEST['email'];

        // SI ID provedores ES MAYOR QUE CERO (0) INDICA QUE ES UNA ACTUALIZACIÓN DE ESA TUPLA EN LA TABLA provedores, SINO SIGNIFICA QUE ES UN NUEVO REGISTRO

        $alm->idprovedores > 0 
           ? $this->model->Actualizar($alm)
           : $this->model->Registrar($alm);

       //EL CÓDIGO ANTERIOR ES EQUIVALENTE A UTILIZAR CONDICIONALES IF, TAL COMO SE MUESTRA EN EL COMENTARIO A CONTINUACIÓN:

        /*if ($alm->idprovedores > 0 ) {
            $this->model->Actualizar($alm);
        }
        else{
           $this->model->Registrar($alm); 
        }*/
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['idprovedores']);
        header('Location: index.php');
    }
}
