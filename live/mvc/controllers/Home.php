

<?php 

class Home extends Controller{
    function SayHi(){
     //case 1:
        $teo = $this->model('SinhVienModel');
      echo $teo->GetSV();
      
    //   case2 : tốn thời gian require từng models) nhưng bỏ đc middleware(Controller);
    //    require_once "./mvc/models/SinhVienModel.php"; 
    //     $teo = new SinhVienModel();
    //     echo $teo->GetSV();
    }
    function Show($a,$b){
         $teo = $this->model('SinhVienModel');
        $tong =  $teo->tong($a,$b); //$tong =3
      $this->view("aodep",
      ["Number"=>$tong,
        "Page"=>"news",
        "Mau" => "red",
        "SoThich"=>["a","b","c"]
      ]);
    }
}
?>