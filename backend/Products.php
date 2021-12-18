<?php

require_once "connection.php";

class Products{
    private $ip = server;
    private $db = database;
    private $login = login;
    private $password = password;

    function __construct()
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->conn = $this->Connect();
    }

    private function Connect(){
        $conn = mysqli_connect($this->ip, $this->login, $this->password, $this->db);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        return $conn;
    }

    public function Index(int $limit = 10) {
        $result = mysqli_query($this->conn,"SELECT * FROM `products` WHERE `display`='yes' ORDER BY `DATE_CREATE` desc LIMIT 10");
//        print_r($rows);
        $result1 = array();
        while($rows = mysqli_fetch_assoc($result)) {
            $result1[] = array(
                'ID' => $rows['ID'],
                'PRODUCT_ID' => $rows['PRODUCT_ID'],
                'PRODUCT_NAME' => $rows['PRODUCT_NAME'],
                'PRODUCT_PRICE' => $rows['PRODUCT_PRICE'],
                'PRODUCT_ARTICLE' => $rows['PRODUCT_ARTICLE'],
                'PRODUCT_QUANTITY' => $rows['PRODUCT_QUANTITY'],
                'DATE_CREATE' => $rows['DATE_CREATE'],
                'DISPLAY' => $rows['display'],
            );
        }

        return $result1;
    }
    public function Hide($id){
        mysqli_query($this->conn,query:"UPDATE `products` SET `display`='no' WHERE `id`='$id'");
    }
    public function changeQuantity($id,$action){
        if($action=='add'){
            mysqli_query($this->conn,query:"UPDATE `products` SET `PRODUCT_QUANTITY`=`PRODUCT_QUANTITY`+1 WHERE `id`='$id'");
        }else{
            mysqli_query($this->conn,query:"UPDATE `products` SET `PRODUCT_QUANTITY`=`PRODUCT_QUANTITY`-1 WHERE `id`='$id'");
        }
    }


}
