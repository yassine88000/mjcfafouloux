<?php
include("fichier/header.php")
//include("fichier/footer.php)
?>
<html>
<head>
    <title>Inscription</title>
    <meta charset="utf-8"/>
    <!--Font Space mono-->
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    <!--Liaison Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Liaison CSS-->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body style="background-color: #550155" >
<div class="title-entry"><h1> Inscription à la tete dans les étoiles </h1></div>
<div class="container">

    <!--<div class="card2">
        <img src="image/space.jpeg" class="bd-placeholder-img card-img-top">
        <ul class="card-text dateEvent">
            <li>le 12 Decembre 2020 21h00</li>
            <li>ceci est une heure</li>
            <li class="places">Il reste 42 places</li>
        </ul>
        <div class="card-body">
            <h5 class="card-title">La tête dans les étoiles</h5>
            <p class="card-text">This is a longer card It's a broader card with text below as a natural lead-in to
                extra content. This content is a little longer. This content is a little bit longer.</p>
            <p class="card-validate">JE PARTICIPE</p>
        </div>
    </div>

</div>

-->

    <form>
        <div class="form-group">
            <input type="name" class="form-control" placeholder="Nom et prénom">
            <input type="email" class="form-control" placeholder="Mon email">
            <input type="phone" class="form-control"  placeholder="Mon téléphone">
            <div class="nbpersonne">
                <p>Je viens </p>
            <select class="form-control" id="exampleFormControlSelect1">
                 <option>Seul</option>
                <option>avec 1 personne</option>
                <option>avec 2  personnes</option>
                <option>avec 3 personnes</option>
                <option>avec 5 personnes</option>
            </select>
            </div>
          <p>   Vous pourrez payer en ligne votre ou vos inscriptions sur la page suivante </p>
        </div>


    </form>
</body>
</html>