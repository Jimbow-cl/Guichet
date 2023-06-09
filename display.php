<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
      
    </script>
    <title>Guichette'3000</title>
</head>
<body>

<?php

include_once __DIR__.'\class\TicketCinema.php';

include_once __DIR__.'\class\TicketTheatre.php';


?>
<div class="tete"><h1>Impression du ticket</h1></div>
<div class="retour"><a href="index.php" class="myRetour">Retour </a></div>

    
<?php 
// si le boutton Submit renvoie le form, alors: 

    if ($_SERVER["REQUEST_METHOD"] === "POST") { 
        if ($_POST["cat"] == "cinema"){
                // Si les Inputs ne sont pas renseigné :    
            if($_POST["age"] =="" || $_POST["place"] =="" || $_POST["tarif"] =="") {
                ?>
                <div class="flex align column">
                    <p>Merci de remplir tout les champs....</p>
                </div>
                <?php
            }
                // Si l'age n'est pas atteint:
            else if($_POST["age"] < $_POST["agemin"] && $_POST["place"] !="" && $_POST["tarif"] !="") {
                ?>
                <div class="flex align column">
                    <p>Impossible de générer un ticket, l'age requis n'est pas atteint.</p>
                </div>
                <?php
            }
                // Si mauvais choix de prix (C'est un adulte, choix ticket Enfant)
            else if($_POST["age"] >= 18 &&  $_POST["tarif"] ==="Enfant") {
                ?>
                <div class="flex align column">
                    <p>Politique Tarifaire fausse, merci de choisir le tarif Adulte</p>
                </div>
                <?php
            }
                //Sinon:
            else {
                // si il choisi un tarif plus chère sans raison:
                if($_POST["age"] < 18 &&  $_POST["tarif"] ==="Adulte") {
                    ?>
                    <div class="flex align ">
                    <img class="imgPEGI" src="public/clown.png"/>    
                    <p class="filmTitle">Politique Tarifaire fausse, mais trop tard, voici le ticket :</p>
                    </div>
                    <?php
                    }

                $print1 = new TicketCinema(
                    $_POST["date"],
                    $_POST["place"],
                    $_POST["tarif"],
                    $_POST["nomFilm"],
                    $_POST["salle"],
                    $_POST["seance"],
                    $_POST["age"],
                    $_POST["agemin"]
                );
                
            ?>
            <div class="flex align column">
                <div class=fontCinema>
                
            <?php
            $print1 -> displayTicketCinema();
            ?>

            </div>
            <a href="#" onclick="window.print()" class="mOtherButton">Imprimer le Ticket</a>
            <?php
                }
    }
    else if ($_POST["cat"] == "theatre"){
        // Si les Inputs ne sont pas renseigné :    
        if($_POST["place"] =="" || $_POST["tarif"] =="") {
            ?>
            <div class="flex align column">
                <p>Merci de remplir tout les champs....</p>
            </div>
            <?php
        }
        //sinon:
        else{
            $print2 = new TicketTheatre(
                $_POST["date"],
                $_POST["place"],
                $_POST["tarif"],
                $_POST["piece"],
                $_POST["hour"],
                $_POST["entract"]
            )
            ?>
                <div class="flex align column">
                    <div class=fontTheatre>
                    
                <?php
                $print2 -> displayTicketTheatre();
                ?>

                </div>
                <a href="#null" onclick="window.print()" class="mOtherButton">Imprimer le Ticket</a>
                <?php

        }}
    }
?>





<footer>
   © Copyright Jimmy CL 2023
 </footer>
</body>
</html>