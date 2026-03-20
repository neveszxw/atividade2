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
    if($n > 50) {
        echo "$n é maior que 50.";
    } elseif($n < 50) {
        echo "$n é menor que 50.";
    } else {
        echo "O número é igual a 50.";
    }
}
?>
</body>
</html>