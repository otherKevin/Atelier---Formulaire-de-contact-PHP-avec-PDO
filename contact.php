<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = filter_var($_POST["firstname"], FILTER_SANITIZE_ADD_SLASHES);
    $lastname = filter_var($_POST["lastname"], FILTER_SANITIZE_ADD_SLASHES);
    $email = filter_var($_POST["email"], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST["phone"], FILTER_SANITIZE_NUMBER_INT);
    $message = filter_var($_POST["message"], FILTER_SANITIZE_SPECIAL_CHARS);


    $dbh = new PDO("mysql:dbname=Atelier17;host=mysql", "root", "root");

    $query = $dbh->prepare("INSERT INTO contacts(firstname,lastname,email,phone,message) VALUES(?,?,?,?,?)");

    $result = $query->execute([$firstname, $lastname, $email, $phone, $message]);
};

if ($result) {
?>
    <h2>Contact enregistré dans la base de données.</h2>

<?php } else {
?>
    <h2>ERREUR LORS DE LA TENTATIVE D'ENREGISTREMENT DU CONTACT</h2>

<?php };
