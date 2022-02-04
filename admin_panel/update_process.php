<?php 
    include 'connect_bdd.php';
    $matricule = $_POST['txt_test'];
    $nom = $_POST['txt_nom'];
    $prenom = $_POST['txt_prenom'];
    $imc = $_POST['txt_imc'];

    $nom = strtoupper($nom);

    $requete = mysqli_query($bdd,"UPDATE personne SET NomPers = '$nom' , PrenomPers = '$prenom' , imc = '$imc' WHERE Matricule = '$matricule'");


    header('Location:update.php?alert=success');
?>