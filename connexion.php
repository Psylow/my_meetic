<?php

class connector
{
    public $bdd;

    public function __construct()
    {
        try
        {
            $bdd = new PDO('mysql:host=127.0.0.1;dbname=my_meetic', 'root', 'root');
            $this->bdd = $bdd;
        }
        catch(Exception $e)
        {
            die('Erreur : ' .$e->getMessage());
        }
    }
}
?>