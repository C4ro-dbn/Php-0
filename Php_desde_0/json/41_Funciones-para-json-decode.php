<?php 
    $jsoncontenido = '[
        {
            "Nombre": "Duban",
            "Apellido": "Caro",
            "Email": "Dubancaro@gmail.com"
        },
        {
            "Nombre": "Felipe",
            "Apellido": "Castiblanco",
            "Email": "felipec@gmail.com"
        },
        {
            "Nombre": "Aaron",
            "Apellido": "Diaz",
            "Email": "aarondiaz@gmail.com"
        }
    ]';
    $resultado = json_decode($jsoncontenido);
    // print_r ($resultado);
    
    foreach ($resultado as $persona){
        echo "<br>".$persona->Nombre." ".$persona->Apellido." ".$persona->Email."<br>";
    }

?> 