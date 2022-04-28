<?php 

    session_start();
    // $array = array(
    //    "first_name" => "Adrien",
    //    "last_name" => "Bouchet",
    //    "age" => "21",
    //    "size" => "1.70",
    //    "civility" => "man",
    // );

    

?>

<!DOCTYPE html>
<html lang="en">

    <?php include("./includes/head.inc.html") ?>
    
<body>
    <?php include ("./includes/header.inc.html") ?>
     

    <div class="container">
        <div class="row">
            <div class="col-md-3 mt-3">
                
                <nav>
                    
                    <a class="btn btn-outline-secondary w-100" role="button" href="index.php">Home</a>
                    <?php if (isset($table)) include_once ("./includes/ul.inc.php"); ?>
                    
                
                </nav>
            </div>

            <section class="col-md-9 mt-3">

                

                <?php if (isset($_GET['add'])) include ("./includes/form.inc.html");
        
                if($_POST == NULL){

                $table = array(
                $first_name = $_POST['Prenom'],
                $last_name = $_POST['Nom'],
                $age = $_POST['Age'],
                $size = $_POST['Taille'],
                $civility = $_POST['civilité'],
                );


                $_SESSION['table'] = $table;

                echo '<a href="index.php?add" role="button" class="btn btn-primary">Ajouter des données</a>' ;}
                else{
                    echo '<p class="alert-success text-center py-3"> Données sauvegardées</p>' ;
                }
                ?>


                <?php if(isset($_SESSION['table'])) include_once ("./includes/ul.inc.php"); ?>

                    

            </section>
            
        </div>
    </div>
    <?php include("includes/footer.inc.html"); ?>
    <pre><?php print_r($_POST); ?>
    </pre>
</body>
</html>




