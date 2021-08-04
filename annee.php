<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Année Academique</title>
</head>
<body>
  <h1>Formulaire d'ajout d'une année academique </h1>
  <a href="Acceuil.php">Retour</a><br>
    <div>
      <form method="POST" action="traitement.php">
        <label class="label" for="annee">Annee Academique</label>
        <input class="label" type="text" name="annee" id="annee" autofocus="autofocus" required="required"><br>
        <input class="valider" type="submit" name="Enregistrer">
      </form>
    </div>
</body>
</html>