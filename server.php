<html>

<form name="inloggen" action="" method="POST">
    <input type="text" name="email" value="iemand@mail.com"/>
    <input type="password" name="password" value="wachtwoord"/>
    <input type="submit" name="submit" value="Inloggen"/>
</form>
<?php
if(isset($_POST['submit'])) {
    echo "------------ Backend -----------";
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    echo "<br>e-mail: $email";
    echo "<br>wachtwoord: $password";
}
?>

Domain name $_SERVER['HTTP_HOST']
Browser $_SERVER['HTTP_USER_AGENT']
Language $_SERVER['HTTP_ACCEPT_LANGUAGE']
Encoding $_SERVER['HTTP_ACCEPT_ENCODING']
IP $_SERVER['REMOTE_ADDR']
</html>