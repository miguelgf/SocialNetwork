form action="registrieren.php" method="post">

<label class="reg_label">Name</label>
<span class="pflichtmarker"> * </span>
<input name="name" maxlength="30"
<?php
//Mit isset() überprüfen wir von einem Zugriff auf ein Arrayelement von $_POST,
//ob dieses überhaupt existiert.
if (isset($_POST['name']))
echo "value='" . $_POST['name'] . "'";
?>

<span class="fehlermeldung"></span>
<br />

<label class="log_label">Userid</label>
<input name="userid" maxlength="20"/>
<span class="fehlermeldung"></span>
<br />

<label class="log_label">Passwort</label>

<input name="pw" type="password" maxlength="50"/>
<span class="fehlermeldung"></span>
<br />


<input type="submit" />
</form>
