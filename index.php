<?php 
     session_start();
     if (!isset($_SESSION['count'])) {
        $_SESSION['count'] = 0;
    }
    // unset($_SESSION['count']);
   
    include("views/html/header.php");
    if(isset($_SESSION["nom"])){
        include("views/menu/nav-co.php");
    }
    else {
        include("views/menu/nav-deco.php");
    }   
    include("controllers/router.php");
    include("views/html/footer.php");
?> 

