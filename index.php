<?php
$text="Id aliqua adipisicing reprehenderit non ea velit anim fugiat labore occaecat commodo excepteur reprehenderit.";
var_dump($text);

$textLenght= strlen($text);
var_dump($textLenght);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <header>
    </header>
    <div class="main">
        <h1>Lunghezza Paragrafo</h1>
        <p>la lungezza del mio testo è <?php echo $textLenght ?> caratteri</p>

        <h2>My text</h2>
        <p><?php echo $text?></p>

    </div>
    
</body>
</html>