<?php

require_once 'data.php';

$index = $_POST['index'];

unset($data->$index);

file_put_contents('data.json', json_encode($data));

header('Location: index.php');