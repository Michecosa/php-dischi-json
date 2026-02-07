  <?php
  $json_string = file_get_contents(__DIR__ . '/albums.json');
  $albums = json_decode($json_string, true);
  # var_dump($albums);
  ?>
  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EX - PHP Dischi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
  </head>

  <body>
    <div class="container">
      <h1 class="text-center m-4">Albums</h1>
      <div class="d-flex justify-content-center">
        <div class="row g-4 justify-content-center">
          <?php
          foreach ($albums as $album) {
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
          ?>
        </div>
      </div>
    </div>
  </body>

  </html>