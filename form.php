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
include_once __DIR__.'\contact.php';
?>
<div class="tete"><h1>Formulaire de Contact</h1></div>
<div class="retour"><a href="post.php" class="myPost">deja Posté </a></div>
<div class="retour"><a href="index.php" class="myRetour">Retour </a></div>

    <form action="form.php" method="POST">
        <label for="name">Nom</label>
        <input id="name" name="name"/>
        <label for="firstname">Prénom</label>
        <input id="firstname" name="firstName"/>
        <label for="email" type="email">Email</label>
        <input id="email" name="email"/>
        <label for="tel">Telephone</label>
        <input id="tel"  name="tel"/>
        <label for="messsage">Message</label>
        <input id="message" name="mess"/>
        <input type="submit" name="submit"/>
     </form>
      <?php
     if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $print3 = new Contact(
        $_POST["name"],
        $_POST["firstName"],
        $_POST["email"],
        $_POST["tel"],
        $_POST["mess"]
        );
        $print3 -> displayForm();
        $print3 ->setPDO();}   
    ?>

</body>
</html>