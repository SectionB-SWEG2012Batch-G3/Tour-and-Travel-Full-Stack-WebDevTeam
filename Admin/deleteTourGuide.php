<?php
    include_once '../dbconfig/connection.php';
    $sql = "DELETE FROM tourguide WHERE id = :id";
    $id = $_GET['id'];
    if(!$id){
        header('Location: tourguides.php');
        exit;
    }
    $stmt = $pdo->prepare($sql);
    $stmt->execute([':id'=>$id]);
    header('Location: tourguides.php');
?>