<?php

$string = file_get_contents("discs-library.json");

$albums = json_decode($string, true);


header('Content-Type: application/json');

echo json_encode($albums);
