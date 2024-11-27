<?php
    if($_SERVER['REQUEST_METHOD'] == "POST"){
        $name = htmlspecialchars($_POST['name']);
        $email = filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
        $age = filter_var($_POST['age'], FILTER_VALIDATE_INT);
        $birthdate = $_POST['birthdate'];
        $country = $_POST['country'];
        $hobbies = isset($_POST['hobbies']) ? implode("," ,$_POST['hobbies']) : 'nem adott meg';
        $gender = $_POST['gender'];
        $introduction = htmlspecialchars($_POST['introduction']);
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>A következő adatok kerültek beküldésre:</h1>
    <p>Név: <?= $name ?></p>
    <p>Email-cím: <?= $email ?></p>
    <p>Jelszó: <?= $password ?></p>
    <p>Életkor: <?= $age ?></p>
    <p>Születésnap: <?= $birthdate ?></p>
    <p>Ország: <?= $country ?></p>
    <p>Hobbik: <?= $hobbies ?></p>
    <p>Bemutatkozás: <?= $introduction ?></p>
    <p>Neme: <?= $gender ?></p>
</body>
</html>