<?php
// logica php
// se input form è popolato allora stampa 
if (!empty($_GET['password_length'])) {
    $password_length = $_GET['password_length'];
    $password = generatePassword($password_length);
}

// creo funzione genera password

function generatePassword($pw_length)
{

    $password = '';
    // creo variabili range per lettere numeri e simboli
    $upper_chars = range('A', 'Z');
    $lower_chars = range('a', 'z');
    $numbers = range(0, 9);
    $symbols = range('!', '/');
    // prendo tutti gli elementi degli array con spread operator
    $password_chars = [...$upper_chars, ...$lower_chars, ...$numbers, ...$symbols];

    for ($i = 0; $i < $pw_length; $i++) {
        $rand = rand(0, count($password_chars) - 1);
        $password .= $password_chars[$rand];
    }
    return $password;
}



?>




<!-- html -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>password generator</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section>

        <div class="container text-center d-flex justify-content-center p-5">
            <div class="content ">

                <h1 class="fw-semibold">Password generator</h1>
                <form class="p-3" action="index.php" method="GET">
                    <label for="passwords">Lunghezza password:</label>
                    <input type="number" name="password_length" id="passwords">
                    <button class="btn btn-primary ms-2">INVIA</button>
                </form>
                <?php if (!empty($_GET['password_length'])) {
                    $password_length = $_GET['password_length'];
                    echo 'Lunghezza password: ' .  $password_length . ' caratteri';
                    echo 'La tua password è: ' . $password;
                } ?>
            </div>

        </div>
    </section>
    <!-- prove di include -->
    <?php include __DIR__ . '/includes/header.php'; ?>
    <?php include_once __DIR__ . '/includes/header.php'; ?>
    <?php include __DIR__ . '/includes/main.php'; ?>
    <?php include __DIR__ . '/includes/footer.php'; ?>
</body>

</html>