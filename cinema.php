<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $("#film1").click(function() {
                $("#form2").css("display", "none");
                $("#form3").css("display", "none");
                $("#form4").css("display", "none");
                $("#form1").css("display", "block");
                $("#form2").css("display", "none");
                $("#form3").css("display", "none");
                $("#form4").css("display", "none");
            });
            $("#film2").click(function() {
                $("#form2").css("display", "block");
                $("#form1").css("display", "none");
                $("#form3").css("display", "none");
                $("#form4").css("display", "none");
                
            });
            $("#film3").click(function() {
                $("#form3").css("display", "block");
                $("#form2").css("display", "none");
                $("#form1").css("display", "none");
                $("#form4").css("display", "none");
            });
            $("#film4").click(function() {
                $("#form4").css("display", "block");
                $("#form2").css("display", "none");
                $("#form3").css("display", "none");
                $("#form1").css("display", "none");
            });
});
</script>
    <title>Guichette'3000</title>
</head>
<body>
    

<?php
include_once __DIR__.'\class\TicketCinema.php';

?>
<div class="tete"><h1>Cinéma'3000</h1></div>
<p class="clignote">Verifiez l'âge avant la vente!!!</p>
<div class="retour"><a href="index.php" class="myRetour">Retour </a></div>
<div class="flex wrap column">
    <div class=" flex align wrap menuc">

        <a  class="Film"  id="film1"><div class="flex align column"><img class="imgFilm" src="public/Lucifer.png"/><img class="imgPEGI" src="public/minus/16.png"/></div></a>

        <a  class="Film"  id="film2"><div class="flex align column"><img class="imgFilm" src="public/TLCOZ.jpg"/><img class="imgPEGI" src="public/minus/12.png"/></div></a>

        <a  class="Film"  id="film3"><div class="flex align column"><img class="imgFilm" src="public/Uncharted.jpg"/><img class="imgPEGI" src="public/minus/10.png"/></div></a>

        <a  class="Film"  id="film4"><div class="flex align column"><img class="imgFilm" src="public/saw4.png"/><img class="imgPEGI" src="public/minus/18.png"/></div></a>

    </div>
    
