<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $naam = $_POST["naam"];
    $achternaam = $_POST["achternaam"];
    $leeftijd = $_POST["leeftijd"];
    $adres = $_POST["adres"];
    $email = $_POST["email"];

    echo "<h2>Ingevoerde gegevens met POST-methode:</h2>";
    echo "<p>Naam: $naam</p>";
    echo "<p>Achternaam: $achternaam</p>";
    echo "<p>Leeftijd: $leeftijd</p>";
    echo "<p>Adres: $adres</p>";
    echo "<p>Email: $email</p>";
}
// bij de get methode kan je de waarde zien in de url en bij post kan dat niet 
// get heeft een limiet van 255 tekekens en post niet 
?>

<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
    <label for="naam">Naam:</label>
    <input type="text" name="naam" required><br>

    <label for="achternaam">Achternaam:</label>
    <input type="text" name="achternaam" required><br>

    <label for="leeftijd">Leeftijd:</label>
    <input type="number" name="leeftijd" required><br>

    <label for="adres">Adres:</label>
    <input type="text" name="adres" required><br>

    <label for="email">Email:</label>
    <input type="email" name="email" required><br>

    <input type="submit" value="Verzenden">
</form>

</body>
</html>
