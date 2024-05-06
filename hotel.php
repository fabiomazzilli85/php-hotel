<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Hotel</title>
</head>
<body>
<?php

$hotels = [

    [
        'name' => 'Hotel Belvedere',
        'description' => 'Hotel Belvedere Descrizione',
        'parking' => true,
        'vote' => 4,
        'distance_to_center' => 10.4
    ],
    [
        'name' => 'Hotel Futuro',
        'description' => 'Hotel Futuro Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 2
    ],
    [
        'name' => 'Hotel Rivamare',
        'description' => 'Hotel Rivamare Descrizione',
        'parking' => false,
        'vote' => 1,
        'distance_to_center' => 1
    ],
    [
        'name' => 'Hotel Bellavista',
        'description' => 'Hotel Bellavista Descrizione',
        'parking' => false,
        'vote' => 5,
        'distance_to_center' => 5.5
    ],
    [
        'name' => 'Hotel Milano',
        'description' => 'Hotel Milano Descrizione',
        'parking' => true,
        'vote' => 2,
        'distance_to_center' => 50
    ],

];


foreach ($hotels as $hotel) { // Prendo ogni hotel all'interno dell'Array Hotels.
    
    echo "Nome: " . $hotel["name"] . "<br>"; // Stampo il nome dell'Hotel.
    echo "Descrizione: " . $hotel["description"] . "<br>"; // La sua descrizione. 
    echo "Disponibilità parcheggio: " . ($hotel["parking"] ? "Sì" : "No") . "<br>";
    echo "Voto: " . $hotel["vote"] . "<br>"; // Stampo il voto dell'Hotel,
    echo "Distanza dal centro: " . $hotel["distance_to_center"] . "<br><br>"; // Stampo la distanza dal centro. 
}
?>
</body>
</html>