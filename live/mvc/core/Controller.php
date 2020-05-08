<?php 
class Controller{
    public function model($model){
        require_once "./mvc/models/".$model.".php";
        
        return new $model;

        // is mean : return $model =new $model 
        // return $model =new SinhVienModel();

    }
    
    public function view($view, $data = []){
        // $data : hung du lieu kem theo tu home
    require_once "./mvc/views/".$view .".php";

    }
}
?>