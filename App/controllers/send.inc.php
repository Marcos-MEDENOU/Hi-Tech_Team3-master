<?php

require "Connexion.php";
require "ProductController.php";
require "PictureController.php";
require "PortraitController.php";

if($_SERVER["REQUEST_METHOD"] === "POST" & isset($_POST["validation"])) {

    $status = $_POST["status"];
    $option_boutique = $_POST["option_boutique"];
    $option_rayon = $_POST["option_rayon"];
    $brand = $_POST["marque"];
    $ref_pro = $_POST["ref_pro"];
    $label = $_POST["etiq_pro"];
    $price = $_POST["price"];
    $eco_price = $_POST["eco_price"];
    $des_pro = $_POST["des_pro"];

    $photos = $_FILES["photos"]["name"];
    $tmpName = $_FILES['photos']['tmp_name'];
    $size = $_FILES['photos']['size'];
    $error = $_FILES['photos']['error'];

    $title = $_POST["title"];
    $image = $_FILES["image"]["name"];
    $image_tmpname = $_FILES["image"]["tmp_name"];
    $image_size = $_FILES["image"]["size"];
    $image_error = $_FILES["image"]["error"];
    $text = $_POST["text"];


    $products = new ProductController($ref_pro, $brand, $label, $price, $eco_price, $des_pro, $status, $option_rayon);
    $products->insertProductsController();
        
    $pictures = new PictureController($photos, $tmpName, $size, $error, $ref_pro);
    $pictures->insertPicturesController();
        
    $portrait = new PortraitController($image, $image_tmpname, $image_size, $image_error, $title, $text, $ref_pro);
    $portrait->insertPortraitController();

    header("Location:../Views/admin/product-empty.php?msg=good");
    exit();

} else {
    header("Location:../Views/admin/product-empty.php?msg=bad");
    exit();
}
?>