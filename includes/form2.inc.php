<p class="h1 text-center">Ajouter plus de données</p>

  <form method="post" action="index.php" class="card col-md-7 mx-auto my-1">
    <div class="row">
      <div class="form-floating mt-3">
        <input type="text" name="Prénom" class="form-control" id="firstname" placeholder="Prénom">
        <label for="floatingPassword">Prénom</label>
      </div>
      <br>
      <div class="form-floating">
        <input type="text" name="Nom" class="form-control" id="lastname" placeholder="Nom">
        <label for="floatingPassword">Nom</label>
      </div>
      <br>
      <div>
        <p>Age (18 à 70 ans)</p>
        <input type="number" min="18" max="70" class="form-control" id="age" name="Age" placeholder="Renseignez votre âge" required>
      </div>
      <br>
      <div class="input-group">
        <div class="input-group-prentend">
          <div class="input-group-text">Taille (1,26 à 3m)</div>
        </div>
        <input type="number" min="1.26" max="3" step="0.01" class="form-control" id="taille" name="Taille" placeholder="1.7" required>
        <div class="input-group-prentend">
          <div class="input-group-text">m</div>
        </div>
      </div>
      <br>
      <div class="col-sm-4 w-100"> 
        <input class="form-check-input" type="radio" name="civility" value="femme" id="flexRadioDefault1" required>
        <label class="form-check-label" for="flexRadioDefault1" value="femme">Femme</label>
        <input class="form-check-input" type="radio" name="civility" value="homme" id="flexRadioDefault1" required>
        <label class="form-check-label" for="flexRadioDefault1" value="homme">Homme</label>
      </div>
    


    <div class="card col-md-4 mx-auto my-1" method="post" action="index.php">
      <p>Connaissances</p>
          <input type="checkbox" name="html" value="HTML5" id="html">
          <label for="html" value="HTML5">HTML</label>

          <input type="checkbox" name="css" value="HTML5" id="css">
          <label for="css" value="CSS3">CSS</label>

          <input type="checkbox" name="javascript" value="JS" id="javascript">
          <label for="javascript" value="JavaScript">JavaScript</label>

          <input type="checkbox" name="php" value="PHP" id="php">
          <label for="php" value="PHP">PHP</label>

          <input type="checkbox" name="mysql" value="MySQL" id="mysql">
          <label for="mysql" value="MySQL">MySQL</label>

          <input type="checkbox" name="bootstap" value="Bootstrap" id="bootstrap">
          <label for="bootstrap" value="Bootstrap">Bootstrap</label>

          <input type="checkbox" name="symfony" value="Symfony" id="symfony">
          <label for="symfony" value="Symfony">Symfony</label>

          <input type="checkbox" name="react" value="React" id="react">
          <label for="react" value="React">React</label>

          <label>Couleur préféré</label>
          <input type="color" name="color">
          
          <label>Date de naissance</label>
          <input type="date" name="naissance">
    </div>

    <div class="card col-11 mx-auto my-1" method="post" action="index.php">
      <label>Joindre une image ( jpg ou png )</label>
      <div class="input-group">
        <input type="file" name="img" accept=".png, .jpg" class="form-control mb-3 mt-3" id="file" name="file" required>
      </div>
    </div>
      

    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button name="enregistrer2" type="submit" class="btn btn-primary float end">Enregistrer les données</button>
      </div> 
  </form>
</div>


