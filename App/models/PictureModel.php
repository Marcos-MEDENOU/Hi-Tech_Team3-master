<?php

/**
 * 
 */
class PictureModel extends Connexion {

    /**
     * $conn
     */
    public $conn;

    
    public $picture_name;
    public $ref_pro;

    
    public function insertPictures($picture_name, $ref_pro) {

        $this->picture_name = $picture_name;
        $this->ref_pro = $ref_pro;
        /**
         * 
         */
        $conn = $this->connect();
        /**
         * $sql
         */
        $sql = "INSERT INTO `hitec`.picture VALUES(NULL, :picture_name, :reference)";
        /**
         * $stmt
         */
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ":picture_name" => $this->picture_name,
            ":reference" => $this->ref_pro,
        ]);
    }

}