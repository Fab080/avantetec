<?php 

require 'funciones.php';
require 'database.php';
require __DIR__ . '/../vendor/autoload.php';

// $db = conectarDB();
// Conectarnos a la base de datos
use Model\ActiveRecord;
ActiveRecord::setDB($db);