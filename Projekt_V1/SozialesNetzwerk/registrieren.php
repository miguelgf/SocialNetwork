<?php
/**
 * Festlegung der Untergrenze für die PHP-Version
 * @version: 1.0
 */
if (0 > version_compare(PHP_VERSION, '5')) {
die('<h1>Für diese Anwendung ' .
'ist mindestens PHP 5 notwendig</h1>');
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="utf-8">
<title>Image2Foot –
Sag mir was ich daraus kochen kann –
Registrierung </title>
<meta name="viewport" content=
"width=device-width; initial-scale=1.0">
</head>
<body>
<div id="nav">
<?php
require ("nav.php");
require ("plausi.inc.php");
?>
</div>
<div id="content">
<h1>Registrierung</h1>
<?php
require ("registrieren.inc.php");
/**
 * Foto2Gericht
 * Das soziale Netzwerk für Kochideen
 * Die Registrierungsseite
 */
 
 class Registrierung {
 /**
  * Registrierungsmethode
  * – Erst Eingaben des Anwenders plausibilisieren
  * – Dann in der MySQL-Datenbank eintragen, wenn die  Plausibilisierung keine Fehler ergeben hat
  */
 public function registrieren() {
 if ($this -> plausibilisieren()) {
  $this -> eintragen_db();
 }
 }
 /**
  * Plausibilisierungsmethode
  * Testet die einzelnen Eingabefelder des
  * Registrierungsformulars gegenüber
  * – den Notwendigkeiten in der MySQL-Datenbank und
  * – weiteren Anforderungen, die die Logik
  * des Netzwerks fordert.
  * Die Eingaben stehen im globalen Array $_POST
  * zur Verfügung
  * @return true, wenn die Plausibilisierung
  * keine Fehler ergab – sonst false
  */
 private function plausibilisieren() {
 // Fehlervariable
 $anmelden = 0;
 $p = new Plausi();
 $anmelden += $p -> namentest($_POST['name']);
 $anmelden += $p -> namentest($_POST['vorname']);
 $anmelden += $p -> emailtest($_POST['email']);
 $anmelden +=
  $p -> nutzerdatentest($_POST['userid']);
 $anmelden += $p -> nutzerdatentest($_POST['pw']);
 // Kritische Zeichen auf der freien Eingabe
 // der Zusatzinfos eliminieren
 $_POST['zusatzinfos'] =
 ereg_replace("[<|>|$|%|&|§]", "#",
 $_POST['zusatzinfos']);
 // Testausgaben für den derzeitigen Stand
 // des Projekts
 echo "Die Eingaben: <hr />";
 print_r($_POST);
 echo "<br />Fehleranzahl: " . $anmelden . "<hr />";
 if ($anmelden == 0) return true;
 else return false;
 }
 /**
  * Eintragen der Anmeldedaten in die Datenbank
  * Die Eingaben stehen im globalen Array $_POST
  * zur Verfügung
  */
 private function eintragen_db() {
 }
 }

/*Das Ziel der Daten des Webformulars, die mit POST weitergereicht werden, ist ja wieder
die Datei registrieren.php selbst. Deshalb wird mit sizeof($_POST) überprüft, ob der
Datei überhaupt Daten übergeben werden. Nur dann wird die Registrierungsmethode
registrieren() aus der Klasse Registrierung überhaupt aufgerufen (if
(sizeof($_POST) > 0) { $regobj -> registrieren(); })*/
$regobj = new Registrierung();
if (sizeof($_POST) > 0) {
$regobj -> registrieren();
}
?>
</div>
</body>
</html>
