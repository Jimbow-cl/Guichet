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
            $("#th1").click(function() {
                $("#form2").css("display", "none");
                $("#form3").css("display", "none");
                $("#form4").css("display", "none");
                $("#form1").css("display", "block");
                $("#form2").css("display", "none");
                $("#form3").css("display", "none");
                $("#form4").css("display", "none");
            });
            $("#th2").click(function() {
                $("#form2").css("display", "block");
                $("#form1").css("display", "none");
                $("#form3").css("display", "none");
                $("#form4").css("display", "none");
                
            });
            $("#th3").click(function() {
                $("#form3").css("display", "block");
                $("#form2").css("display", "none");
                $("#form1").css("display", "none");
                $("#form4").css("display", "none");
            });
            $("#th4").click(function() {
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
include_once __DIR__.'\class\TicketTheatre.php';

?>
<div class="tete"><h1>Theatre'3000</h1></div>
<p class="clignote">Merci de ne plus rendre la monnaie</p>
<div class="retour"><a href="index.php" class="myRetour">Retour </a></div>
<div class="flex wrap column">
    <div class=" flex align wrap menuc">

        <a  class="Theatre"  id="th1"><div class="flex align column"><span>Cyrano de Bergerac </span><img class="imgTheatre" src="public/cyrano.jpg"/><p>Edmond Rostand</p></div></a>

        <a  class="Theatre"  id="th2"><div class="flex align column"><span>Antigone </span><img class="imgTheatre" src="public/antigone.jpg"/><p>Jean Anouilh</p></div></a>

        <a  class="Theatre"  id="th3"><div class="flex align column"><span>Hamlet </span><img class="imgTheatre" src="public/hamlet.jpg"/><p>William Shakespeare</p></div></a>

        <a  class="Theatre"  id="th4"><div class="flex align column"><span>Dom Juan </span><img class="imgTheatre" src="public/domjuan.jpg"/><p>Molière</p></div></a>

    </div>
</div>
<div class="flex talign align wrap monospace">
    <form id="form1" action="display.php" method="POST">
        <p class="thTitle">Ticket pour Cyrano de Bergerac : </p>
        <input type="hidden" name="cat" value="theatre"/>
        <input type="hidden" name="piece" value="Cyrano de B."/>
        <input type="hidden" name="hour" value="09h30"/>
        <input type="hidden" name="entract" value="11h30"/>
        <input type="date" id="start" name="date"
        value="2023-06-08"
        min="2023-06-08" max="2024-06-08">
        <b>Place:</b> <input class="place" type="text" maxlength="3" name="place">
        <select name="tarif">
            <option value="" selected="selected">--Tarif--</option>
            <option value="Enfant" >Enfant</option>
            <option value="Adulte" >Adulte</option>
        </select>
        <input type="submit" id="submit" name="submit" value="Génerer le Ticket ⚡"></input>
        <p>description:</p>
        <p>A cause de son nez, Cyrano n'ose songer à séduire Roxane. Mais puisqu'elle aime Christian, pourquoi ne pas tenter une expérience ?</p>
    </form>
    <form id="form2" action="display.php" method="POST">
        <p class="thTitle">Ticket pour Antigone : </p>
        <input type="hidden" name="cat" value="theatre"/>
        <input type="hidden" name="piece" value="Antigone"/>
        <input type="hidden" name="hour" value="09h30"/>
        <input type="hidden" name="entract" value="11h30"/>
        <input type="date" id="start" name="date"
        value="2023-06-08"
        min="2023-06-08" max="2024-06-08">
        <b>Place:</b> <input type="text" class="place" maxlength="3" name="place">
        <select name="tarif">
            <option value="" selected="selected">--Tarif--</option>
            <option value="Enfant" >Enfant</option>
            <option value="Adulte" >Adulte</option>
        </select>
        <input type="submit" id="submit" name="submit" value="Génerer le Ticket ⚡"></input>
        <p>description:</p>
        <p>Après un combat à mort, le roi décide d'accorder des funérailles à Étéocle et non à son frère Polynice. Leur sœur, Antigone, déroge à cette règle.</p>
    </form>
    <form id="form3" action="display.php" method="POST">
        <p class="thTitle">Ticket pour Hamlet : </p>
        <input type="hidden" name="cat" value="theatre"/>
        <input type="hidden" name="piece" value="Hamlet"/>
        <input type="hidden" name="hour" value="09h30"/>
        <input type="hidden" name="entract" value="11h30"/>
        <input type="date" id="start" name="date"
        value="2023-06-08"
        min="2023-06-08" max="2024-06-08">
        <b>Place:</b> <input type="text" class="place" maxlength="3" name="place">
        <select name="tarif">
            <option value="" selected="selected">--Tarif--</option>
            <option value="Enfant" >Enfant</option>
            <option value="Adulte" >Adulte</option>
        </select>
        <input type="submit" id="submit" name="submit" value="Génerer le Ticket ⚡"></input>
        <p>description:</p>
        <p>Peu de temps après la disparition mystérieuse du roi du Danemark, Hamlet vit très mal la montée sur le trône de Claudius, le frère du défunt roi.</p>
    </form>
    <form id="form4" action="display.php" method="POST">
        <p class="thTitle">Ticket pour Dom Juan : </p>
        <input type="hidden" name="cat" value="theatre"/>
        <input type="hidden" name="piece" value="Dom Juan"/>
        <input type="hidden" name="hour" value="09h30"/>
        <input type="hidden" name="entract" value="11h30"/>
        <input type="date" id="start" name="date"
        value="2023-06-08"
        min="2023-06-08" max="2024-06-08">
        <b>Place:</b> <input type="text" maxlength="3" class="place" name="place">
        <select name="tarif">
            <option value="" selected="selected">--Tarif--</option>
            <option value="Enfant" >Enfant</option>
            <option value="Adulte" >Adulte</option>
        </select>
        <input type="submit" id="submit" name="submit" value="Génerer le Ticket ⚡"></input>
        <p>description:</p>
        <p>Courtisant et rejetant toutes les femmes, sourd aux prières de son père et de son épouse, Dom Juan court à une mort certaine, prix de son libertinage.</p>
</form>
</div>

<footer>
   © Copyright Jimmy CL 2023
 </footer>
</body>
</html>