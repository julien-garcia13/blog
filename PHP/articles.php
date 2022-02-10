<?php
// Page par Jul
require_once('configuration.php');
$articles = $db->query('SELECT * FROM `articles` ORDER BY `id` DESC LIMIT 5');
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="../CSS/blog.css">
    <title>Les articles</title>
  </head>
  <body>
    <div class=" container-fluid gray">
      <header>
        <?php
        include ("header-articles.php");
        ?>
      </header>      
    </div>
    <main>
      <div class="background">
        <i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i><i></i>
      </div>
    </head>
    <body>
      <div class="titre-articles-zone2">
        <ul class="titre-articles2">
          <?php while ($data = $articles->fetch())
          {
            ?>
            <li><strong><?= $data['title'] ?></strong></li>
            <h1><?= $data['article'] ?></h1>
            <p1
            <?php
            }
            ?>
            </ul>
          </div>
        </main>
        <footer>
          <?php
          include('footer2.php');
          ?>
          </footer>
        </body>
</html>