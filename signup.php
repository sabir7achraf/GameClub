<?php
include('connect.php');

if (isset($_POST["login"])) {
    $name = $_POST["name"];
    $prenom = $_POST["prenom"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $tel = $_POST["tel"];

    $sql = "INSERT INTO membres (prenom, email, nom, password, tel) VALUES (?, ?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $resulta = $stmt->execute([$prenom, $email, $name, $password, $tel]);

    if ($resulta) {
        $id = $conn->lastInsertId();
        $items = $_POST['games'];
        foreach ($items as $game) {
            $sql = "INSERT INTO games (nom, id_member) VALUES (?, ?)";
            $stmt = $conn->prepare($sql);
            $re=$stmt->execute([$game, $id]);
            if($re){
                header('Location:test.html');
            }
        }
        header('Location:../login/Login.html');
        exit(); 
    }
}
?>
