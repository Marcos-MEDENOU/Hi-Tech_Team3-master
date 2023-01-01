<?php
require "../../models/ShopRay.php";

/**
 * 
 */
class ShopRayController {

    /**
     * $conn
     */
    public $conn;
    public $ray;


    public function __construct() {
        $this->ray = new ShopRayModel();
    }

    public function returnAll() {
       $count= count($this->ray->selectAll());
       if($count>0) {
        return $this->ray->selectAll();
       } else {
        return false;
       }
    }

    public function returnDistinct() {
       $count= count($this->ray->selectDistinct());
       if($count>0) {
        return $this->ray->selectDistinct();
       } else {
        return false;
       }
    }

}

?>