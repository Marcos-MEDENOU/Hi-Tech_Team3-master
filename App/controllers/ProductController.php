<?php
require "../models/ProductModel.php";

/**
 * 
 */
class ProductController {

    public $ProductModel;

    public $brand;
    public $ref_pro;
    public $label;
    public $price;
    public $price_eco;
    public $desc_pro;
    public $status_pro;
    public $shopray_id;

    public function __construct($ref_pro, $brand, $label, $price, $price_eco, $desc_pro, $status_pro, $shopray_id) {
        $this->brand = $brand;
        $this->ref_pro = $ref_pro;
        $this->label = $label;
        $this->price = $price;
        $this->price_eco = $price_eco;
        $this->desc_pro = $desc_pro;
        $this->status_pro = $status_pro;
        $this->shopray_id = $shopray_id;
        $this->ProductModel = new ProductModel();
    }

    public function insertProductsController() {
        $res = $this->ProductModel->verifySelect($this->ref_pro);
        $count = count($res);
        if($count>0) {
            header("Location:../Views/admin/product-empty.php?msg=error");
            exit();
        } else {
            $insert = $this->ProductModel->insertProducts($this->ref_pro, $this->brand, $this->label, $this->price, $this->price_eco, $this->desc_pro, $this->status_pro, $this->shopray_id);
        }
    }

}