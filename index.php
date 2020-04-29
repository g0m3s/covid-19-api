<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Covid</title>

    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto+Mono&display=swap');

        *{

            margin: 0;
            padding: 0;

        }

        .container{

            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(55, 55, 56, .7 );
            font-family: 'Roboto Mono', monospace;
            
        }

        .covid{

            border: 1px solid black;
            border-radius: 7px;
            height: 250px;
            width: 250px;
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            
        }

        .covid h5 {

            color: #bf2626;

        }

    </style>

</head>
<body>

<?php

    $data = file_get_contents('https://api.kawalcorona.com/');
    $data = json_decode($data,true);

    foreach ($data as $row) {


        if($row['attributes']['Country_Region'] == 'Brazil'){
    
        
?>


<div class="container">

    <div class="covid">

        <h4>Numero de Mortos</h4>
        <h5><?php echo $row['attributes']['Deaths'] ?></h5>

        <h4>Numero de confirmados</h4>
        <p><?php echo $row['attributes']['Confirmed'] ?></p>

    </div>

</div>

<?php

}


    }

?>
    
</body>
</html>