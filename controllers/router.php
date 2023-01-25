<?php 
    $tabRoles = [
        // anonyme
        0 => ["accueil", "apropos", "contact", "connexion"],
        // connecté
        1 => ["accueil", "apropos", "contact", "vip", "deconnexion"]
    ];
    if(isset($_GET["section"])){
        // vérifier si existe dans le tableau
        $section = $_GET["section"];
        $r = (isset($_SESSION["nom"])) ? 1 : 0;
        

        if(in_array($section, $tabRoles[$r])){
            include("controllers/". $section ."Controller.php");
        }
        else {
            include("views/error/404.php");
        }
    }
    else {
        include("controllers/accueilController.php");
    }
?>