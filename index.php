<?php
// logica php
$password_length = $_GET['password_length'];
echo $password_length;

$random_pass_number[] = rand(0, 9);
$password_length = $random_pass_number;
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

                <h1>Password generator</h1>
                <form class="p-3" action="index.php" method="GET">
                    <label for="passwords">Lunghezza password:</label>
                    <input type="number" name="password_length" id="passwords">
                    <button class="btn btn-primary ms-2">INVIA</button>
                </form>
            </div>

        </div>
    </section>
    <?php include __DIR__ . '/includes/header.php'; ?>
    <?php include __DIR__ . '/includes/main.php'; ?>
    <?php include __DIR__ . '/includes/footer.php'; ?>
</body>

</html>