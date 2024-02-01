<?php

 $first_name = $_POST['first_name'];
 $last_name = $_POST['last_name'];
 $email = $_POST['email'];
 $message_t = $_POST['message_t'];

 try {
    $dsn = "mysql:host=localhost;dbname=contactInfo";
    $dbusername = "root";
    $password = "";

    $pdo = new PDO($dsn, $dbusername, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = "INSERT INTO contact (first_name, last_name, email, message_t) VALUES (:first_name, :last_name, :email, :message_t)";
    $statement = $pdo->prepare($query);

    $statement->bindParam(":first_name", $first_name, PDO::PARAM_STR);
    $statement->bindParam(":last_name", $last_name, PDO::PARAM_STR);
    $statement->bindParam(":email", $email, PDO::PARAM_STR);
    $statement->bindParam(":message_t", $message_t, PDO::PARAM_STR);

    $statement->execute();
    echo "Successfully inserted data.";
} catch (PDOException $e) {
    echo "Error found: " . $e->getMessage();
}