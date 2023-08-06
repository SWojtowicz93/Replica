<?php
// Połączenie z bazą danych - używamy zmiennych z przesłanego kodu
$servername = "localhost";
$username_db = "root";
$password_db = "";
$dbname = "replica";

// Pobieranie danych z formularza
if (
    isset($_POST['username']) &&
    isset($_POST['email']) &&
    isset($_POST['password']) &&
    isset($_POST['confirm_password'])
) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Sprawdzenie, czy hasło zostało poprawnie powtórzone
    if ($password !== $confirm_password) {
        echo "Hasła nie pasują do siebie. Proszę wprowadzić identyczne hasła.";
        exit();
    }

    // Haszowanie hasła - zalecane jest użycie bardziej bezpiecznej metody hashowania, np. password_hash()
    $hashedPassword = md5($password);

    // Połączenie z bazą danych
    $conn = new mysqli($servername, $username_db, $password_db, $dbname);

    if ($conn->connect_error) {
        die("Błąd połączenia z bazą danych: " . $conn->connect_error);
    }

    // Sprawdzenie, czy użytkownik o podanej nazwie już istnieje
    $checkUserSql = "SELECT * FROM users WHERE id_user = '$username'";
    $result = $conn->query($checkUserSql);

    if ($result->num_rows > 0) {
        // Użytkownik o podanej nazwie już istnieje
        echo "Użytkownik o podanej nazwie już istnieje.";
    } else {
        // Sprawdzenie, czy podany adres e-mail już istnieje
        $checkEmailSql = "SELECT * FROM users WHERE email = '$email'";
        $resultEmail = $conn->query($checkEmailSql);

        if ($resultEmail->num_rows > 0) {
            // Adres e-mail już istnieje
            echo "Podany adres e-mail już istnieje.";
        } else {
            // Dodanie nowego użytkownika do bazy danych
            $insertUserSql = "INSERT INTO users (user, pass, email) VALUES ('$username', '$hashedPassword', '$email')";
            if ($conn->query($insertUserSql) === TRUE) {
                echo "Zarejestrowano pomyślnie!";
            } else {
                echo "Błąd rejestracji: " . $conn->error;
            }
        }
    }

    $conn->close();
}
?>