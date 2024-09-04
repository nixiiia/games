<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization</title>
    <link rel="stylesheet" href="./css/main.css">
</head>

<body>
    <?php require_once "blocks/header.php"; ?>

    <div class="feedback">
        <div class="container">
            <h2>Authorization</h2>
            <p>Lorem Ipsum is simply dummy text of the printing .</p>

            <form method="post" action="/lib/auth.php">
                <label>Login</label>
                <input type="text" class="one-line" name="login">

                <label>Password</label>
                <input type="password" class="one-line" name="password">
                <button type="submit">Log in</button>
            </form>
        </div>
    </div>

    <?php require_once "blocks/footer.php"; ?>
</body>

</html>