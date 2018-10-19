<?php
include 'autoLoad.php';
//session_start a placer avant lautoload
session_start();
include 'connexion.php';
// if($_POST){}
// if (isset($_POST["nom"])){}
$flash = new FlashBag();
if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $formation = new Formation();
    $formation->setNom($_POST["nom"]);
    $formation->setImage($_POST["image"]);
    
    //var_dump($formation->getErreur() == []);
 if ($formation->getErreur() === []) {
      //  var_dump($formation);
        $formationManager = new FormationManager($pdo);
        $formationManager->create($formation);
        $flash->addMessage("Succes :-)");
        header("Location: ./formulaire.php");
        exit;
    }
    
 else {
     $message = implode(", ", $formation->getErreur());
         $flash->addMessage("error :(");
    }
}

    
    
    
     ?>
<html>
    <head>
        <title>Nouvelle formation</title>
        <meta charset="utf-8">
    </head>
    <body>
        <?php if ($flash->hasMessage()):?>
        <div style="border: blue 1px solid;color:blue"><?php echo $flash->getMessage(); ?></div><hr>
        <?php endif;?>
        <form method="POST">
            <input type="text" name="nom" placeholder="nom">
            <input type="text" name="image" placeholder="nom de l'image">
            <input type="submit" name="ok" value="ok">
            
            
            
        </form>
    </body>
</html>
