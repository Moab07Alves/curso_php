<?php

session_start();

include_once("connection.php");
include_once("url.php");

$data = $_POST;

if(!empty($data)) {
    
    if($data["type"] === "create") {
        // CRIAR CONTATO
        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];
        
        $query = "INSERT INTO contacts (name, phone, observations) VALUES (:name, :phone, :observations)";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato criado com sucesso!";

        } catch(PDOException $e) {
            // ERRO NA CONEXÃO
            $error = $e->getMessage();
            echo "Erro: $error";
        }

    } else if ($data["type"] === "edit") {
        // MODIFICAÇÃO NO BANCO

        $name = $data["name"];
        $phone = $data["phone"];
        $observations = $data["observations"];
        $id = $data["id"];

        $query = "UPDATE contacts SET name = :name, phone = :phone, observations = :observations WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":phone", $phone);
        $stmt->bindParam(":observations", $observations);

        $stmt->bindParam(":id", $id);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato atualizado com sucesso!";

        } catch(PDOException $e) {
            // ERRO NA CONEXÃO
            $error = $e->getMessage();
            echo "Erro: $error";
        }

    } else if($data["type"] === "delete") {
        $id = $data["id"];

        $query = "DELETE FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        try {

            $stmt->execute();
            $_SESSION["msg"] = "Contato removido com sucesso!";

        } catch(PDOException $e) {
            // ERRO NA CONEXÃO
            $error = $e->getMessage();
            echo "Erro: $e";
        }


    }

    // REDIRECT HOME
    header("Location:" . $BASE_URL . "../index.php");
} else {
    // SELEÇÃO DE DADOS
    $id;

    if(!empty($_GET)) {
        $id = $_GET["id"];
    }

    if (!empty($id)) {

        // RETORNA O DADO DE UM CONTATO
        $query = "SELECT * FROM contacts WHERE id = :id";

        $stmt = $conn->prepare($query);

        $stmt->bindParam(":id", $id);

        $stmt->execute();
        
        $contact = $stmt->fetch();

    } else {

        // RETORNA TODOS OS CONTATOS
        $contacts = [];

        $query = "SELECT * FROM contacts";

        $stmt = $conn->prepare($query);

        $stmt->execute();

        $contacts = $stmt->fetchAll();

    }
}

// FECHAR CONEXÃO
$conn = null;