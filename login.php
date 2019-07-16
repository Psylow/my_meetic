<?php
include('connexion.php');

class login extends connector
{
    private $email;
    private $password;


    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function login_usr()
    {
        if (isset($_POST['login_usr'])) {
            $this->email = $_POST['email'];
            $this->password = $_POST['password'];
            $result = "SELECT * FROM users WHERE e-mail = '" . $this->email . "' and password = '" . hash('sha512', $this->password) . "'";
            $sql = $this->bdd->prepare($result);
            $sql->execute();
            $row = $sql->fetch();
            if ($sql->rowCount() > 0) {
                $_SESSION["ID"] = $row['ID'];

                $_SESSION["email"] = $row['e-mail'];
                header("Location: profil.php");
            } else {
                header("Location: index.php");
            }
        }
    }
}
$user = new login();
$user->login_usr();