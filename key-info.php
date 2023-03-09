<?php
require_once 'data.php';

$index = $_GET['jsonIndex'];
$value = $data->$index;
$dataType = gettype($value);
$enableForm = ($dataType === 'string' || $dataType === 'integer') ? true : false;
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
    <h1>Información del índice <?= $index ?></h1>
    <?php if ($dataType === 'NULL') : ?>
        <p>El índice <?= $index ?> existe y no tiene valor</p>

        <form action="generate.php" method="post">
            <input type="hidden" name="index" value="<?= $index ?>">

            <label for="value">Añadir valor</label>

            <input type="text" name="value" value="<?= $value ?>">

            <input type="submit" value="Añadir">
        </form>
    <?php elseif ($enableForm) : ?>
        <p>El índice <?= $index ?> tiene como valor <?= $value ?>, que es un <?= $dataType ?> y puede ser modificado</p>

        <form action="generate.php" method="post">
            <input type="hidden" name="index" value="<?= $index ?>">

            <label for="value">Cambiar valor</label>

            <?php if ($dataType === 'string') : ?>
                <input type="text" name="value" value="<?= $value ?>">
            <?php elseif ($dataType === 'integer') : ?>
                <input type="number" name="value" value="<?= $value ?>">
            <?php endif; ?>

            <input type="submit" value="Modificar">
        </form>
    <?php else : ?>
        <p>El índice <?= $index ?> tiene como valor un <?= $dataType ?> y no puede ser cambiado</p>
    <?php endif; ?>
    <form action="delete-index.php" method="post">
        <input type="hidden" name="index" value="<?= $index ?>">

        <input type="submit" value="Eliminar indice">
    </form>
    <a href="index.php">Volver</a>
</body>

</html>