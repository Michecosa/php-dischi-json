  <?php
  $json_string = file_get_contents(__DIR__ . '/albums.json');
  $albums = json_decode($json_string, true);
  var_dump($albums);
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
    <div class="container-fluid">
      <h1>Albums</h1>
      <div class="row gap-1">
        <div class="card pt-3" style="width: 18rem;">
          <img src="<?php echo $albums[0]['url_cover'] ?>" class="card-img-top" alt="<?php echo $albums[0]['titolo']?>">
          <div class="card-body">
            <h5 class="card-title"><?php echo $albums[0]['titolo'] ?></h5>
            <p class="card-text"><?php echo $albums[0]['artista'] ?></p>
          </div>
          <div class="card-body">
            <p class="card-text"><?php echo $albums[0]['anno_pubblicazione'] ?></p>
            <p class="card-text"><?php echo $albums[0]['genere'] ?></p>
          </div>
        </div>
      </div>
    </div>
  </body>

  </html>