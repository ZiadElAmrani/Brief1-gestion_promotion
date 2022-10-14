<?php

require_once '../data-access/data-acces.php';
require_once "../data-access/promotion.php";
class PromotionDAL extends Connection
{
    public function addPromotion($promotion)
    {
        $name  = $promotion->getName();
        $sql = "INSERT INTO promotions (name) VALUES ('$name')";
        mysqli_query($this->__construct(), $sql);
    }   
}
