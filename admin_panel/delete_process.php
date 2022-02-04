<?php 
    include 'connect_bdd.php';

    $matricule = $_GET['matricule'];
    
    $requete = mysqli_query($bdd, "DELETE FROM personne WHERE Matricule = '$matricule'");
    header('Location:delete.php');

?>