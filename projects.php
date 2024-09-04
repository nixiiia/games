<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game Website</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <div class="wrapper">
        <?php require_once "blocks/header.php"; ?>

        <div class="container projects">
            <h3>Our Recent Projects</h3>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
            <div class="images">
            <?php
            require_once "lib/db.php";

            $sql = 'SELECT * FROM projects ORDER BY id DESC LIMIT 6';
            $query = $pdo->prepare($sql);
            $query->execute();
            $projects = $query->fetchAll(PDO::FETCH_OBJ);
            foreach ($projects as $el)
                echo '
            
                <img src="/img/' . $el->image . '" alt="">
            '
            ?>
            </div>
        </div>

        <?php require_once "blocks/footer.php"; ?>
</body>

</html>