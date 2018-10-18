<?php
include 'autoLoad.php';
$dsn = "mysql:dbname=test;host=localhost";
$user = "root";
$password = "";
$pdo = new PDO($dsn, $user, $password, [PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES UTF8",
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);

$sql="SELECT * FROM formateur";
$pdoSt = $pdo->query($sql);

//si on laise que fetch class il fait appelle a la classe puis le constructeur mettre en plus fetch props late pour quil fasse le contraire
$pdoSt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, Formateur::class);
$formateurs = $pdoSt->fetchAll();
var_dump($formateurs);
?>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <table border="1">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nom</th>
                    <th>Prenom</th>
                    
                </tr>
            </thead>
            <tbody>
               <?php foreach($formateurs as $formateur): ?>
                <tr>
                    <td><?php echo $formateur->getId();?></td>
                    <td><?php echo $formateur->getNom();?></td>
                    <td><?php echo $formateur->getPrenom();?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>

    </body>
</html>

