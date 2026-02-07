<?php

function generateCard($albums_data)
{
  foreach ($albums_data as $album) {
    echo '<div class="card pt-3 mx-2 col-12 col-md-5 col-lg-3">';
    echo '<img src=' . $album['url_cover'] . '" class="card-img-top" alt="' . $album['titolo'] . '">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title">' . $album['titolo'] . '</h5>';
    echo '<p class="card-text">' . $album['artista'] . '</p>';
    echo '</div>';
    echo '<div class="card-body">';
    echo '<p class="card-text">' . $album['anno_pubblicazione'] . '</p>';
    echo '<p class="card-text">' . $album['genere'] . '</p>';
    echo '</div>';
    echo '</div>';
  }
}
