<?php
    include __DIR__ . '/partials/functions/functions.php';
    $password = getPassword();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>PHP Strong Password Generator</title>
</head>
<body>
    <main>
        <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="GET">
        <label for="pass-length">Enter the desired length, between 8 and 32 characters</label>
        <input type="number" name="pass-length" id="pass-length" min="8" max="32">
        <button type="submit">generate</button>
        </form>
        <h1><?php echo "Your password is: $password" ?></h1>
    </main>
</body>
</html>