<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exemploPHP</title>
<body>
    <form method="POST" action="nintendo.php">
        <label for="">Nome:</label>
        <input type="text" name="nome">

        <label for="">Endereço:</label>
        <input type="text" name="endereco">

        <label for="">Data de Nascimento:</label>  
        <input type="date" name="nascimento">

        <input type="submit" value="Enviar">
    </form>

    <?php
    echo "<h1>Olá Mundo!<h1>";
    ?>

</body>
</html>