<?php 
class UserModel extends DB{

    public function ListAll(){

    }

    public function InsertNewUser($username,$password,$email,$hoten,$diachi){
        
        //dung bcrypt cho password
        
        $qr = "INSERT INTO users VALUES
        (null,'$username','$password','$email','$hoten','$diachi')
        ";
        $result = false;
        if(mysqli_query($this->con,$qr)){
            $result = true;
        }
        return json_encode($result);
    }

}

?>