<?php 
define('TITLE','Marquee Movie Database | Home');
define('PAGE','Home');
include('inc/header.php');
include('inc/banner.php');
?>

<section class="home">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2><?php echo PAGE?></h2>
			</div>
		</div>
	</div>
</section>





	



<section class="select">
	<div class="container">
		<div class="row">
			<div class="col-md-6 m-auto">
			<h3 class="text-center mb-5">Select A Movie</h3>
				<form action="view_movies.php" method="get">
					<div class="form-group">
						<select name="movies" id="" class="form-control">
							<option value="">Select Movie</option>
							<?php 
								$query = "select * from movies order by title asc";
									
								if($r = mysqli_query($dbc, $query)){
									
									while($row = mysqli_fetch_array($r)){
										
										?>
										<option value="<?php echo $row['movieID']?>"><?php echo $row['title']?></option>
										<?php
									}
								}
							
						
							?>
						</select>
					</div><!--form-group-->
					<input type="submit" value="submit" class=" text-uppercase btn btn-outline-primary">
				</form>
			</div><!--col-6-->
		</div><!--row-->
	</div><!--container-->
</section>









<?php include('inc/footer.php')?>






