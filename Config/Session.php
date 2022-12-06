<?php

include('Database.php');

$email = ($_POST['email']);
$password = $_POST['password'];
$hash = hash('SHA256', md5($password));


$conn = new DataBase();
$sql = "select * from usuarios where email=? and password = ?; ";
$stmt = $conn->ms->prepare($sql);
$stmt->bind_param(
    "ss",
    $email,
    $hash

);
$stmt->execute();
$result = $stmt->get_result();
$tipo = $result->fetch_all();
// var_dump($tipo);
// echo $tipo[0][7];

if ($tipo) {
    if ($tipo[0][7] == "admin") {
        session_start();
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $hash;
        header('Location: ../screens/admin/index.php');
    } else if ($tipo[0][7] == "cliente") {
        session_start();
        $_SESSION["email"] = $email;
        $_SESSION["password"] = $hash;
        $_SESSION["nombre"] = $tipo[0][1];
        $_SESSION["id"] = $tipo[0][0];
        header('Location: ../index.php');
    }
} else {
    header('Location: ../signin.php');
}
