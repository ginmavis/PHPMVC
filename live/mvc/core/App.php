<?php 
class App
{
    //  http://localhost:8000/PhpMVC/live/Home/SayHi/1/2/3
    protected $controller="Home"; //Home
    protected $action="SayHi";  //SayHi
    protected $params=[];  //1/2/3
    // _construct is special function when create a method App its running _construction method now
    // _construct là biến đặc biệt khi bạn tạo cái biến có kiểu app thì nó sẽ chạy ngay _construct
    public function __construct(){
        $arr= $this->UrlProcess();
      // print_r($arr);
       
        //Xu li Controller
        //Check exists file Home.php
        // Neu go sai mien se tu dong ve Home(nho kiem tra ton tai cua bien)
        if(isset($arr[0])){
        if(file_exists("./mvc/controllers/". $arr[0] .".php")){
            $this->controller = $arr[0];

            //huy $arr[0] de xu li params
            unset($arr[0]);
        }}
        require_once "./mvc/controllers/". $this->controller .".php";
        
        $this->controller= new $this->controller;

        //Xu li function(Action)(SayHi)
        if(isset($arr[1])){
            // check exists methods
            //kiem tra gia tri truyen vao (ten funtion) co ton tai trong 
            // $this->controlle(Home da duoc require o tren)
            if( method_exists( $this->controller, $arr[1])){
                    $this->action = $arr[1];

                  
            }
               //huy $arr[0] de xu li params
            unset($arr[1]);
        }
        
        ///echo $this->action;

        //xu li params (1/2/3)
        // nếu mảng arr tồn tại thì gán giá trị mảng là array_values của mảng arr
        // nếu không tồn tại thì gán  rỗng
        $this->params = $arr ? array_values($arr) : [];
      
        // echo $this->controller ."<br>";
        // echo $this->action ."<br>";
        // print_r($this->params) ."<br>";

        //Khoi tao ham dac biet de khoi tao lop
        //tao ra 1 bien controller co kieu sayhi , tham so truyen vao la params
        call_user_func_array([$this->controller,$this->action], $this->params);
    }
    public function UrlProcess(){
        //Home/SayHi/1/2/3
        if (isset($_GET["url"])) {
            $url = $_GET["url"];
           // trim : dọn khoảng trắng or kí hiệu
           //filter_var : đảm bảo check theo dấu / của trim
           // explode : cắt dấu / và đưa từng string vào array
            return explode("/",filter_var(trim($_GET["url"],"/")));
           
        }
       
    }

}

?>