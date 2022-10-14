<?php

require_once '../business/classManager.php';


if(isset($_GET['id'])){
    $id = $_GET['id'];

    $promotionDelete = new Promomanager();
    $promotionDelete->deletePromotion($id);
    header('location: addPromotion.php');

}




?>