<?php
session_start();
include_once 'conexion.php';
include_once 'base.php';
include_once 'usuario.php';
include_once 'gasto.php';
include_once 'presupuesto.php';

global $pdo;

$getFromU = new Usuario($pdo);
$getFromP = new Presupuesto($pdo);
$getFromG = new Gasto($pdo);

define("BASE_URL", "http://localhost/TFC/");
