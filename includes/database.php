<?php

$db = mysqli_connect('localhost', 'u817619249_avante_tec_sas', '0QuL*u8De=', 'u817619249_db_avante2025');

mysqli_set_charset($db, 'utf8');

if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}