<?php
    session_start();
    $_SESSION['isauth'] = true;
    include __DIR__ . '/partials/functions/functions.php';
    $password = getPassword();
?>

<?php include './partials/template/header.php' ?>
    <main>
        <form action="passGen.php" method="GET">
            <label for="pass-length">Enter the desired length, between 8 and 32 characters</label>
            <input type="number" name="pass-length" id="pass-length" min="8" max="32">
            <button type="submit">Generate</button>
        </form>
        <a href="logout.php">Logout</a>
    </main>
</body>
</html>