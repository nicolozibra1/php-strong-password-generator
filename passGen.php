<?php
    session_start();
    include __DIR__ . '/partials/functions/functions.php';
    $password = getPassword($_GET['pass-length']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Password</title>
</head>

<?php include './partials/template/header.php' ?>
    <main class="d-flex justify-content-center mt-5">
    <?php if(!empty($_SESSION['isauth'])) { ?>
        <h1 class="text-white"><?php echo "Your password is: $password" ?></h1>
    <?php } else {
        header('Location: ./index.php');
    } ?>
    </main>
</body>
</html>