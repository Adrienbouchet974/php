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
                    
                <?php if(isset($table))  include_once ("./includes/ul.inc.php"); ?>
                
                </nav>
            </div>

            <section class="col-md-9 mt-3">

                

                <?php if(isset($_GET['add'])) include_once ('./includes/form.inc.html');
                    elseif(isset($_POST['enregistrer'])) {
                    $prenom = $_POST['Prénom'];
                    $nom = $_POST['Nom'];
                    $age = $_POST['Age'];
                    $size = $_POST['Taille'];
                    $civility = $_POST['civility'];
                        $table = array(
                        "first_name" => $prenom,
                        "last_name" => $nom,
                        "age" => $age,
                        "size" => $size,
                        "civility" => $civility
                    );
                
                    $_SESSION['table'] = $table;
                    echo '<p class="alert-success text-center py-3"> Données sauvegardées</p>' ;
                }
                
                else {
                    echo '<a role="button" class="btn btn-primary" href="index.php?add">Ajouter des données</a>';
                    }
                
                if(isset($_GET['debugging'])) {
                    echo '<h2 class="text-center"> Débogage </h2></br>';
                    echo '<h3>===> Lecture du tableau à l\'aide de la fonction print_r</h3><br/>' ;
                    echo '<pre>';
                    print_r($table);
                    echo '</pre>';
                    }

                elseif(isset($_GET['concatenation'])) {
                    echo '<h2 class="text-center"> Concaténation </h2></br>' ;
                    echo '<h3>===> construction d\'une phrase à l\'aide d\'un tableau :</h3>' ;
                    echo $table['civility'] .$table['first_name'] .$table['last_name'] ;
                    echo '<h3>===> construction d\'une phrase après MAJ du tableau :</h3>' ;
                    echo '<h3>===> affichage d\'une virgule à la place du point pour la taille :</h3>' ;

                }

                elseif(isset($_GET['loop'])){

                }

                elseif(isset($_GET['function'])){

                }

                
                elseif(isset($_GET['del'])) {
                    session_destroy();
                    echo '<p class="alert-success text-center py-3"> Données supprimées</p>' ;
                    }



                ?>

            </section>
            
        </div>
    </div>
    <?php include("includes/footer.inc.html"); ?>
</body>
</html>




