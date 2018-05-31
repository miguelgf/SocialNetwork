<?php/*
if(ereg("[1234567890]", $_GET['reg'])){
echo "<h1>Die Eingabe war korrekt</h1>";
}else{
echo "<h1>Die Eingabe war nicht korrekt</h1>";
}*/
?>


<?php/*
if(ereg("[0-9][a-d]", $_GET['reg'])){
echo "<h1>Die Eingabe war korrekt</h1>";
}else{
echo "<h1>Die Eingabe war nicht korrekt</h1>";
}*/

?>

<?php/*
if(eregi("[0-9][a-d]", $_GET['reg'])){
  echo "<h1>Die Eingabe war korrekt</h1>";
  }else{
  echo "<h1>Die Eingabe war nicht korrekt</h1>";
}*/
?>


<?php/*
echo "<h1>Die entschärfte Eingabe</h1>".
ereg_replace ("[<|>|$|%|&|§]", "#", $_GET['reg']) ;
*/
?>

<?php/*
if(ereg("^[1-9]", $_GET['reg'])){
echo "<h1>Die Eingabe war korrekt</h1>";
}else{
echo "<h1>Die Eingabe war nicht korrekt</h1>";
}*/
?>

<?php/*
if(preg_match("/^\d/", $_GET['reg'])){
echo "<h1>Die Eingabe war korrekt</h1>";
}else{
echo "<h1>Die Eingabe war nicht korrekt</h1>";
}*/
?>

<?php/*
// \d = 0--9
if(preg_match("/\d[a-d]/i", $_GET['reg'])){
echo "<h1>Die Eingabe war korrekt</h1>";
}else{
echo "<h1>Die Eingabe war nicht korrekt</h1>";
}*/
?>

<?php
// \w = ein alphanumerisches Zeichen (buchstabe, Ziffer oder Sonderzeichen)
if(preg_match("/\w+@\w+\.\w{2}/", $_GET['reg'])){
echo "<h1>Die Eingabe war korrekt</h1>";
}else{
echo "<h1>Die Eingabe war nicht korrekt</h1>";
}
?>
