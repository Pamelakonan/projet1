<?php
try {
    $con = new PDO("mysql:host=localhost;dbname=formeleve",'root','');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connexion a la bd reussit";
    // recuperer les données depuis la base de donnée
    $sql1 = $con->query('SELECT * FROM eleve');
    $reponse = $sql1->fetchAll();
    // $sql2 = $con->query('SELECT * FROM classe');
    // $classe = $sql2->fetchAll();
} catch (PDOException $e) {
    echo "Erreur : ".$e->getMessage();
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" href="style.css">
	<title>FORMULAIRE D INSCRIPTION</title>
</head>
<body>
  <h1> Bienvenu </h1>

<a href="annee.php">Ajouter année scolaire</a><br>
<a href="classe.php">Ajouter une classe</a><br>
<a href="eleve.php">Inscrire un éleve</a><br>
<h1>Liste des Inscrire</h1>

<table>
    <thead>
        <tr>
            <th>#</th>
            <th>nom</th>
            <th>prenom</th>
            <th>sexe</th>
            <th>date de naissance </th>
            <th>Niveau</th>
            <th>Annee Academique</th>

        </tr>
         
    </thead>
    <tbody>
    <?php
    //debut de l'affichage des données
    foreach ($reponse as $value) {?>
        <tr>
            <td><?php echo $value['idEleve'] ?></td>
            <td><?php echo $value['nom'] ?></td>
            <td><?php echo $value['prenoms'] ?></td>
            <td><?php echo $value['sexe'] ?></td>
            <td><?php echo $value['dateNaissance'] ?></td>

            
        </tr>
       
    <?php } ?>
    <!-- fin de l'affichage des données -->
    </tbody>
</table>
</body>
</html>