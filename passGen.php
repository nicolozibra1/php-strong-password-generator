<?php
    session_start();
    include __DIR__ . '/partials/functions/functions.php';
    $password = getPassword($_GET['pass-length']);
    $username = ($_GET['username']);
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
    <main class="text-center mt-5">
    <?php if(!empty($_SESSION['isauth'])) { ?>
        <h2 class="text-white text-capitalize"><?php echo "Welcome $username!" ?></h2>
        <div class="box-pass container w-25">
            <h2 class="text-white"><?php echo "Your password is: $password" ?></h2>
        </div>
        <h5 class="text-white text-decoration-underline fst-italic mt-5">Thanks for using our service</h5>
        <h5 class="text-white mt-5 mb-3">Remember to log out</h5>
        <a href="logout.php">Logout</a>
    <?php } else {
        header('Location: ./index.php');
    } ?>
    </main>
</body>
</html>