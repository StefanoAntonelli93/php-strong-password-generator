<?php
session_start();

// se password esiste ed è nella sessione
if (isset($_SESSION['generated_password'])) {
    $generate_password = $_SESSION['generated_password'];
} else {
    // redirect a index
    header('Location: ./index.php');
    // termino esecuzione dashboard
    exit('error');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generated</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <section>
        <div class="container text-center d-flex justify-content-center p-5">
            <div class="content">
                <h1 class="fw-semibold">Password Generated</h1>
                <p>La tua nuova password è: <span class="fw-bold"><?php echo $generate_password; ?></span></p>
            </div>
        </div>
    </section>

</body>

</html>