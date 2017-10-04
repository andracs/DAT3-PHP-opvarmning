<!-- En opvarmningsøvelse lavet i klassen 4. oktober 2017 -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Øvelser DAT3, 4. oktober 2017</title>
    <link rel="stylesheet" href="css/style.css">

</head>
<body>
<?php
// Denne kan bruges til error reporting
// error_reporting(E_ALL);
// ini_set('display_errors', 1);

// Lav et loop, som udskriver tal 1 - 10.
echo "<h2>Et loop, som udskriver tal 1 - 10</h2>";
for ($i = 1; $i <= 10; $i++) {

    echo $i . " - ";

}


// Lav en løkke i en løkke, så du udskriver en multiplikationstabel 1 - 10
echo "<h2>Et nested loop, som udskriver en multiplikationstabel </h2>";
echo "<table>";
for ($i = 1; $i <= 10; $i++) {

    echo "<tr>";
    for ($j = 1; $j <= 10; $j++) {

        echo "<td>";
        echo $i * $j;
        echo "</td>";
    }
    echo "</tr>";

}
echo "</table>";


// Læs et navn in fra $_GET og udskriv en hilsen.
// f.eks. http://localhost/dummyproject/index.php?name=Abdul&password=secret
echo "<h2>Et eksempel på et GET request</h2>";

echo "<code>";
echo "<h3>Debug info</h3>";
print_r($_GET);
echo "<br>";// Kan bruges til debugging
var_dump($_GET); // Kan også bruges til debugging
echo "</code>";

$name = $_GET['name'];
$kodeord = $_GET['password'];
echo "<p>";
if ($name) echo "<br>Være hilset " . $name;
if ($kodeord) {
    echo "<br>Dit kodeord er  " . $kodeord;
    echo "<br>FYYY!! Du skal nok ikke sende password via GET!";
}
echo "</p>";
echo "<h2>Et eksempel på en POST request</h2>";

?>
<form method="post" action="index.php" ><input type="text" id="feltNavn" name="name" value="Skriv dit navn...">
    <button>Klik mig</button>
</form>

<?php
print_r($_POST);
$name2 = $_POST['name'];

if ($name2) {
    echo "<br>Har modtaget name <b>" . $name2 . "</b> via POST metoden.";
}


// Lav en multidimensional array, som indeholder et par brugernavn og kodeord.
echo "<h2>Et eksempel på en multidimensionel array</h2>";
$users = array
(
    array("Abdul","kodeord"),
    array("Anton","password123"),
    array("Anders","passwordX")
);
echo "<code>";
var_dump($users);
echo "</code>";

// Læs et navn og et kodeord fra $_GET og skriv “logget ind”, hvis navnet findes i array’et, ellers skriv “kan ikke logge ind”.
// Virker på URL'en http://localhost/dummyproject/index.php?name=Abdul&password=123
echo "<h2>Et eksempel på en if-sætning</h2>";
if ($kodeord=="123") {
    echo $name . ", du er logget ind.";
} else {
    echo "Du er ikke logget ind.";
}

?>

<h3>Øvels slut.</h3>

</body>
</html>
