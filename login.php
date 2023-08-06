<?php
session_start();
// take values from form
if (isset($_POST['username']) && isset($_POST['password'])) {
    require_once "connect.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $hashedPassword = md5($password);

    // check user and password
    $conn = new mysqli($host, $db_user, $db_password, $db_name);

    if ($conn->connect_error) {
        die("Błąd połączenia z bazą danych: " . $conn->connect_error);
    }

    $sql = "SELECT * FROM users WHERE user = '$username' AND pass = '$hashedPassword'";
    if ($result = $conn->query($sql))
    {

        if ($result->num_rows > 0) {
            // logi carrect

            $row = $result->fetch_all(MYSQLI_ASSOC);
            //Wyciąganie poszcególnych danych z bzy danych
		foreach ($row as $row)
		{
            $_SESSION['userid'] = $row['id_user'];
		}



            $_SESSION['loged'] = true;
            header('Location: index.php');


            $result->close();
        } else {
            // error login
            $_SESSION['wrongpass'] = '<p style = "color:red">Wrong pass or login</span>';
            header('Location: loginsite.php');

        }
    }
    else{


    }    

    $conn->close();
}
?>