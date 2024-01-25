<?php include_once __DIR__ . '/movie/Movies.php';

$movie1 = new Movie("The Wolf of Wall Strett", "Comedy", 2013, "Martin Scorsese", "Netflix");
$movie2 = new Movie("Faust&Furious 8", "Action", 2017, "F. Gary Gary", "Netflix");

$movies = [ $movie1, $movie2, ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP</title>
</head>
<body>
    <?php foreach ($movies as $movie) { ?>
        <h3>
            <?php echo $movie->title; ?>
        </h3>
        <p>
            <?php echo $movie->director; ?>
        </p>
        <p>
            <?php echo $movie->releaseYear; ?>
        </p>
        <p>
            <?php echo $movie->genre; ?>
        </p>
        <p>
            <?php echo $movie->platform; ?>
        </p>
    <?php } ?>
</body>
</html>