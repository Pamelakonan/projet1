<?php
try {
    $con = new PDO("mysql:host=localhost;dbname=formeleve",'root','');
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // echo "connexion a la bd reussit";
} catch (PDOException $e) {
    echo "Erreur : ".$e->getMessage();
}
// fin de la connexion à la base de donnée


if (!empty($_POST['annee'])) {
    $sql = $con->prepare('INSERT INTO annescolaire(libelleAnnee) VALUES(:libelleAnnee)');
    $sql->execute(array(
        'libelleAnnee' => $_POST['annee']
    ));
    // echo "annee academique ajouter";
}
if (!empty($_POST['classe'])) {
    $sql = $con->prepare('INSERT INTO classe(libelleClasse) VALUES(:libelleClasse)');
    $sql->execute(array(
        'libelleClasse' => $_POST['classe']
    ));
    // echo "annee academique ajouter";
}
if (!empty($_POST['nom']) && !empty($_POST['prenom'])) {
    $sql = $con->prepare('INSERT INTO eleve(nom,prenoms,sexe,dateNaissance) VALUES(:nom,:prenoms,:sexe,:dateNaissance)');
    $sql->execute(array(
        'nom' => $_POST['nom'],
        'prenoms' => $_POST['prenom'],
        'sexe' => $_POST['sexe'],
        'dateNaissance' => $_POST['naissance']
    ));
    // echo "annee academique ajouter";
}
// fin de l'insertion dans la base de donnée

?>

