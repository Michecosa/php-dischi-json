<?php
$json_string = file_get_contents(__DIR__ . '/albums.json');
$albums = json_decode($json_string, true);


// Logica di Scrittura (POST)
if ( isset($_POST['titolo']) 
      && isset($_POST['url_cover']) 
      && isset($_POST['artista']) 
      && isset($_POST['genere']) 
      && isset($_POST['anno_pubblicazione'])
) {
  $new_album = [
    'titolo' => $_POST['titolo'],
    'url_cover' => $_POST['url_cover'],
    'artista' => $_POST['artista'],
    'genere' => $_POST['genere'],
    'anno_pubblicazione' => $_POST['anno_pubblicazione'],
  ];

  $albums[] = $new_album;

  file_put_contents(__DIR__ . '/albums.json', json_encode($albums));

  header('Location: ./index.php');
}