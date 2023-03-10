<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
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
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>description</th>
                        <th>parking</th>
                        <th>vote</th>
                        <th>distance_to_center</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($hotels as $hotel) { ?>
                        <tr>
                            <?php foreach($hotel as $key=>$item_hotel) { ?>
                                <td>
                                    <?php if($key == 'parking') {
                                    if($item_hotel == true){
                                        echo 'Si';
                                    }            
                                    else{
                                        echo 'No';
                                    } ?>                
                                    <?php } else { 
                                        echo $item_hotel;
                                    } ?>                   
                                </td>
                            <?php } ?>    
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </body>
</html>