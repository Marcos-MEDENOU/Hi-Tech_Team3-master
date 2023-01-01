<?php

/**
 * 
 */
class ProductModel extends Connexion {

    /**
     * $conn
     */
    public $conn;

    public $brand;
    public $ref_pro;
    public $label;
    public $price;
    public $price_eco;
    public $desc_pro;
    public $status_pro;
    public $shopray_id;

    public function verifySelect($ref_pro) {
        $this->ref_pro = $ref_pro;
        
        /**
         * 
         */
        $conn = $this->connect();
        /**
         * $sql
         */
        $sql = "SELECT * FROM `hitec`.product WHERE reference = ?;";
        /**
         * $stmt
         */
        $stmt = $conn->prepare($sql);
        $stmt->execute([$this->ref_pro]);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function insertProducts($ref_pro, $brand, $label, $price, $price_eco, $desc_pro, $status_pro, $shopray_id) {

        $this->brand = $brand;
        $this->ref_pro = $ref_pro;
        $this->label = $label;
        $this->price = $price;
        $this->price_eco = $price_eco;
        $this->desc_pro = $desc_pro;
        $this->status_pro = $status_pro;
        $this->shopray_id = $shopray_id;
        /**
         * 
         */
        $conn = $this->connect();
        /**
         * $sql
         */
        $sql = "INSERT INTO `hitec`.product VALUES(:ref_pro, :brand, :label, :price, :price_eco, :desc_pro, :status_pro, :shopray_id)";
        /**
         * $stmt
         */
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ":ref_pro" => $this->ref_pro,
            ":brand" => $this->brand,
            ":label" => $this->label, 
            ":price" => $this->price, 
            ":price_eco" => $this->price_eco, 
            ":desc_pro" => $this->desc_pro, 
            ":status_pro" => $this->status_pro, 
            ":shopray_id" => $this->shopray_id 
        ]);
    }

}