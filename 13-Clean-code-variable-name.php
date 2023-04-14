<?php

$ymd = date('Y-m-d');         // Ruim
$currentDate = date('Y-m-d'); // Bom


/* Ruim */
$d = 0; //quantidade de dias trabalhados

/* Bom */
$workDays = 0;

//Ruim
foreach ($people as $p) {
    echo $p->name;
}

//Bom
foreach ($people as $person) {
    echo $person->name;
}
