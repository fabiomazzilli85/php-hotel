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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>PHP Hotel</title>
</head>
<body>
    <div class="container">
        <header>
            <h1>Lista dei migliori hotel nelle vicinanze</h1>
        </header>
        

        <main>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Nome</th>
                        <th>Descrizione</th>
                        <th>Disponibilità Parcheggio</th>
                        <th>Voto</th>
                        <th>Distanza dal centro</th>
                    </tr>
                </thead>
            
                <tbody>
                <?php foreach ($hotels as $hotel): ?>
                    <tr>
                        <td><?php echo $hotel['name']; ?></td>
                        <td><?php echo $hotel['description']; ?></td>
                        <td><?php echo $hotel['parking'] ? 'Sì' : 'No'; ?></td>
                        <td><?php echo $hotel['vote']; ?></td>
                        <td><?php echo $hotel['distance_to_center']; ?> KM</td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </main>
    </div>
</body>
</html>