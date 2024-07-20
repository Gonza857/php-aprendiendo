<?php
$nuevaVariable =  "testing";
$url = "https://whenisthenextmcufilm.com/api";

// curl -> para llamar a la api sin instalar dependencia

# inicializamos sesion de cURL; 
$ch = curl_init($url);

#indicar que queremos recibir resultado de peticion y no mostrarla
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
/* 
    Ejecutamos peticion
    Guardamos resultado
*/
$result = curl_exec($ch);

// podemos usar file_get_constens
// $result = file_get_contents(API_URL); solo para un GET de una API

$data = json_decode($result, true);
curl_close($ch);

var_dump($data);

?>

<!-- Hasta que no se resuelve el curl, no sigue trabajando (sincronia) -->

<head>
    <!-- Centered viewport -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.classless.min.css" />
    <title>La próxima película de Marvel</title>
</head>

<main>
    <section>
        <h2>La próxima película de Marvel</h2>
        <img src="<?= $data["poster_url"]; ?>" width="200px" />
    </section>
    <hgroup>
        <h2><?= $data["title"] ?> se estrena en <?= $data["days_until"] ?> días</h2>
        <p>Fecha de estreno <?= $data["release_date"] ?></p>
        <p>La siguiente es <?= $data["following_production"]["title"]; ?></p>
    </hgroup>
</main>