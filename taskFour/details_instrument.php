<?php
// Geting the ID from the URL
$id = $_GET['id'];

//Connecting to DB
$conn = mysqli_connect('localhost', 'root', '', 'music_shop');

// Running the query
$query = "SELECT * FROM instruments WHERE id = $id";
$result = mysqli_query($conn, $query);

//Fetching and display the title of the music and the poster 
$instrument = mysqli_fetch_assoc($result);

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
<!-- Displaying info about instrument  -->
<body>

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
    <a href="instruments.php">All instruments</a>

     <!-- CSS of the page -->
     
    <style>
        body {
            font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
        }

        img {
            height: 350px;

        }

        .container {
            display: flex;
            flex-direction: row;
            align-items: baseline;
        }

        h3 {
            margin: 10px;
        }
    </style>
</body>

</html>