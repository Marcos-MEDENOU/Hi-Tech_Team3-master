<?php
require "../models/PictureModel.php";

/**
 * 
 */
class PictureController {

    public $PictureModel;
    
    public $picture_name;
    public $picture_tmpname;
    public $picture_size;
    public $picture_error;
    public $ref_pro;

    public function __construct(array $picture_name , array $picture_tmpname , $picture_size , $picture_error, $ref_pro) {
        $this->picture_name = $picture_name;
        $this->picture_tmpname = $picture_tmpname;
        $this->picture_size = $picture_size;
        $this->picture_error = $picture_error;
        $this->ref_pro = $ref_pro;
        $this->PictureModel = new PictureModel();
    }

    public function insertPicturesController() {
        $count = count($this->picture_name);
        for ($i=0; $i<$count; $i++) {
            $tabExtension = explode('.', $this->picture_name[$i]);
            $extension = strtolower(end($tabExtension));
            $extensions = ['jpg', 'png', 'jpeg', 'gif'];
            $maxSize = 4000000;

            if(in_array($extension, $extensions) && $this->picture_size[$i] <= $maxSize && $this->picture_error[$i] == 0) {

                $uniqueName = uniqid('', true);
                // uniqid génère quelque chose comme ca : 5f586bf96dcd38.73540086
                $file = $uniqueName.".".$extension;
                // $file = 5f586bf96dcd38.73540086.jpg
                move_uploaded_file($this->picture_tmpname[$i], '../Views/media/'.$file);
                
                $insert = $this->PictureModel->insertPictures($file, $this->ref_pro);
                
                // header("Location:../Views/admin/product-empty.php?msg=good");
            }
            else {
                echo 'Image non enregistrée';
            }
        }
    }

}