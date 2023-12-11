<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Censorship Form</title>
</head>

<body>
    <h1> Invia la tua richiesta </h1>

    <form action="process.php" method="GET">
        <label for=""> Paragrafo</label>
        <textarea id="paragraph" name="paragraph" rows="4" cols="50"></textarea>

        <label for="wordToCensor"> Parola da censurare:</label>
        <input type="text" id="wordToCensor" name="wordToCensor" required>

        <button type="submit"> Invia </button>

    </form>

</body>

</html>