<?php

include('connexion.php');
session_start();
class create extends connector
{
    private $nom;
    private $prenom;
    private $date;
    private $sexe;
    private $ville;
    private $email;
    private $password;

    public function setNom($nom){
        $this->nom = $nom;
    }

    public function setPrenom($prenom){
        $this->prenom = $prenom;
    }

    public function setDate($date){
        $this->date = $date;
    }

    public function setSexe($sexe){
        $this->sexe = $sexe;
    }

    public function setVille($ville){
        $this->ville = $ville;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function setPassword($password){
        $this->password = $password;
    }

    public function register()
    {
        if (isset($_POST['reg_user'])) {
            $this->nom = $_POST['nom'];
            $this->prenom = $_POST['prenom'];
            $this->date = $_POST['date'];
            $this->sexe = $_POST['boy'];
            $this->ville = $_POST['ville'];
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];


            $user_check_query = "SELECT * FROM users WHERE email='$this->email' LIMIT 1";
            $stmt = $this->bdd->prepare($user_check_query);
            $stmt->execute();

            $this->password = hash('sha512', $this->password);
            $query = "INSERT INTO users (nom, prenom, birthday, sexe, ville, email, password) 
  			  VALUES('$this->nom', '$this->prenom', '$this->date', '$this->sexe', '$this->ville', '$this->email', '$this->password')";
            $sql = $this->bdd->prepare($query);
            $sql->execute();
            $_SESSION['email'] = $this->email;
            header('location: profil.php');
        }
    }
}
$user = new create();
$user->register();

