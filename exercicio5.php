
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title> exercicio1 </title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="style.css">
   
    </head>
    <body>
    <?php
        $n1 =$_POST['n1'];
        $n2 =$_POST['n2'];
        $n3 = $_POST['n3'];

        $media = ($n1+$n2+$n3)/3;

        echo "Resultado da média é: " .$media;

?>
    </body>
</html>