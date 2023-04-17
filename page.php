<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 

    $badWords = $_POST['parola'];

    $paragraph = $_POST['paragrafo'];
    
    echo $paragraph;

    $newParagraph = str_replace($badWords, '***',$paragraph);

?>

<div>
    La lunghezza del paragrafo é di: <?php echo strlen($paragraph) ?> lettere
</div>

<div>
    Paragrafo con parole censurate: <br> <?php echo $newParagraph; ?> <br>

    La lunghezza del nuovo paragrafo è: <?php echo strlen($newParagraph);  ?>

</div>
</body>
</html>