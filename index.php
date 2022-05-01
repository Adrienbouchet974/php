<?php 

    session_start();

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
                    
                elseif(isset($_POST['enregistrer'])) 
                    {
                    $prenom = $_POST['Prénom'];
                    $nom = $_POST['Nom'];
                    $age = $_POST['Age'];
                    $size = $_POST['Taille'];
                    $civility = $_POST['civility'];
                        $table = array
                        (
                        "first_name" => $prenom,
                        "last_name" => $nom,
                        "age" => $age,
                        "size" => $size,
                        "civility" => $civility
                        );
                    
                        $_SESSION['table'] = $table;
                        echo '<p class="alert-success text-center py-3"> Données sauvegardées</p>' ;
                    }
                
                else 
                {
                    echo '<a role="button" class="btn btn-primary" href="index.php?add">Ajouter des données</a>';
                }
                
                if(isset($_GET['debugging'])) 
                {
                    echo '<h2 class="text-center"> Débogage </h2></br>';
                    echo '<h3>===> Lecture du tableau à l\'aide de la fonction print_r</h3><br/>' ;
                    echo '<pre>';
                    print_r($table);
                    echo '</pre>';
                }

                elseif(isset($_GET['concatenation']))
                    // concaténation partie 1
                    {
                    echo '<h2 class="text-center"> Concaténation </h2></br>' ;
                    echo '<h3 class="fs-6">===> Construction d\'une phrase avec le contenu du tableau</h3>';
                    echo '<p>';
                    echo ($table['civility'] == 'women') ? 'Mme ' : 'Mr ';
                    echo $table['first_name'].' '.$table['last_name'] .'</br>' ;
                    echo 'j\'ai ' .$table['age'] .'ans et je mesure '.$table['size'] .'m.</p>';
                    // concaténation partie 2
                    echo '<h3 class="fs-6">===> construction d\'une phrase après MAJ du tableau :</h3>' ;
                    echo'<p>';
                    echo ($table['civility'] == 'women') ? 'Mme ' : 'Mr ';
                    echo ucfirst($table['first_name']).' '.strtoupper($table['last_name']) .'</br>' ;
                    echo 'j\'ai ' .$table['age'] .'ans et je mesure '.$table['size'] .'m.</p>';
                    // concaténation partie 3
                    echo '<h3 class="fs-6">===> affichage d\'une virgule à la place du point pour la taille :</h3>' ;
                    str_replace('.', ',', $table['size']);
                    echo ($table['civility'] == 'women') ? 'Mme ' : 'Mr ';
                    echo ucfirst($table['first_name']).' '.strtoupper($table['last_name']) .'</br>' ;
                    echo 'j\'ai ' .$table['age'] .'ans et je mesure '.$table['size'] .'m.</p>';

                    }

                elseif(isset($_GET['loop']))
                {
                    echo '<h2 class="text-center"> Boucle </h2></br>' ;
                    echo '<h3>===> Lecture du tableau à l\'aide d\'une boucle foreach</h3>' ;
                        foreach($table as $key => $table) 
                        {
                            echo'</br>' ;
                            $numéro = $numéro + 1;
                            echo "à la ligne n°$numéro correspond la clé";
                            echo ' "'."$key".'" ' ;
                            echo 'et contient' ;
                            echo ' "'."$table".'"' ;
                        }

                }

                elseif(isset($_GET['function'])) 
                {
                    echo '<h2 class="text-center"> Fonction </h2></br>' ;
                    echo '<h3>===> j\'utilise ma fonction readTable()</h3>' ;
                    
                    function readTable($table) 
                    {   
                        foreach($table as $key => $table) 
                        {
                            echo'</br>' ;
                            $numéro = 1 ;
                            echo "à la ligne n°$numéro correspond la clé";
                            echo ' "'."$key".'" ' ;
                            echo 'et contient' ;
                            echo ' "'."$table".'"' ; 
                        }
                        
                        return "à la ligne n°$numéro  correspond la clé" .' "'."$key" .'"' ." et contient" ." $table" ;
                    }

                    echo readTable($table);

                    $prenom = $_POST['Prénom'];
                    $nom = $_POST['Nom'];
                    $age = $_POST['Age'];
                    $size = $_POST['Taille'];
                    $civility = $_POST['civility'];
                        $key = array(
                        "first_name" => $prenom,
                        "last_name" => $nom,
                        "age" => $age,
                        "size" => $size,
                        "civility" => $civility
                    );
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




