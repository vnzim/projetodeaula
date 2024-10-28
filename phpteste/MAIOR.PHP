<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h2>Programa maior ou menor que 5</h2>
    <form method="post">
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>
 
<input type="submit" value="verificar">
</form>

<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $ = $_POST['idade'];
    if($sexo=="M" and $idade>=65){
        echo "Voce irá aposentar";
    }
    elseif($sexo=="M"){
        echo "Voce ainda nao ira aposentar";
    }
    if($sexo=="F" and $idade>=62){
        echo "voce ainda ira aposentar ";
    }
    elseif($sexo=="F"){
        echo "voce ainda nao ira se aposentar";
    }
}
?>

    
</body>
</html>