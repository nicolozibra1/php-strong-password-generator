<?php
    session_start();
    $_SESSION['isauth'] = true;
    include __DIR__ . '/partials/functions/functions.php';
    $password = getPassword();
?>

<?php include './partials/template/header.php' ?>
    <main>
        <form action="passGen.php" method="GET" id="login" class="container w-25 d-flex flex-column align-items-center gap-3">
            <h4>Please login to proceed</h4>
            <div class="box-logo">
                <img src="./img/logo.png" alt="">
            </div>
            <label for="username" class="fw-semibold">Your name</label>
            <input type="text" name="username" required>
            <label for="pass-length" class="fw-semibold">Enter the desired password length</label>
            <input type="number" name="pass-length" id="pass-length" min="8" max="32">
            <button type="submit">LOGIN & GENERATE</button>
        </form>
    </main>
</body>
</html>