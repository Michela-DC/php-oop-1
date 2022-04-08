<?php
    include __DIR__ . '/app.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>First Class</title>
</head>
<body>

<main>
    <div class="container">

        <?php
            foreach($movies as $key => $movie):
            ?>

            <div class="card-wrapper">
                <figure class="poster-wrapper">
                    <img class="poster" src="<?php echo $movie->poster; ?>" alt="">
                </figure>
                <div class="info-container">
                    <h3>
                        Title: <?php echo $movie->title; ?>
                    </h3>
                    <div>
                        Vote: <?php echo $movie->vote; ?>
                    </div>
                    <div>
                        Language: <?php echo $movie->getLangSubs() ?>
                    </div>
                </div>
            </div>

            <?php
            endforeach;
        ?>

    </div>
</main>

    
</body>
</html>