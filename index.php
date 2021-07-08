<?php 
    include __DIR__ ."/classes/movies.php";  
    include __DIR__ ."/database.php";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
        <title>OOP 1</title>
    </head>
    <body>
        <div class="container">
            <?php foreach ($movies as  $value) { ?>
                <div class="movie">
                    <?php $movie = new Movies($value["title"], $value["plot"], $value["genre"], $value["year"], $value["cast"]);?>
                    <h2><?= $movie->title; ?></h2>
                    <h4>Trama :</h4>
                    <p><?= $movie->setPlot(); ?></p>
                    <a href="">Read More</a>
                    <h5>Genere :</h5>
                    <p><?= $movie->genre; ?></p>
                    <h5>Anno di pubblicazione :</h5>
                    <p><?= $movie->year; ?></p>
                    <h5>Cast :</h5>
                    <p><?= $movie->setCast(); ?></p>
                    <a href="">Read More</a>
                </div>
            <?php } ?>
            
            
        </div>
    </body>
</html>