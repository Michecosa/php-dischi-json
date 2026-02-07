<?php

function generateCard($albums_data)
{
  foreach ($albums_data as $album) {
    echo '<div class="card pt-3 mx-2 col-12 col-md-5 col-lg-3">'."\n";
    echo '<img src="' . $album['url_cover'] . '" class="card-img-top" alt="' . $album['titolo'] . '">'."\n";
    echo '<div class="card-body">'."\n";
    echo '<h5 class="card-title">' . $album['titolo'] . '</h5>'."\n";
    echo '<p class="card-text">' . $album['artista'] . '</p>'."\n";
    echo '</div>'."\n";
    echo '<div class="card-body">'."\n";
    echo '<p class="card-text">' . $album['anno_pubblicazione'] . '</p>'."\n";
    echo '<p class="card-text">' . $album['genere'] . '</p>'."\n";
    echo '</div>'."\n";
    echo '</div>'."\n";
  }
}
