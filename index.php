<?php
require_once 'data.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba JSON</title>
</head>

<body>
    <form action="key-info.php" method="get">
        <label for="jsonIndex">Seleccione uno de los índices del documento</label>
        <select name="jsonIndex">
            <?php foreach ($data as $key => $value) : ?>
                <option value=<?= $key ?>><?= $key ?></option>
            <?php endforeach; ?>
        </select>

        <input type="submit" value="Ver información">
    </form>
</body>

</html>