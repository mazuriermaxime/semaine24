<?php
    function connexionBase()
    {
       // Paramètre de connexion serveur
       if($_SERVER["SERVER_NAME"] == "dev.amorce.org")
       {
           $host = "localhost";
           $login= "wilgaa";  // Votre loggin d'accès au serveur de BDD 
           $password="wa20103";    // Le Password pour vous identifier auprès du serveur
           $base = "wilgaa";  // le nom de la base sur dev.amorce
       }
       else 
        {
            // pour la connexion à WampServer
            $host = "localhost";
            $login= "root";  // Votre loggin d'accès au serveur de BDD Wamp
            $password="";    // Le Password pour vous identifier auprès du serveur
            $base = "jarditou";  // La bdd avec laquelle vous voulez travailler 
        }

      

        
        try 
        {
            $db = new PDO('mysql:host=' .$host. ';charset=utf8;dbname=' .$base, $login, $password);
            return $db;
        } 
        catch (Exception $e) 
        {
            echo 'Erreur : ' . $e->getMessage() . '<br>';
            echo 'N° : ' . $e->getCode() . '<br>';
            die('Connexion au serveur impossible.');
        } 
    }
?>
