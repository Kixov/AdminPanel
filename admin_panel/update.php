<?php 
    include 'connect_bdd.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="nav_container">
            <div class="title">
                <h1>Admin Panel</h1>
            </div>
            <div class="download_code">
                <a href="index.css" download="css"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="download" class="svg-inline--fa fa-download fa-w-16" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path fill="currentColor" d="M216 0h80c13.3 0 24 10.7 24 24v168h87.7c17.8 0 26.7 21.5 14.1 34.1L269.7 378.3c-7.5 7.5-19.8 7.5-27.3 0L90.1 226.1c-12.6-12.6-3.7-34.1 14.1-34.1H192V24c0-13.3 10.7-24 24-24zm296 376v112c0 13.3-10.7 24-24 24H24c-13.3 0-24-10.7-24-24V376c0-13.3 10.7-24 24-24h146.7l49 49c20.1 20.1 52.5 20.1 72.6 0l49-49H488c13.3 0 24 10.7 24 24zm-124 88c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20zm64 0c0-11-9-20-20-20s-20 9-20 20 9 20 20 20 20-9 20-20z"></path></svg>Download Code</a>
            </div>
            <div class="nav">
                <span>Panel</span>
                <ul>
                    <a href="add.php"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-plus" class="svg-inline--fa fa-user-plus fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M624 208h-64v-64c0-8.8-7.2-16-16-16h-32c-8.8 0-16 7.2-16 16v64h-64c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h64v64c0 8.8 7.2 16 16 16h32c8.8 0 16-7.2 16-16v-64h64c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm-400 48c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>Ajout</a>
                    <a href="delete.php"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-minus" class="svg-inline--fa fa-user-minus fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M624 208H432c-8.8 0-16 7.2-16 16v32c0 8.8 7.2 16 16 16h192c8.8 0 16-7.2 16-16v-32c0-8.8-7.2-16-16-16zm-400 48c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-74.2-60.2-134.4-134.4-134.4z"></path></svg>Supression</a>
                    <a href="update.php"><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="user-edit" class="svg-inline--fa fa-user-edit fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm89.6 32h-16.7c-22.2 10.2-46.9 16-72.9 16s-50.6-5.8-72.9-16h-16.7C60.2 288 0 348.2 0 422.4V464c0 26.5 21.5 48 48 48h274.9c-2.4-6.8-3.4-14-2.6-21.3l6.8-60.9 1.2-11.1 7.9-7.9 77.3-77.3c-24.5-27.7-60-45.5-99.9-45.5zm45.3 145.3l-6.8 61c-1.1 10.2 7.5 18.8 17.6 17.6l60.9-6.8 137.9-137.9-71.7-71.7-137.9 137.8zM633 268.9L595.1 231c-9.3-9.3-24.5-9.3-33.8 0l-37.8 37.8-4.1 4.1 71.8 71.7 41.8-41.8c9.3-9.4 9.3-24.5 0-33.9z"></path></svg>Mise à jour</a>
                </ul>
            </div>
        </div>
        <div class="panel_container">
            
            <div class="panel">
                <div class="test">
                <table>
                    <thead>
                        <tr>
                            <th >Matricule</th>
                            <th >NomPers</th>
                            <th >PrenomPers</th>
                            <th >IMC</th>
                        </tr>
                    </thead>
                    <tbody>
                       <?php 

                        $requete = mysqli_query($bdd, 'SELECT * FROM personne');
                        while ($test = mysqli_fetch_assoc($requete)) {
                           echo '<tr><td>'.$test['Matricule'].'</td><td>'.$test['NomPers'].'</td><td>'.$test['PrenomPers'].'</td><td>'.$test['imc'].'</td></tr>';
                        }

                       ?>
                        
                    </tbody>
                </table>
            </div>
                <div class="add">
                    <form action="update_process.php" method="post"> 
                        <label for="txt_test">Choisissez le matricule :</label>
                        <select name="txt_test">

                        <?php 
                            $requete = mysqli_query($bdd, 'SELECT * FROM personne');
                       
                            while ($test = mysqli_fetch_assoc($requete)) {
                                echo "<option ".$test['Matricule'].">".$test['Matricule']."</option><";
                         }
                        ?>
                            
                        </select>
                        <h1>Nouvelle donnée
                        <?php 
                        if (isset($_GET['alert'])) {
                            $alert = htmlspecialchars($_GET['alert']);
                            switch ($alert) {
                                case 'success':
                                    echo '<h1 style="color: lightgreen;">  Succès</h1>';
                                break;
                        
                    }
                }
            
            ?>
                        </h1>
                        <div>
                            <label for="txt_nom">Nom :</label><br>
                            <input type="text" name="txt_nom"><br>
                        </div>
                        <div>
                            <label for="txt_prenom">Prenom :</label><br>
                            <input type="text" name="txt_prenom"><br>
                        </div>
                        <div>
                            <label for="txt_imc">imc :</label><br>
                            <input type="text" name="txt_imc"><br>
                        </div>
                        <div>
                            <input type="submit" value="Mettre à jour">
                        </div>

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</body>
</html>
