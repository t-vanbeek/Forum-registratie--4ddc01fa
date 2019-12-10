<!DOCTYPE html>

<html>

<head></head>

<body>
    <h1>Forum Registratie</h1>
    <?php
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    if (!empty($name) || !empty($email) || !empty($age)) {
        echo "Jouw username is: $name <br>";
        echo "Jouw email is: $email <br>";
        echo "Jouw leeftijd is: $age <br>";
    } else {
        echo "alle velden zijn verplicht";
    }
    ?>
</body>

</html>