<?php
session_start();
if (isset($_SESSION['login_dn']))
{
$login_dn = $_SESSION['login_dn'];

destroy_session_and_data();
echo "Wylogowano  $login_dn.<br>";
echo "<a href='l2.php'>Kliknij tutaj</a>, aby się zalogować.";
}
else echo "<a href='authenticate2.php'>Kliknij tutaj</a>, aby się zalogować.";
function destroy_session_and_data()
{
$_SESSION = array();
setcookie(session_name(), '', time() - 2592000, '/');
session_destroy();
}