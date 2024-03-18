<?php include('header.php');
include('database_pdo.php');
include('nav.php');?>

<p class="text-left fs-2 ma-6"> Durchsuchen Sie die Datenbank</p>
<form action="search.php" method="POST">
    <label for="search">Suchbegriff eingeben: </label>
    <input type="text" name="search" id="search" placeholder="Suchbegriff">
    <input type="submit" value="Suche">
</form>
<br>
<p class="text-leftfs-3"> Suchergebnis</p>
<br>
<?php
// Header des Formulars prüfen
if ($_SERVER["REQUEST_METHOD"] == "POST" and isset($_POST['search'])) {
    $searchTerm = $_POST['search'];
//Verbindung aufbauen
    $conn = getConnection();

// Query erstellen
    $sql = "SELECT name, hersteller FROM modell join hersteller on hersteller.id = modell.hersteller_id  WHERE hersteller LIKE :searchTerm";
    $stmt = $conn->prepare($sql);
    //$stmt->bindValue(':searchTerm', $searchTerm, PDO::PARAM_STR);
    $stmt->execute(array(':searchTerm'=>$searchTerm));
    

// Abfrage ausführen
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    $row1 = $stmt->columnCount();
// Ergebnis anzeigen

    if ($stmt->columnCount() != 0) {
        foreach ($result as $row) {
            echo "Modell: " . $row["name"] . "<br> ";
            echo "Hersteller: " . $row["hersteller"] . "<br>";
            echo "<br>";
        }
   } else {
            echo "keine Ergebnisse gefunden";
        }
?>

      
<?php }
// Verbindung schließen
?>













<?php include('footer.php');?>