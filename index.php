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

                

                <?php  
                
                if(isset($_GET['add'])) include_once ('./includes/form.inc.html');

                elseif(isset($_POST['enregistrer'])) 
                {
                $prenom = htmlspecialchars($_POST['Prénom']);
                $nom = htmlspecialchars($_POST['Nom']);
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
                
                elseif(isset($_GET['addmore'])) include_once('./includes/form2.inc.php');
                elseif(isset($_POST['enregistrer2'])) 
                {
                $prenom = htmlspecialchars($_POST['Prénom']);
                $nom = htmlspecialchars($_POST['Nom']);
                $age = $_POST['Age'];
                $size = $_POST['Taille'];
                $civility = $_POST['civility'];
                $html = $_POST['html'];
                $css = $_POST['css'];
                $javascript = $_POST['javascript'];
                $php = $_POST['php'];
                $mysql = $_POST['mysql'];
                $bootstrap = $_POST['bootstrap'];
                $symfony = $_POST['symfony'];
                $react = $_POST['react'];
                $color = $_POST['color'];
                $dob = $_POST['date'];
                
                $image = array 
                (
                "name" => $name = $_FILES['img']['name'],
                "type" =>$type = $_FILES['img']['type'],
                "tmpname" =>$tmpName = $_FILES['img']['tmp_name'],
                "error" =>$error = $_FILES['img']['error'],
                "size" =>$filesize = $_FILES['img']['size'],
                );
                
                $tabExtension = explode('.', $name);
                $extension = strtolower(end($tabExtension));
                //Tableau des extensions que l'on accepte
                $extensions = ['png', 'jpg'];
                $maxSize = 2000000;
                
                    if($extension == ['png', 'jpg']) 
                    {
                    echo"<p class='alert-danger text-center py-3'> Extension $type non pris en charge. </p>";
                    session_destroy();
                    }

                    elseif($maxSize <= $filesize)
                    {
                    echo'<p class="alert-danger text-center py-3"> La taille de l\'image doit être infèrieur à 2Mo. </p>';
                    session_destroy();
                    }
                    
                    elseif($error == 4) 
                    {
                    echo'<p class="alert-danger text-center py-3"> Auncun fichier n\'a été télécharger. </p>';
                    session_destroy();
                    }
                    else
                    {
                    echo '<p class="alert-success text-center py-3"> Données sauvegardées</p>';
                    
                    move_uploaded_file($tmpName, './uploaded/'.$name);
                    }

                
                $table = array
                    (
                    "first_name" => $prenom,
                    "last_name" => $nom,
                    "age" => $age,
                    "size" => $size,
                    "civility" => $civility,
                    "html" => $html,
                    "css" => $css,
                    "javascript" => $javascript,
                    "php" => $php,
                    "mysql" => $mysql,
                    "bootstrap" => $bootstrap,
                    "symfony" => $symfony,
                    "react" => $react,
                    "color" => $color,
                    "dob" => $dob,
                    "img" => $image,
                    );

                    $filtre = array_filter($table);
                    
                    $_SESSION['table'] = $filtre;
                    
                
                }

                
                elseif(isset($_GET['debugging'])) 
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
                    $civility=($table['civility'] == 'femme') ? 'Mme ' : 'Mr ';
                    echo $civility .$table['first_name'].' '.$table['last_name'] .'</br>' ;
                    echo 'j\'ai ' .$table['age'] .'ans et je mesure '.$table['size'] .'m.</p>';

                    // concaténation partie 2

                    echo '<h3 class="fs-6">===> construction d\'une phrase après MAJ du tableau :</h3>' ;
                    echo'<p>';
                    echo ($table['civility'] == 'femme') ? 'Mme ' : 'Mr ';
                    $table['first_name'] = ucfirst($table['first_name']) ;
                    $table['last_name'] = strtoupper($table['last_name']) ;
                    echo $table['first_name'].' '.$table['last_name'] .'</br>' ;
                    echo 'j\'ai ' .$table['age'] .'ans et je mesure '.$table['size'] .'m.</p>';

                    // concaténation partie 3

                    echo '<h3 class="fs-6">===> affichage d\'une virgule à la place du point pour la taille :</h3>' ;
                    str_replace('.', ',', $table['size']);
                    echo ($table['civility'] == 'femme') ? 'Mme ' : 'Mr ';
                    $table['first_name'] = ucfirst($table['first_name']) ;
                    $table['last_name'] = strtoupper($table['last_name']) ;
                    echo $table['first_name'].' '.$table['last_name'] .'</br>' ;
                    echo 'j\'ai ' .$table['age'] .'ans et je mesure '.str_replace('.',',',$table['size']) .'m.</p>';

                    }

                elseif(isset($_GET['loop']))
                {
                echo '<h2 class="text-center"> Boucle </h2></br>' ;
                echo '<h3>===> Lecture du tableau à l\'aide d\'une boucle foreach</h3>' ;
                $numero = 0 ;

                

                    foreach($table as $key => $value) 
                    {
                        if($numero == 8 && $key <= "img" )
                        {
                            echo'<br/>';
                        echo "à la ligne n°$numero correspond la clé";
                        echo ' "'."img".'" ' ;
                        echo 'et contient' ;
                        echo '<img class="w-100" src="./uploaded/'.$table['img']['name'].'" alt=">';
                        }
                        else
                        {
                        echo'</br>' ;
                        echo "à la ligne n°$numero correspond la clé";
                        echo ' "'."$key".'" ' ;
                        echo 'et contient' ;
                        echo ' "'."$value".'"' ;
                        $numero++ ;
                        };
                    }
                }
                    

                elseif(isset($_GET['function'])) 
                {
                echo '<h2 class="text-center"> Fonction </h2></br>' ;
                echo '<h3>===> j\'utilise ma fonction readTable()</h3>' ;
                    
                function readTable($table) 
                {   
                    $numero = 0 ;
                    foreach($table as $key => $value)
                    if($numero == 8 && $key <= "img" )
                        {
                            echo'<br/>';
                        echo "à la ligne n°$numero correspond la clé";
                        echo ' "'."img".'" ' ;
                        echo 'et contient' ;
                        echo '<img class="w-100" src="./uploaded/'.$table['img']['name'].'" alt=">';
                        }
                        else
                        {
                        echo'</br>' ;
                        echo "à la ligne n°$numero correspond la clé";
                        echo ' "'."$key".'" ' ;
                        echo 'et contient' ;
                        echo ' "'."$value".'"' ;
                        $numero++ ;
                        };
                }

                readTable($table);

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

                elseif(isset($_GET['del'])) 
                    {if(file_exists('./uploaded'))
                    {
                    $sup = "./uploaded/".$table['img']['name'];
                    unlink($sup);
                    session_destroy();
                    echo '<p class="alert-success text-center py-3"> Données supprimées</p>' ;}

                    else
                    {
                    session_destroy();
                    echo '<p class="alert-success text-center py-3"> Données supprimées</p>' ;
                    }
                    }
                    else 
                    {
                    echo '<a role="button" class="btn btn-primary me-2" href="index.php?add">Ajouter des données</a>';
                    echo '<a role="button" class="btn btn-secondary" href="index.php?addmore">Ajouter plus de données</a>' ;
                    }
                    
                ?>
                
                
                
                
            </section>
        </div>
    </div>
    <?php include("includes/footer.inc.html"); ?>
</body>
</html>




