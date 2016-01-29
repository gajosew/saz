<?php


require 'includes/config.php';
require 'includes/header.php';

// Zabezpiecz zmienne odebrane z formularza, przed atakami SQL Injection
$login = $db->real_escape_string(htmlspecialchars(trim($_POST['login'])));
$password = $_POST['password'];

if ($_POST) {
    // Podstawowa walidacja formularza
    $errors = array();

    if (empty($login) || empty($password)) {
        $errors[] = 'Wypełnij wszystkie pola';
    }

    $auth = $user->auth($login, $password);
    if (!$auth) {
        $errors[] = 'Użytkownik o podanym loginie i haśle nie istnieje';
    }


    if (empty($errors)) {
        // Jeżeli nie ma błędów to przechodzimy dalej
        // Zapisujemy ID użytkownika do sesji i tym samym oznaczamy go jako zalogowanego
        $_SESSION['user_id'] = $auth;

        echo '<p class="success">Zostałeś zalogowany. Możesz przejść na <a href="index.php">stronę główną</a></p>';
    } else {
        foreach ($errors as $error) {
            echo '<p class="error">'.$error.'</p>';
        }
    }
}
?>

 <form method="post" action="login.php">
    <label for="login">Login:</label>
    <input type="text" name="login" maxlength="32" id="login" required>

    <label for="password">Hasło:</label>
    <input type="password" name="password" id="password" required><br>

    <input type="submit" value="Zaloguj">
 </form>

<?php
require 'includes/footer.php';
