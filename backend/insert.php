<?php

require_once "connection.php";
require_once 'Products.php';



$change = new Products();

if(isset($_POST['add_id'])){
    $id=$_POST['add_id'];
    $change->changeQuantity( $id,'add');
}
if(isset($_POST['del_id'])){
    $id=$_POST['del_id'];
    $change->changeQuantity($id,'del');
}

if(isset($_POST['id'])){
    $id=$_POST['id'];
    $change->Hide($id);
}




