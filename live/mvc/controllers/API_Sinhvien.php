
<?php 

class API_Sinhvien extends Controller{
    public function DanhSach()
    {
        // call Model
        $sinhvien = $this->model('SinhVienModel');
        //get function SinhVien() from models/SinhVienModel
        $sv = $sinhvien->SinhVien();
        $mang = [];
        while($s = mysqli_fetch_array($sv)){
             array_push($mang,new SinhVien($s["id"],$s["hoten"],$s["namsinh"]));
            // array_push($mang,["id"=>$s["id"],
            // "hoten"=>$s["hoten"],
            // "namsinh"=>$s["namsinh"]
            // ]);
        }
        // ép mảng về dạng json
        print_r($mang);
         echo json_encode($mang);
    } 
}
class SinhVien{
    public $ID;
    public $HOTEN;
    public $NAMSINH;

    public function __construct($id,$hoten,$namsinh){
        $this->ID=$id;
        $this->HOTEN=$hoten;
        $this->NAMSINH = $namsinh;
    }
    

}
?>