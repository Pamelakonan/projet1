<?php
try {
    $con = new PDO("mysql:host=localhost;dbname=formeleve",'root','');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connexion a la bd reussit";
    // recuperer les données depuis la base de donnée
    $sql1 = $con->query('SELECT * FROM annescolaire');
    $annee = $sql1->fetchAll();
    $sql2 = $con->query('SELECT * FROM classe');
    $classe = $sql2->fetchAll();
} catch (PDOException $e) {
    echo "Erreur : ".$e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Inscrire un etudiant</title>
</head>
<body>
  <h1>Formulaire d'inscription d'un etudiant </h1>

    <div >
      <form method="POST" action="traitement.php">
        <label class="label" for="nom">Nom</label>
        <input class="label" type="text" name="nom" id="nom" autofocus="autofocus" required="required"><br>
        <label class="label" for="prenom">Prenoms</label>
        <input class="label" type="text" name="prenom" id="prenom" autofocus="autofocus" required="required"><br><br>
        <label class="label" for="sexe">sexe</label> 
        <input class="label" type="radio" name="sexe" id="sexe" value="Homme" required="required">Masculin
        <input class="label" type="radio" name="sexe" id="sexe" value="Femme" required="required">Feminin<br>
        <label class="label" for="naissance">date de naissance</label>
        <input class="label" type="date" name="naissance" id="naissance" autofocus="autofocus" required="required"><br>
        <input class="valider" type="submit" name="eleve">
      </form>
    </div>
</body>
</html>