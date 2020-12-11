<!doctype html>
<?php
	session_start();
	include('../fichier/config.php');

	if(isset($_GET['del']))
	{
		mysqli_query($con,"delete from events where event_id = '".$_GET['event_id']."'");
        $_SESSION['msg']="data deleted !!";
	}
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Admin - List Event</title>
    <!-- Bootstrap core CSS -->
	<link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="../css/font-awesome/css/font-awesome.min.css">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body>
    
<?php include('header.php');?>

<div class="container-fluid">
  <div class="row">
  
  	<?php include('sidebar.php');?>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
			
	<div class="container-fluid container-fullw bg-white margin15top">
	  
	  <h2 class="over-title margin-bottom-15">Manage <span class="text-bold">Event</span></h2>
		 <p style="color:red;"><?php echo htmlentities($_SESSION['msg']);?>
		<?php echo htmlentities($_SESSION['msg']="");?></p>	
	  </div>
	  
      <div class="table-responsive">
        <table class="table table-striped table-sm">
          <thead>
            <tr>
	            <th>ID Salle</th>
	            <th>Nom de l'evenement</th>
	            <th>Salle de l'evenement</th>
	            <th>Nombre de place restante</th>
	            <th>Description</th>
            </tr>
          </thead>
          <tbody>
            
            
		<?php
			$sql=mysqli_query($con,"select * from events");
			$cnt=1;
			while($row=mysqli_fetch_array($sql))
			{
		?>

			<tr>
				<td class="center"><?php echo $cnt;?>.</td>
				<td class="hidden-xs"><?php echo $row['name'];?></td>
				
				<?php 
				// Room
					$room_result = mysqli_query($con, "SELECT name FROM rooms WHERE room_id=".$row['room_id']." LIMIT 1");
					$room_row = mysqli_fetch_assoc($room_result);
				?>
				
				<td><?php echo $room_row['name'];?></td>
				<td><?php echo $row['start_date'];?>
				<td><?php echo $row['end_date'];?>
				</td>
				
				<td >
					<div class="visible-md visible-lg hidden-sm hidden-xs">
						<a href="edit-event.php?event_id=<?php echo $row['event_id'];?>" class="btn btn-transparent btn-xs" tooltip-placement="top" tooltip="Edit"><i class="fa fa-pencil"></i></a>
						<a href="manage-event.php?event_id=<?php echo $row['event_id']?>&del=delete" onClick="return confirm('Are you sure you want to delete?')"class="btn btn-transparent btn-xs tooltips" tooltip-placement="top" tooltip="Remove"><i class="fa fa-times fa fa-white"></i></a>
					</div>
				</td>
			</tr>
											
			<?php 
				$cnt=$cnt+1;
			}?>
            
          </tbody>
        </table>
      </div>

    </main>
  </div>
</div>


    <script src="../css/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
