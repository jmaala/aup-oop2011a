<?php

require_once "models/entities/rows/row.php";

$row = new row();

$file = fopen("php://stdin", "r");

foreach($row->getColumns() as $column)
{
    echo ucwords($column).":";
    $row->$column = trim(fgets($file));
}

$row->save();
print_r($row->getData());
die();
