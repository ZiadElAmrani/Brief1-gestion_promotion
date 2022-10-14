<?php

require_once '../data-access/promotionDAL.php';


class Promomanager {

    public function displayPromotions(){
        $promomanager = new PromotionDAL();

        return $promomanager->displayPromotions();
    }

    public function deletePromotion($id){
        $promotionDelete = new PromotionDAL();

        return $promotionDelete->deletePromotion($id);
    }

    public function getPromotionById($id){
        $promotionUpdate = new PromotionDAL();

        return $promotionUpdate->getPromotionById($id);
    }

    public function updatePromotion($id, $name){
        $promotionUpdate = new PromotionDAL();

        return $promotionUpdate->updatePromotion($id,$name);
    }




}
