<?php
//insertion header qui contient la connexion db)
include("fichier/header.php")
//include("fichier/footer.php)
?>
<html>
<head>
    <title>Gestion des événements</title>
    <meta charset="utf-8"/>
    <!--Font Space mono-->
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    <!--Liaison Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Liaison CSS-->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body style="background-color: #550155" >
<div class="title-entry"><h1> Gestion des événements </h1></div>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
        <tr>
            <th>ID Salle</th>
            <th>Nom de l'evenement</th>
            <th>Salle de l'evenement</th>
            <th>Nombre de place restante</th>
            <th>Description</th>
        </tr>
        </thead>
        <tfoot>
        <tr>
            <th>ID Salle</th>
            <th>Nom de l'evenement</th>
            <th>Salle de l'evenement</th>
            <th>Nombre de place restante</th>
            <th>Description</th>
        </tr>
        </tfoot>

    </table>