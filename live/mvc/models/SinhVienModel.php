<?php 

class SinhVienModel extends DB{
    public function GetSV(){
        //connect db
        return "Nguyen Van Teo";
    }
    public function tong($n,$m)
    {
        return $n+$m;
    }
    public function SinhVien(){
        $qr= "SELECT*FROM sinhvien";
        return mysqli_query($this->con,$qr);
    }

}
?>