<?php
/*try catch permet de gerer les exeptions/erreurs potentielles, d'un code
si il y a une erreur, c'est le catch que s'execute
Ici ce code permet de récuperer la base de donnée */

   try{
        $bdd = new PDO('mysql:host=localhost;dbname=blog12devs', 'root', '');
    } 
    catch(Exception $e){
        die('Erreur : '.$e->getMessage());
    }


?>