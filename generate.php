<?php

require_once 'data.php';

$index = $_POST['index'];
$value = $_POST['value'];

$data->$index = $value;

file_put_contents('data.json', json_encode($data));

header('Location: index.php');