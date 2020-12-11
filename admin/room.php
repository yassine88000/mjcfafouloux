
<?php

	$db = new PDO('mysql:host=localhost;dbname=mjcfou;charset=utf8','ysali','Yassine123*');

	$sql = 'SELECT rooms.room_id, rooms.* FROM rooms';

	$liste = $db->query ( $sql )->fetchAll ( PDO::FETCH_UNIQUE | PDO::FETCH_ASSOC );


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Gestion des Salles</title>
    <meta charset="utf-8"/>
    <!--Font Space mono-->
    <link href="https://fonts.googleapis.com/css2?family=Space+Mono&display=swap" rel="stylesheet">
    <!--Liaison Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!--Liaison CSS-->
    <link rel="stylesheet" href="css/style.css" type="text/css">
</head>
<body>
  <table>
  	<thead>
  		<tr>ID</tr>
  		<tr>Nom</tr>
  		<tr>Description</tr>
  		<tr>Places</tr>
  	</thead>
  	<tbody>
	<?php
		foreach ( $liste as $item ) {

    ?>
    	<tr>
    		<td><?php echo $item.room_id ?></td>
    		<td><?php echo $item.name ?></td>
    		<td><?php echo $item.description ?></td>
    		<td><?php echo $item.seats ?></td>
    	</tr>
    <?php
        }

	?>
  	</tbody>
  </table>
</body>
</html>