<?php
class Home extends Controller {
    //Model
    public $CategoryModel;
    public $AdsModel;
    public function __construct()
    {
     
    $this->CategoryModel = $this->model("Category");
   $this->AdsModel=$this->model("AdsModel");   
     
    }
    
    public function SayHi(){
        $this->view("master1",[
            "page" => "home",
            "categories" => $this->CategoryModel->ListAll() ,
            "ads" => $this->AdsModel->ListAll()

        ]);
    }

}   

?>