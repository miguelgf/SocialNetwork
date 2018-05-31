<?php
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
