<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form method="POST">
    Número: <input type="number" name="n">
    <input type="submit" value="Enviar">
</form>

<?php
if(isset($_POST["n"])){
    $n = $_POST["n"];
    $soma = 0;
    $i = 1;
    while($i <= $n) {
        $soma += $i;
        $i++;
    }
    echo "A soma de 1 até $n é: $soma";
}
?>
</body>
</html>