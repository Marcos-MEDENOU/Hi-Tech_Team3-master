<?php
require "../models/PortraitModel.php";

/**
 * 
 */
class PortraitController {

    public $PortraitModel;
    
    public $image_name;
    public $image_tmpname;
    public $image_size;
    public $image_error;
    public $title;
    public $text;
    public $ref_pro;

    public function __construct($image_name, $image_tmpname, $image_size, $image_error, $title, $text, $ref_pro) {
        $this->image_name = $image_name;
        $this->image_tmpname = $image_tmpname;
        $this->image_size = $image_size;
        $this->image_error = $image_error;
        $this->title = $title;
        $this->text = $text;
        $this->ref_pro = $ref_pro;
        $this->PortraitModel = new PortraitModel();
    }

    public function insertPortraitController() {
        $count = count($this->image_name);
        for ($i=0; $i<$count; $i++) {
            $tabExtension = explode('.', $this->image_name[$i]);
            $extension = strtolower(end($tabExtension));
            $extensions = ['jpg', 'png', 'jpeg', 'gif'];
            $maxSize = 4000000;

            if(in_array($extension, $extensions) && $this->image_size[$i] <= $maxSize && $this->image_error[$i] == 0) {

                $uniqueName = uniqid('', true);
                // uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
                $file = $uniqueName.".".$extension;
                // $file = 5f586bf96dcd38.73540086.jpg
                move_uploaded_file($this->image_tmpname[$i], '../Views/media/medias_product/'.$file);
                
                $insert = $this->PortraitModel->insertPortrait($this->title[$i], $file, $this->text[$i], $this->ref_pro);
                
                // header("Location:../Views/admin/product-empty.php?msg=good");
                // exit();
            }
            else {
                header("Location:../Views/admin/product-empty.php?msg=bad");
                exit();
                // echo 'Image non enregistrée';
            }
        }
    }

}