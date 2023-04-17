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
   
   $paragrafo = $_POST['paragrafo'];

   echo $paragrafo;
   

?>

<div>
    La lunghezza del paragrafo é di: <?php echo strlen($paragrafo) ?> lettere
</div>
</body>
</html>