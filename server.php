<?php
$json_string = file_get_contents(__DIR__ . '/albums.json');
$albums = json_decode($json_string, true);
# var_dump($albums);

