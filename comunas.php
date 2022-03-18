<?php include_once "Front/includes/header.php" ?>


<?php if (isset($_POST["arica"])){
   include_once "Front/includes/comunas/arica.php";

} elseif(isset($_POST["tarapaca"])){
    include_once "Front/includes/comunas/tarapaca.php";

}elseif(isset($_POST["antofagasta"])){
    include_once "Front/includes/comunas/antofagasta.php";

}elseif(isset($_POST["atacama"])){
    include_once "Front/includes/comunas/atacama.php";

}elseif (isset($_POST["coquimbo"])){
    include_once "Front/includes/comunas/coquimbo.php";

}elseif(isset($_POST["valparaiso"])){
    include_once "Front/includes/comunas/valparaiso.php";

}elseif(isset($_POST["metropolitana"])){
    include_once "Front/includes/comunas/metropolitana.php";

}elseif(isset($_POST["ohiggins"])){
include_once "Front/includes/comunas/metropolitanaohiggins.php";

}elseif(isset($_POST["maule"])){
    include_once "Front/includes/comunas/metropolitanaohiggins.php";
    
}elseif(isset($_POST["biobio"])){
    include_once "Front/includes/comunas/metropolitanaohiggins.php";
        
}elseif(isset($_POST["araucania"])){
    include_once "Front/includes/comunas/metropolitanaohiggins.php";
            
}elseif(isset($_POST["rios"])){
    include_once "Front/includes/comunas/metropolitanaohiggins.php";
                
}elseif(isset($_POST["lagos"])){
    include_once "Front/includes/comunas/metropolitanaohiggins.php";
                    
}elseif(isset($_POST["aysen"])){
    include_once "Front/includes/comunas/metropolitanaohiggins.php";
                        
}elseif(isset($_POST["magallanes"])){
    include_once "Front/includes/comunas/metropolitanaohiggins.php";
                            
}



?>




<?php include_once "Front/includes/footer.php" ?>