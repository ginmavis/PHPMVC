<?php 
class UserModel extends DB{

    public function ListAll(){

    }

    public function InsertNewUser($username,$password,$email,$hoten,$diachi){
        
        //dung bcrypt cho password
        
        $qr = "INSERT INTO users VAL
        (null,'$username','$password','$email','$hoten','$diachi')
        ";
        $result = false;
        if(mysqli_query($this->con,$qr)){
            $result = true;
        }
        return json_encode($result);
    }
    public function CheckUsername($un){
        $qr = "SELECT id FROM users
        WHERE username='$un'
        ";
        $result = mysqli_query($this->con,$qr);
        $kq = false;
        if( mysqli_num_rows($result) > 0){
            $kq = true;
        }
        return json_encode($kq);

    }

}

?>