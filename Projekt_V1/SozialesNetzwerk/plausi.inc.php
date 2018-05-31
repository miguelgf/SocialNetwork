<?php
/**
 * Klasse mit Testmethoden, ob die offensichtlichen
 * Regeln für das Netzwerk erfüllt sind
 */

class Plausi {

  //############################################################
  //############ Vor und Nachname Plausibilisierung
  //############################################################

public function namentest($wert) {
  //Wenn Eingbe = Zahl, Alpanummerische Wert zwischen 2 und 30,
if (preg_match("/^\w{2,30}$/", $wert)) {
  //Wenn Keine Fehler enstanden sind, gibt die Methode den Wert 0 zurück
return 0;
//Ansonsten:
} else {
return 1;
}
}

//############################################################
//############ Email Plausibilisierung
//############################################################


public function emailtest($wert) {
$fehler = 0;
// Test notwendige E-Mail-Struktur

/*Der erste Test prüft das Vorhandensein einer gültigen E-Mail-Adresse. Das schließt
aber noch nicht aus, dass vor oder nach diesem gültigen Muster Sonderzeichen,
White Space etc. auftauchen kann, was nicht erlaubt ist. Dazu führen wir den zweiten
Test durch.*/
if (!preg_match("/\w+@\w+\.\w{2}/", $wert)) {
$fehler++;
}
// nichtalphanumerische Zeichen – außer dem Zeichen @

/*Der zweite Test sucht alle Zeichen, die nicht alphanumerisch sind (mit \W). Wenn
diese Zeichen keinem @ entsprechen, wird der Fehlerzähler erhöht.*/
if (preg_match("/\W/", $wert, $ergarray)) {
if ($ergarray[0] != "@")
$fehler++;
}
return $fehler;
}

//############################################################
//############ User Id und Password Verifizierung
//############################################################



/*Hier fordern wir, dass maximal
20 Zeichen und minimal 8 Zeichen vorkommen, nur alphanumerische Zeichen
verwendet werden und davon mindestens 1 Großbuchstabe, mindestens 1 Kleinbuchstabe
und mindestens 1 Zahl dabei sind.*/


public function nutzerdatentest($wert) {
$fehler = 0;
if (!preg_match("/^\w{8,20}$/", $wert)) {
$fehler++;
}
// Keine Zahl
if (!preg_match("/\d/", $wert)) {
$fehler++;
}
// Kein Großbuchstabe
if (!preg_match("/[A-Z]/", $wert)) {
$fehler++;
}
// Kein Kleinbuchstabe
if (!preg_match("/[a-z]/", $wert)) {
$fehler++;
}
return $fehler;
}
}
?>
