<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Prueba
include_once '../modelo/EntrevistaMapper.php';

$mapperIdNoExistente = new EntrevistaMapper();
$mapperIdExistente = new EntrevistaMapper();

$resultadoIdExistente = $mapperIdExistente->findById(1);
var_dump($resultadoIdExistente);
$resultadoIdNoExistente = $mapperIdNoExistente->findById(-1);
var_dump($resultadoIdNoExistente);