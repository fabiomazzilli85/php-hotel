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

if (!empty($_GET["nome"])) {
    $nome_cercato = $_GET["nome"];
    $hotels = array_filter($hotels, fn($hotel) => stripos($hotel['name'], $nome_cercato) !== false);
}
// Questo è un lungo copia-incolla. Tuttavia mi è chiaro cosa sta accadendo. Se il NOME ricercato con il metodo GET è diverso da VUOTO e il nome cercato è all'interno dei NOME dell'array HOTELS, applico un filter all'array stesso.


foreach ($hotels as $hotel) { // Prendo ogni hotel all'interno dell'Array Hotels.
    
    echo "Nome: " . $hotel["name"] . "<br>"; // Stampo il nome dell'Hotel.
    echo "Descrizione: " . $hotel["description"] . "<br>"; // La sua descrizione. 
    echo "Disponibilità parcheggio: " . ($hotel["parking"] ? "Sì" : "No") . "<br>"; // Stampo Disponibilità parcheggio: se è True, è Sì, se è Fale è No.
    echo "Voto: " . $hotel["vote"] . "<br>"; // Stampo il voto dell'Hotel,
    echo "Distanza dal centro: " . $hotel["distance_to_center"] . "<br><br>"; // Stampo la distanza dal centro. 


// Questo blocco di codice non è molto elegante. Può essere ottimizzato facilmente. Il problema maggiore, tuttavia, è che dovrebbe funzionare ma non funziona: se il voto dell'hotel è 1, dovrebbe stampare l'hotel che ha una sola stella, se il voto è due, dovrebbe stampare l'hotel che ha due stelle etc...

//    if ($hotel["vote"] === 1) {
//        echo $hotel["name"];
// }
//    elseif ($hotel["vote"] === 2) {
//        echo $hotel["name"];
// }
//    elseif ($hotel["vote"] === 3) {
//        echo $hotel["name"];
// }
//    elseif ($hotel["vote"] === 4) {
//        echo $hotel["name"];
// }
//    elseif ($hotel["vote"] === 5) {
//        echo $hotel["name"];
// }
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
            <h1 style="text-align: center; margin: 30px 0;">Lista dei migliori hotel nelle vicinanze</h1>
        </header>
        

        <main>
            <form method="get">
                <input type="text" name="nome" placeholder="Cerca il tuo hotel">
                <button type="submit">Cerca</button>
            </form>
            
            <form method="get">
                <input type="number" name="vote" max="5" placeholder="Filtra i risultati">
                <button type="submit">Cerca</button>
            </form>

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