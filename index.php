<?php 

    session_start();
    $_SESSION["prénom"] = "Adrien";
    $_SESSION["nom"] = "Bouchet";
    $nom = $_SESSION["nom"];
    $Suppimer = session_destroy();
    

?>

<!DOCTYPE html>
<html lang="en">

    <?php include("includes/head.inc.html") ?>
    
<body>
    <?php include ("includes/header.inc.html") ?>
     

    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-3">
                <nav>
                    
                    <a class="btn btn-outline-secondary w-100" role="button" href="index.php">Home</a>

                    <?php if (isset($table)) include_once ("/includes/ul.inc.php"); ?>
                
                </nav>
            </div>

                <!-- <div class="col-md-9 mt-3"> -->

            <section class="col-md-9 mt-3">
                
                <a role="button" class="btn btn-primary">Ajouter des données</a>

                <?php
                    if($_SESSION){
                    echo 'bonjour ' . $nom;
                    }
                ?>
                    
            </section>
                    
            
        </div>
    </div>
    
    <?php include ("includes/ul.inc.php"); ?>
         
    <?php include("includes/footer.inc.html"); ?>
    <pre><?php var_dump($_SESSION); ?>
    </pre>
</body>
</html>




