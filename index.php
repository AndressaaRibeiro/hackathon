<?php

require './vendor/autoload.php';

use Symfony\Component\HttpClient\HttpClient;

$client = HttpClient::create();

$response = $client->request('GET', 'https://api.sunrise-sunset.org/json?lat=25.284266&lng=14.438434&date=today');


$statusCode = $response->getStatusCode();
$type = $response->getHeaders()['content-type'][0];

if ($statusCode === 200 && $type === 'application/json') {
   $content = $response->getContent();
   // get the response in JSON format
   
   $content = $response->toArray();
   // convert the response (here in JSON) to an PHP array
}
var_dump( $content);

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="index.css" rel="stylesheet">

    <title>Document</title>
    <!-- Font Awesome -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    rel="stylesheet"
    />
    <!-- Google Fonts -->
    <link
    href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap"
    rel="stylesheet"
    />
    <!-- MDB -->
    <link
    href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.css"
    rel="stylesheet"
    />
</head>
<body>
    <div class="center">
        <iframe  src="https://www.google.com/maps/d/u/0/embed?mid=15N-IZd0QFzrk3FIALZR2C0XcN81Jw44&ehbc=2E312F" width="90%" height="500rm"></iframe>
    </div>
   <h2 class="contact">Nous contacter</h2>

    <form class="bloc">
    <!-- 2 column grid layout with text inputs for the first and last names -->
        <div class="row mb-4 ">
            <div class="col">
            <div class="form-outline">
                <input type="text" id="form6Example1" class="form-control" />
                <label class="form-label" for="form6Example1">Nom</label>
            </div>
            </div>
            <div class="col">
            <div class="form-outline">
                <input type="text" id="form6Example2" class="form-control" />
                <label class="form-label" for="form6Example2">Prénom</label>
            </div>
            </div>
        </div>
    <!-- Text input -->
            <div class="form-outline mb-4">
                <input type="text" id="form6Example4" class="form-control" />
                <label class="form-label" for="form6Example4">Address</label>
            </div>

            <!-- Email input -->
            <div class="form-outline mb-4">
                <input type="email" id="form6Example5" class="form-control" />
                <label class="form-label" for="form6Example5">Email</label>
            </div>

            <!-- Number input -->
            <div class="form-outline mb-4">
                <input type="number" id="form6Example6" class="form-control" />
                <label class="form-label" for="form6Example6">Téléphone</label>
            </div>

            <!-- Message input -->
            <div class="form-outline mb-4">
                <textarea class="form-control" id="form6Example7" rows="4"></textarea>
                <label class="form-label" for="form6Example7">Votre question</label>
            </div>
            <!-- Submit button -->
            <div class="ks" >
                 <button type="submit" class="btn btn-primary ">Validation</button>
            </div>
    </form>

    <!-- MDB -->
    <script
    type="text/javascript"
    src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/6.3.0/mdb.min.js"
    ></script>
</body>
</html>