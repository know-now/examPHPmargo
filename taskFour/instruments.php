<?php

// Connecting to the DB
$conn = mysqli_connect('localhost', 'root', '', 'music_shop');

// True if connected, false if not
if ($conn) {

    // Prepare the query
    $query = 'SELECT * FROM instruments';

    // Execute the query 
    $results = mysqli_query($conn, $query);

    // Fetching results as an associative array
    $instruments = mysqli_fetch_all($results, MYSQLI_ASSOC);
} else {
    echo 'Problem connecting with the database';
}
?>
<!-- HTML of the page -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music Shop</title>
</head>

<!-- Displaying instruments  -->
<body>
    <?php foreach ($instruments as $instrument) : ?>
        <div class="container">
            <h3>
                Name of instrument:
            </h3>
            <p> <?= $instrument['name']; ?></p>
        </div>

        <div class="container">
            <h3>
                Brand name:
            </h3>
            <p><?= $instrument['brand_name']; ?></p>
        </div>
        <img src="<?= $instrument['photo'] ?>" alt=""> <br>
        <div class="container">
            <h3>
                Description:
            </h3>

            <p><?= $instrument['description']; ?></p>
        </div>
        <a href="details_instrument.php?id=<?= $instrument['id'] ?>">Detail page</a>
        <hr>

    <?php endforeach; ?>

<!-- CSS of the page -->
    <style>
        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        img {
            height: 200px;

        }

        .container {
            display: flex;
            flex-direction: row;
            align-items: baseline;
        }
        h3{
            margin: 10px;
        }
    </style>
</body>

</html>