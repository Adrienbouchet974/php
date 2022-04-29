<?php 

    session_start();
    // $array = array(
    //    "first_name" => "Adrien",
    //    "last_name" => "Bouchet",
    //    "age" => "21",
    //    "size" => "1.70",
    //    "civility" => "man",
    // );

    if (isset($_SESSION['table'])) $table = $_SESSION['table'];

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
                    
                    
                
                </nav>
            </div>

            <section class="col-md-9 mt-3">

                

                <?php if (isset($_GET['add'])) { include_once ("./includes/form.inc.html");
                }
                elseif(isset($_POST['enregistrer'])) {
                    $prenom = $_POST['Prénom'];
                    $nom = $_POST['Nom'];
                    $age = $_POST['Age'];
                    $size = $_POST['Taille'];
                    $civility = $_POST['civilité'];
                        $table = array(
                        "first_name" => $prenom,
                        "last_name" => $nom,
                        "age" => $age,
                        "height" => $size,
                        "civility" => $civility
                    );
                
                    $_SESSION['table'] = $table;
                    echo '<p class="alert-success text-center py-3"> Données sauvegardées</p>' ;
                    print_r($table);
                }
                else {
                    
                


                include ("./includes/ul.inc.php");

                echo '<a role="button" class="btn btn-primary" href="index.php?add">Ajouter des données</a>';
                

                }


                ?>

            </section>
            
        </div>
    </div>
    <?php include("includes/footer.inc.html"); ?>
</body>
</html>




