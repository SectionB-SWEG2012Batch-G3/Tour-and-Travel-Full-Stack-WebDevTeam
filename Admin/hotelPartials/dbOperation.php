<?php
try{
    include_once '../dbconfig/connection.php';
    echo 'DB connected successfully';
}catch(PDOException $e) {
    echo 'connection exception '.$e->getMessage();
}
    include_once 'validation/test_input.php';
    include_once 'validation/randomFileCreate.php';
    $id = '';
    if(isset($_GET['id'])){
        $id = $_GET['id'];
    }
    
    $stmt = $pdo->prepare("SELECT * FROM hotel WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $hotel = $stmt->fetch();

    $hotelName = $hotel['hotel_name'] ?? '';
    $regionName = $hotel['region_name'] ?? '';
    $minPrice = $hotel['min_price'] ?? '';
    $rating = $hotel['rating'] ?? '';
    $image = '';
    $maxPrice = $hotel['max_price'] ?? '';
    $errors = [];
    $imagePath = $hotel['image'] ?? '';