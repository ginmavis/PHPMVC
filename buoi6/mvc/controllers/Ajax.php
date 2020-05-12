<?php
class Ajax extends Controller{
    public $UserModel;
    public function __construct(){
    $this->UserModel = $this->model("UserModel");
    
}
public  function checkUsername(){
    // un la khi khach hang nhap moi co post
    // nhap dia chi se bi loi . muon kiem tra thi dung host man
    $un = $_POST['un'];
    echo $this->UserModel->CheckUsername($un);

     
}

} 
?>