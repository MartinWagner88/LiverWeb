<!-- Datenbankanbindung nach https://www.w3schools.com/php/php_mysql_insert.asp -->
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
  if(isset($_POST["nachname"])){$nachname = test_input($_POST["nachname"]);}
  if(isset($_POST["vorname"])){$vorname = test_input($_POST["vorname"]);}
  if(isset($_POST["geburtsdatum"])){$geburtsdatum = test_input($_POST["geburtsdatum"]);}
  if(isset($_POST["geschlecht"])){$geschlecht = test_input($_POST["geschlecht"]);}
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "liverweb";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO stammdaten (nachname, vorname, geburtsdatum, geschlecht)
    VALUES ('$nachname','$vorname','$geburtsdatum','$geschlecht')";
    // use exec() because no results are returned
    $conn->exec($sql);
    //echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

?>