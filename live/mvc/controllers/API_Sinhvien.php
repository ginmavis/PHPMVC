
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
            array_push($mang,new SinhVien($s["ID"],$s["HOTEN"],$s["NAMSINH"]));
        }
        // ép mảng về dạng json
         echo json_encode($mang);
    } 
}
class SinhVien{
    public $ID;
    public $HOTEN;
    public $NAMSINH;
    public function __construct($id,$hoten,$namsinh)
    {
        $this->ID = $id;
        $this->HOTEN = $hoten;
        $this->NAMSINH = $namsinh;
    }
}
?>