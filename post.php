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
$dbh = new PDO("mysql:dbname=form;host=127.0.0.1", "root", "root");
$query = $dbh->query("SELECT * FROM `form`");
$results = $query -> fetchAll();
?>
<div class="tete"><h1>Message déja posté</h1></div>
<div class="retour"><a href="index.php" class="myRetour">Retour </a></div>

<div>
<table>
    <thead>
        <tr>
            <th colspan="col">Id</th>
            <th colspan="col">Nom</th>
            <th colspan="col">Prénom</th>
            <th colspan="col">Email</th>
            <th colspan="col">Tel</th>
            <th colspan="col">Message</th>
        </tr>
    </thead>
    <tbody>
    <?php 
            foreach ($results as $row) {?>
        <tr>
            <th scope="row"><?php echo "$row[id]" ?> </th>
            <td><?php echo "$row[nom]" ?> </td>
            <td><?php echo "$row[prenom]" ?> </td>
            <td><?php echo "$row[email]" ?> </td>
            <td><?php echo "$row[tel]" ?> </td>
            <td><?php echo "$row[mess]" ?> </td>
            <?php } ?>
        </tr>
    </tbody>
</table>
   
</div>
    
</body>
</html>