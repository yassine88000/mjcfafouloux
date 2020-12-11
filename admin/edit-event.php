<!doctype html>
<?php
	include('../fichier/config.php');
	$eventid=intval($_GET['event_id']);// get doctor id
	if(isset($_POST['submit']))
	{	
		$roomName=$_POST['roomName'];
		$eventname=$_POST['eventname'];
		$eventdescription=$_POST['eventdescription'];
        $eventactive=$_POST['eventactive'];
        $eventstart_date=$_POST['eventstart_date'];
        $eventend_date=$_POST['eventend_date'];
        $eventprice=$_POST['eventprice'];
        $eventis_cancelled=$_POST['evenetis_cancelled'];
        $eventtype=$_POST['eventtype'];
        $eventimage=$_POST['eventimage'];
        $eventinfo=$_POST['eventinfo'];
        $eventis_free=$_POST['eventis_free'];
        
		$sql=mysqli_query($con,"Update events set room_id='$roomName',name='$eventname',description='$eventdescription',
				active='$eventactive',start_date='$eventstart_date',end_date='$eventstart_date',price='$eventprice',
				is_cancelled='$eventis_cancelled',type='$eventtype',image='$eventimage',info='$eventinfo',
				is_free='$eventis_free' where event_id='$eventid'");
		
		if($sql)
		{
			$msg="Event Details updated Successfully";
			echo "<script>alert('Event added Successfully');</script>";
		}
		
	}
?>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.79.0">
    <title>Admin | Edit Event Details</title>


    

    <!-- Bootstrap core CSS -->
<link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">

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
    
    
    
    
    <?php 
    	$sql=mysqli_query($con,"select * from events where event_id='$eventid'");
		while($data=mysqli_fetch_array($sql))
		{
	?>
	<h4>Modification de l'evenement: <?php echo htmlentities($data['name']);?></h4>
	<hr />
    
    
    
    	<form class="margin15top" role="form" name="adddoc" method="post" onSubmit="return valid();">
			<div class="form-group">
				<label for="roomName">
					Room
				</label>
				
				<?php
				$room_original = '';
				$room_original_req=mysqli_query($con,"select * from rooms where room_id=".$data['room_id']);
				while($row=mysqli_fetch_array($room_original_req))
				{
					$room_original = $data['name'];
				}
				?>
				
				<select name="roomName" class="form-control" required="true">
					<option value="<?php echo htmlentities($data['room_id']);?>"><?php echo htmlentities($room_original);?></option>
					<?php $ret=mysqli_query($con,"select * from rooms");
					while($row=mysqli_fetch_array($ret))
					{
					?>
					<option value="<?php echo htmlentities($row['room_id']);?>">
						<?php echo htmlentities($row['name']);?>
					</option>
					<?php } ?>
					
				</select>
			</div>

			<div class="form-group">
				<label for="eventname">
					 Name
				</label>
				<input type="text" name="eventname" class="form-control"  placeholder="Enter Event name" required="true" value="<?php echo htmlentities($data['name']);?>">
			</div>

            <div class="form-group">
                <label for="eventdescription">
                    Description
                </label>
                <textarea name="eventdescription" class="form-control"  placeholder="Enter Event Description" required="true"><?php echo htmlentities($data['description']);?></textarea>
            </div>

            <div class="form-group">
                <label for="eventactive">
                    Event active
                </label>
                <input type="text" name="eventactive" class="form-control"  placeholder="Is Event Active" required="true" value="<?php echo htmlentities($data['active']);?>">
            </div>

            <div class="form-group">
                <label for="eventstart_date">
                    Start Date Event
                </label>
                <input type="text" name="eventstart_date" class="form-control"  placeholder="Start DateEven" required="true" value="<?php echo htmlentities($data['start_date']);?>">
            </div>

            <div class="form-group">
                <label for="eventend_date">
                    End Date Event
                </label>
                <input type="text" name="eventend_date" class="form-control"  placeholder="End DateEven" required="true" value="<?php echo htmlentities($data['end_date']);?>">
            </div>

            <div class="form-group">
                <label for="eventprice">
                    Event price
                </label>
                <input type="text" name="eventprice" class="form-control"  placeholder="Event price" required="true" value="<?php echo htmlentities($data['price']);?>">
            </div>
            
            <div class="form-group">
                <label for="evenetis_cancelled">
                    Cancel Event
                </label>
                <input type="text" name="evenetis_cancelled" class="form-control"  placeholder="Cancel Event" required="true" value="<?php echo htmlentities($data['is_cancelled']);?>">
            </div>

            <div class="form-group">
                <label for="eventtype">
                    Type Event
                </label>
                <input type="text" name="eventtype" class="form-control"  placeholder="Start DateEven" required="true" value="<?php echo htmlentities($data['type']);?>">
            </div>

            <div class="form-group">
                <label for="eventimage">
                    Image Event
                </label>
                <input type="text" name="eventimage" class="form-control"  placeholder="Image Event" required="true" value="<?php echo htmlentities($data['image']);?>">
            </div>

            <div class="form-group">
                <label for="eventinfo">
                    Event Info
                </label>
                <input type="text" name="eventinfo" class="form-control"  placeholder="Event info" required="true" value="<?php echo htmlentities($data['info']);?>">
            </div>

            <div class="form-group">
                <label for="eventis_free">
                    Is Event Free
                </label>
                <input type="text" name="eventis_free" class="form-control"  placeholder="Is Event Free" required="true" value="<?php echo htmlentities($data['is_free']);?>">
            </div>
		<?php } ?>

            <button type="submit" name="submit" id="submit" class="btn btn-o btn-primary">
				Submit
			</button>
		</form>


    </main>
  </div>
</div>


    <script src="../css/bootstrap/js/bootstrap.bundle.min.js"></script>

      <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
  </body>
</html>
