<?php
$text="Id aliqua adipisicing reprehenderit non ea velit anim fugiat labore occaecat commodo excepteur reprehenderit.";
var_dump($text);

$textLenght= strlen($text);
var_dump($textLenght);

var_dump($_GET);

$newText= str_replace($_GET['replace'],' *** ', $text);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Test PHP</title>
</head>
<body>
    <header>
    </header>
    <div class="main">
        <h1>Lunghezza Paragrafo</h1>
        <p class="length">la lungezza del mio testo è <span><?php echo $textLenght ?></span> caratteri</p>

        <h2>My text</h2>
        
        <p class="text"><b>Il mio testo è: </b><?php echo $text?></p>

        <h2>My Text Modified</h2>
        <p class="new-text"><b>Il nuoco testo con la parola modificata è: </b><?php echo $newText ?> </p>

    </div>
    
</body>
</html>