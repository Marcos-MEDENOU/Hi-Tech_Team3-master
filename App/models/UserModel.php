<?php
require "../controllers/Connexion.php";

/**
 * 
 */
class UserModel extends Connexion {

    /**
     * $conn
     */
    public $conn;

    public $firstname;
    public $lastname;
    public $email;
    public $password;

    /**
     * verify()
     */
    public function verify($email) {
        $this->email = $email;

        /**
         * 
         */
        $conn = $this->connect();
        /**
         * $sql
         */
        $sql = "SELECT * FROM `hitec`.users WHERE users_email = ?;";
        /**
         * $stmt
         */
        $stmt = $conn->prepare($sql);
        $stmt->execute([$this->email]);
        $result = $stmt->fetchAll();
        return $result;
    }

    /**
     * insertUser()
     */
    public function insertUser($lastname, $firstname, $email, $password) {

        $conn = $this->connect();

        $this->lastname = $lastname;
        $this->firstname = $firstname;
        $this->email = $email;
        $this->password = $password;

        /**
         * $sql
         */
        $sql = "INSERT INTO `hitec`.users VALUES(NULL, :lastname, :firstname, :email, :password, 'customer')";
        
        $stmt = $conn->prepare($sql);
        $stmt->execute([
            ":lastname" => $this->lastname,
            ":firstname" => $this->firstname,
            ":email" => $this->email,
            ":password" => password_hash($this->password, PASSWORD_DEFAULT) 
        ]);

    }
}