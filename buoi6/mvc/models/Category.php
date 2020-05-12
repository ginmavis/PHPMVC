<?php
class Category extends DB{
    public function getsv(){
        return  " Category ads model";
    }
    public function ListAll(){
         $qr= "SELECT * FROM category ";
        // return  mysqli_query($this->con,$qr);
        
       // phai dung cach nay
        $result= mysqli_query($this->con,$qr);
        $mang = array();

        while($row =  mysqli_fetch_array($result)){
            $mang[] = $row;
        }
        return json_encode($mang);


    
    }
}

?>