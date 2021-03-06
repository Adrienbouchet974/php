<h2 class="text-center">Ajouter plus de données</h2>

<div class="container" >
    <div class="row">

        <div name="Prenom" class="card col-md-7 mx-auto my-1">
            <?php //include './includes/form.inc.html';?>
            <form action="index.php" method="POST" enctype="multipart/form-data">

  
  <div class="form-group">
    <div class="form-floating mb-3 mt-3">
      <input type="text" class="form-control" id="Prénom" name="Prénom" placeholder="Prénom" required>
      <label for="floatingInput">Prénom</label>
    </div>
    
    <div class="form-floating mb-3">
      <input type="text" class="form-control" id="Nom" name="Nom" placeholder="Nom" required>
      <label for="floatingInput">Nom</label>
    </div>
  </div> 


  <div class="form-group">
    <label for="basic-url" class="form-label mt-4">Age (18 à 70ans)</label>
    <div class="input-group mb-3">
      <input type="number" name="Age" class="form-control" id="Age" min="18" max="70" step="1"
        data-bind="value:replyNumber" placeholder="Renseigner votre age" required>
    </div>
  </div>



  <div class="form-group">
    <div class="input-group mb-3 mt-4">
      <span class="input-group-text">Taille (1.26m à 3m)</span>
      <input type="number" name="Taille" class="form-control" id="Taille" min="1.26" max="3" step="0.01"
        data-bind="value:replyNumber" required>
      <span class="input-group-text">m</span>
    </div>
  </div>

  <div class="w-100">
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" id="civility" name="civility" value="Femme" required>
      <label class="form-check-label" for="inlineRadios1">
        Femme
      </label>
    </div>
    
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" id="civility" name="civility" value="Homme" required>
      <label class="form-check-label" for="inlineRadios2">
        Homme
      </label>
    </div>
  </div>
        </div>

        <div name="Connaissances" class="card col-md-4 mx-auto my-1">
            <h6>Connaissances</h6>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="HTML5" id="html" name="html">
                <label class="form-check-label" for="flexCheckDefault">
                HTML </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="CSS3" id="css" name="css">
                <label class="form-check-label" for="flexCheckChecked">
                CSS </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="JavaScript" id="javascript" name="js">
                <label class="form-check-label" for="flexCheckChecked">
                JavaScript </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="PHP" id="php" name="php">
                <label class="form-check-label" for="flexCheckChecked">
                PHP </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="MySQL" id="mysql" name="mysql">
                <label class="form-check-label" for="flexCheckChecked">
                MySQL </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Bootstrap" id="bootstrap" name="bootstrap">
                <label class="form-check-label" for="flexCheckChecked">
                Bootstrap </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="Symfony" id="symfony" name="symfony">
                <label class="form-check-label" for="flexCheckChecked">
                Symfony </label>
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" value="React" id="reac" name="genre" name="react">
                <label class="form-check-label" for="flexCheckChecked">
                React </label>
            </div>

            <label for="ColorInput" class="form-label mt-3">Couleur préférée</label>
            <input type="color" id="color" name="color">

            <label for="date" class="form-label mt-3">Date de naissance</label>
            <input type="date" id="date" placeholder="jj/mm/aaaa" name="date">
        </div>

        <div name="JoindreUneImage" class="card col-md-11 mx-auto my-1">
            <h6>Joindre une image (jpg ou png)</h6>
            <input type="hidden" name="MAX_FILE_SIZE" value="5000000"/>
            <input class="form-control" type="file" MAX_FILE_SIZE accept=".jpg, .png," id=" formFile" name="img">
        </div> 

        <div class="d-flex flex-row-reverse bd-highlight mt-4">
            <button name="enregistrer2" type="submit" class="btn btn-primary">Enregistrer des données</button>
        </div>
    </div> 
</div>   
</form>
