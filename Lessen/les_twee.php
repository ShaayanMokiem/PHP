<?php
$servername = "localhost";
$username = "root";
$password = "";

//TO DO
/* Errors wanneer nog niets is ingevuld in de formulieren
 * Veiligheid (inputvalidatie, enzovoorts)
 * Testen + Refactoren
 * En meer...
 * 
 */


if (isset($_POST['button_clicked'])) {
    $naam = $_POST['naam'];
    $leeftijd = $_POST['leeftijd'];
    $cijfer = $_POST['cijfer'];
    try {
        $conn = new PDO("mysql:host=$servername;dbname=php_les", $username, $password);
        $sql = "INSERT INTO student VALUES ('" . $naam . "', " . $leeftijd . ", 53)";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
    } catch (PDOException $err) {
        //    die($err->getMessage());
    }
} else {
}





/* ALTERNATIEF */
//define('DSN', 'mysql:dbname=php_bijles; host=localhost');
//define('USER', 'root');
//define('PASSWORD', '');
//$options = [
//  PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC  
//];

//try {
//    $conn = new PDO(DSN, USER, PASSWORD, $options);
//} catch (PDOException $error){
//    
//} finally {
//    
//}
//
//

function JSC($input)
{
    echo "<pre>";
    print_r($input);
    echo "</pre>";
}

?>

<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1">
    <link rel="shortcut icon" type="image/png" href="./Images/money.png">

    <title>Inloggen SpeedConsultancy</title>
    <meta name="description" content="vragenlijst">
    <link rel="stylesheet" href="style.css">

    <style>
        .container {
            display: grid;
            grid-row-gap: 1.5rem;

            /*transform: scale(3); */
        }
    </style>
</head>

<body class="body">
    <form action="les_twee.php" method="post" class="container container--numbers">
        <input type="text" class="text text--name" placeholder="naam" name="naam">
        <input type="text" class="text text--name" placeholder="leeftijd" name="leeftijd">
        <input type="text" class="text text--name" placeholder="cijfer" name="cijfer">
        <button type="submit" class="button button--numbers" name="button_clicked">Hit me up!</button>
    </form>
</body>

</html>