</div>
<div class="flex talign align wrap monospace">
    <form id="form1" action="display.php" method="POST">
        <p class="filmTitle">Ticket pour Lucifer: </p>
        <input type="hidden" name="cat" value="cinema"/>
        <input type="hidden" name="nomFilm" value="Lucifer"/>
        <input type="hidden" name="salle" value="1"/>
        <input type="hidden" name="agemin" value="16"/>
        <input type="hidden" name="seance" value="09h30"/>
        <input type="date" id="start" name="date"
        value="2023-06-08"
        min="2023-06-08" max="2024-06-08">
        <b>Place:</b> <input type="text" class="place" maxlength="3" name="place">
        <b>Age: </b><input type="text" maxlength="2" name="age">
        <select name="tarif">
            <option value="" selected="selected">--Tarif--</option>
            <option value="Enfant" >Enfant</option>
            <option value="Adulte" >Adulte</option>
        </select>
        <input type="submit" id="submit" name="submit" value="Génerer le Ticket ⚡"></input>
        <p>description:</p>
        <p>Lucifer Morningstar, fatigué de son rôle Seigneur des Enfers décide d'abandonner son poste </br> et s'installe à Los Angeles où il dirige sa propre boîte de nuit, le Lux.</br> Il est doté, outre sa force surhumaine et son invincibilité,</br> d'un pouvoir de persuasion qui pousse les gens à lui avouer leurs désirs les plus secrets.</p>
    </form>
    <form id="form2" action="display.php" method="POST">
        <p class="filmTitle">Ticket pour The Lost City of Z: </p>
        <input type="hidden" name="nomFilm" value="The Lost City"/>
        <input type="hidden" name="cat" value="cinema"/>
        <input type="hidden" name="salle" value="2"/>
        <input type="hidden" name="agemin" value="12"/>
        <input type="hidden" name="seance" value="15h20"/>
        <input type="date" id="start" name="date"
        value="2023-06-08"
        min="2023-06-08" max="2024-06-08">
        <b>Place:</b> <input type="text" class="place" maxlength="3" name="place">
        <b>Age: </b><input type="text" maxlength="2" name="age">
        <select name="tarif">
            <option value="" selected="selected">--Tarif--</option>
            <option value="Enfant" >Enfant</option>
            <option value="Adulte" >Adulte</option>
        </select>
    <input type="submit" id="submit" name="submit" value="Génerer le Ticket ⚡"></input>
    <p>description:</p>
        <p>L'histoire vraie de Percival Harrison Fawcett,</br> un des plus grands explorateurs du XXe siècle. Percy Fawcett est un colonel britannique reconnu et un mari aimant.</br> En 1906, alors qu'il s'apprête à devenir père, la Société géographique royale d'Angleterre lui propose de partir en Amazonie afin de cartographier les frontières entre le Brésil et la Bolivie.</br> Sur place, l'explorateur découvre des traces de ce qu'il pense être une cité perdue très ancienne.</p>
    </form>
    <form id="form3" action="display.php" method="POST">
        <p class="filmTitle">Ticket pour Uncharted: </p>
        <input type="hidden" name="nomFilm" value="Uncharted"/>
        <input type="hidden" name="cat" value="cinema"/>
        <input type="hidden" name="salle" value="3"/>
        <input type="hidden" name="agemin" value="10"/>
        <input type="hidden" name="seance" value="17h30"/>
        <input type="date" id="start" name="date"
        value="2023-06-08"
        min="2023-06-08" max="2024-06-08">
        <b>Place:</b> <input type="text" class="place" maxlength="3" name="place">
        <b>Age: </b><input type="text" maxlength="2" name="age">
        <select name="tarif">
            <option value="" selected="selected">--Tarif--</option>
            <option value="Enfant" >Enfant</option>
            <option value="Adulte" >Adulte</option>
        </select>
        <input type="submit" id="submit" name="submit" value="Génerer le Ticket ⚡"></input>
        <p>description:</p>
        <p>Le chasseur de trésors Victor Sully Sullivan recrute Nathan Drake</br> pour l'aider à récupérer une fortune vieille de 500 ans amassée par l'explorateur Ferdinand Magellan.</br> Ce qui commence comme un cambriolage devient rapidement une course de globe-trotters pour atteindre le prix avant que l'impitoyable Santiago Moncada ne puisse mettre la main dessus.</p>
    </form>
    <form id="form4" action="display.php" method="POST">
        <p class="filmTitle">Ticket pour Saw IV: </p>
        <input type="hidden" name="cat" value="cinema"/>
        <input type="hidden" name="nomFilm" value="Saw IV"/>
        <input type="hidden" name="salle" value="4"/>
        <input type="hidden" name="agemin" value="18"/>
        <input type="hidden" name="seance" value="23h30"/>
        <input type="date" id="start" name="date"
        value="2023-06-08"
        min="2023-06-08" max="2024-06-08">
        <b>Place:</b> <input type="text" class="place" maxlength="3" name="place">
        <b>Age: </b><input type="text" maxlength="2" name="age">
        <select name="tarif">
            <option value="" selected="selected">--Tarif--</option>
            <option value="Enfant" >Enfant</option>
            <option value="Adulte" >Adulte</option>
        </select>
        <input type="submit" id="submit" name="submit" value="Génerer le Ticket ⚡"></input>
        <p>description:</p>
        <p>Le tueur et sa protégée, Amanda, ont disparu. </br> Deux profileurs chevronnés du FBI, les agents Strahm et Perez, vont aider le détective Hoffman à réunir les pièces</br> de la dernière énigme macabre laissée par le Tueur pour essayer, enfin, de comprendre.</p>
</form>
</div>

<footer>
   © Copyright Jimmy CL 2023
 </footer>
</body>
</html>