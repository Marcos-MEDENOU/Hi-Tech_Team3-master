<?php
require "../models/UserModel.php";

// echo "<pre>";
class Controller {

    /**
     * $usermodel
     */
    public $usermodel;
    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $confirm_password;

    public function __construct($firstname, $lastname, $email, $password, $confirm_password) {
        $this->firstname = $this->sanitaze(ucwords($firstname));
        $this->lastname = $this->sanitaze(strtoupper($lastname));
        $this->email = $email;
        $this->password = $password;
        $this->confirm_password = $confirm_password;
        $this->usermodel = new UserModel();
    }

    public function sanitaze($data) {
        $reg = preg_replace("/\s+/", " ", $data);
        $reg = preg_replace("/^\s*/", "", $reg);
        $data = $reg;
        return $data;
    }

    public function verifyControl() {
      $res = $this->usermodel->verify($this->email);
      $count = count($res);
       if($count>0) {
        echo "Vous faites déja partie des inscrits sur la plateforme";
        echo "<br>";
        } 
        else {
            $this->emptyInputs();
            $this->verifyPassword();
            $this->verifyEmail();
               $insert = $this->usermodel->insertUser($this->lastname, $this->firstname, $this->email, $this->password);
               echo "Connexion réussi a la base de donnée";
               echo "<br>";
               exit();
        }
    }

    public function emptyInputs() {
        if(empty($this->firstname) || empty($this->lastname) || empty($this->email) || empty($this->password) || empty($this->confirm_password)){
            echo "un ou plusieurs champs sont vides";
            echo "<br>";
        } 
        return false;
    }

    public function verifyPassword() {
        if ($this->password !== $this->confirm_password) {
            echo "les mots de passe ne sont pas identiques";
            echo "<br>";
            exit();
       } 
       return false;
    }

    public function verifyEmail() {
        if (!filter_var($this->email, FILTER_VALIDATE_EMAIL)) {
            echo "Adresse mail invalid";
            echo "<br>";
            exit();
        }
        return false;      
    }

}