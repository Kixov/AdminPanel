<?php 
    include 'connect_bdd.php';

    if (isset($_POST['txt_matricule']) && isset($_POST['txt_nom']) && isset($_POST['txt_prenom']) && isset($_POST['txt_imc'])) {
        $matricule = $_POST['txt_matricule'];
        $nom = $_POST['txt_nom'];
        $prenom = $_POST['txt_prenom'];
        $imc = $_POST['txt_imc'];

        $nom = strtoupper($nom);

        $requete = mysqli_query($bdd, "INSERT INTO personne(Matricule,NomPers,PrenomPers,imc) VALUES ('$matricule', '$nom','$prenom','$imc')");
        header('Location:add.php');
    }else {
        echo 'error';
    }
    



?>