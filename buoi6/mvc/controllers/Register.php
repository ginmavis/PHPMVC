<?php
class Register extends Controller{
    //Model
    public $category;
    public $ads;
    public $UserModel;
    public function __construct(){
    $this->category =  $this->model("Category");
    $this->ads =  $this->model("AdsModel");
    $this->UserModel = $this->model("UserModel");    
}

    public function SayHi(){
        $this->view("master1",[
            "page"=> "register",
            "categories" => $this->category->ListAll(),
            "ads" => $this->ads->ListAll()
        ]);
    }
    public function KhachHangDangKi(){
        // 1 . getdata khach hang nhap
        if(isset($_POST['btnRegister'])){
            $username = $_POST['username'];
            $password = $_POST['password'];
             //dung bcrypt cho password
            $password = password_hash($password, PASSWORD_DEFAULT);
            $email = $_POST['email'];
            $hoten = $_POST['hoten'];
            $diachi = $_POST['diachi'];
          
            // 2 . insert database bang user        
            $kq =  $this->UserModel->InsertNewUser($username,$password,$email,$hoten,$diachi);    
           

        // 3. Show chữ "OK/Fail"
            $this->view("master1",[
                "page"=> "register",
                "categories" => $this->category->ListAll(),
                "ads" => $this->ads->ListAll(),
                "result" => $kq
                ]);
        }
     
    }
}
?>