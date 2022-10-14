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
    } //addPromotion close

    public function  displayPromotions()
    {
        $sql = "SELECT * FROM  promotions";
        $result = mysqli_query($this->__construct(), $sql);
        $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

        $data = [];

        foreach ($rows as $row) {
            $promotion = new Promotion();
            $promotion->setId($row['id']);
            $promotion->setName($row['name']);

            $data[] = $promotion;
        }
        return $data;
    }



    public function deletePromotion($id)
    {
        $sql = "DELETE FROM promotions WHERE id= '$id'";

        mysqli_query($this->__construct(), $sql);
    }


    public function getPromotionById($id)
    {
        $sql = "SELECT * FROM promotions WHERE id=$id";
        $result = mysqli_query($this->__construct(), $sql);
        $rows = mysqli_fetch_assoc($result);

        $promotion = new Promotion();
        $promotion->setId($rows['id']);
        $promotion->setName($rows['name']);

        return $promotion;
    }


    public function updatePromotion($id, $name)
    {
        // Sql query
        $updateRow = "UPDATE promotions SET name = '$name' WHERE id = $id";

        // Execute query
        mysqli_query($this->__construct(), $updateRow);
    }
    public function searchPromo($promotion)
    {
        $name = $promotion->getName();

        $search = "SELECT * FROM promotions WHERE
        name LIKE '%$name%' ";

        return mysqli_query($this->__construct(), $search);
    }
}
