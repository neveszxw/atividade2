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
    if($n < 20) echo "Baixo";
    elseif($n <= 100) echo "Médio";
    else echo "Alto";
}
?>
</body>
</html>