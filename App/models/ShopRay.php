<?php
require "../../controllers/Connexion.php";

/**
 * 
 */
class ShopRayModel extends Connexion {

    /**
     * $conn
     */
    public $conn;


    public function selectAll() {

        
        /**
         * 
         */
        $conn = $this->connect();
        /**
         * $sql
         */
        $sql = "SELECT * FROM `hitec`.shopray;";
        /**
         * $stmt
         */
        $stmt = $conn->query($sql);
        $result = $stmt->fetchAll();
        return $result;
    }

    public function selectDistinct() {

        
        /**
         * 
         */
        $conn = $this->connect();
        /**
         * $sql
         */
        $sql = "SELECT DISTINCT shopray_name_shop FROM `hitec`.shopray;";
        /**
         * $stmt
         */
        $stmt = $conn->query($sql);
        $result = $stmt->fetchAll();
        return $result;
    }

}