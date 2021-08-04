<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>Classe</title>
</head>
<body>
  <h1>Formulaire d'ajout d'une classe </h1>

    <div>
      <form method="POST" action="traitement.php">
        <label class="label" for="classe">Nom de la classe</label>
        <input class="label" type="text" name="classe" id="classe" autofocus="autofocus" required="required"><br>
        <input class="valider" type="submit" name="Enregistrer">
      </form>
    </div>
</body>
</html>