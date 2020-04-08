<?php 

require_once 'app/init.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>To Do List</title>

  <!-- Core CSS -->
  <link href="style.css" rel="stylesheet">

  <!--Font Awesome-->
  <link rel="stylesheet" href="assets/fontawesome">

<body>

	<div class="container">
		<div class="inner">
			<h1>TO DO LIST.</h1>
			<div class="row">
				<div class="col-12">
					<h2 class="h2">To Do</h2>
					<h3 class="h3">Delete</h3>
					<h3 class="h3">Complete</h3>
					<?php while ($row = mysqli_fetch_array($tasks)) { ?>
						<ul class="task">
							<li>
								<p id="line-through" class="text<?php echo $row['done'] ? ' task-done' : '' ?>"><?php echo $row['tasks']; ?></p>
							</li>
							<li>		
								<a class="delete" href="index.php?del_tasks=
							<?php echo $row['id']; ?>">x</a>
							</li>	
						    <li>
								<a href="#" class="done" onclick="document.getElementById('line-through').style.'text-decoration' = 'line-through'">done</a>		
							</li>
						</ul> 
					<?php } ?>						
				</div>				
				<div class="col-12">
					<form class="form-group" method="POST" action="index.php">	
					<?php if (isset($error)) {?>
							<p><?php echo $error; ?></p>
						<?php } ?>					
 						<input type="text" name="tasks">	
						<input type="submit" name="submit">
					</form>
				</div>				
			</div>
		</div>	
	</div>	
	<script type="text/javascript">
		
	</script>

</body>
</html>