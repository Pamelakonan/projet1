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
    $sql3 = $con->query('SELECT * FROM eleve');
    $eleve = $sql3->fetchAll();
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
        <label class="label" for="anneeeleve">Annee Academique</label>
        <select class="label" name="anneeeleve" id="anneeeleve">
          <?php foreach ($annee as $value) {?>
          <option value="<?php echo $value['idAnneScolaire'] ?>"><?php echo $value['libelleAnnee']?></option>
          <?php } ?>
        </select><br>
        <label class="label" for="classeeleve">Classe</label>
        <select class="label" name="classeeleve" id="classeeleve">
          <?php foreach ($classe as $value) {?>
          <option value="<?php echo $value['idClasse'] ?>"><?php echo $value['libelleClasse'] ?></option>
          <?php } ?>
        </select><br>
        <label class="label" for="eleve">Eleve</label>
        <select class="label" name="eleve" id="eleve">
          <?php foreach ($eleve as $value) {?>
          <option value="<?php echo $value['idEleve'] ?>"><?php echo $value['nom'].' '.$value['prenoms'] ?></option>
          <?php } ?>
        </select><br>
      </form>
    </div>
</body>
</html>