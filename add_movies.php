<?php
define('PAGE','Add Movies');
define('TITLE','Marquee Box Office | Add Movies');
include('inc/header.php');
?>
<section class="intro">
	<div class="container">
		<div class="row">
			<div class="col">
				<h2><?php echo PAGE?></h2>
			</div>
		</div>
	</div>
</section>


<section class="add-cats">
	<div class="container">
		<div class="row">
			<div class="col-md-6 m-auto">
				<?php
					if($_SERVER['REQUEST_METHOD'] == 'POST'){
						$problem = false;
						
						if(!empty($_POST['title']) && !empty($_POST['release']) && is_numeric($_POST['release']) && !empty($_POST['rating'])  && !empty($_POST['box_office'])){
							$problem = false;
							$title = mysqli_real_escape_string($dbc,$_POST['title']);
							$release = $_POST['release'];
							$rating = strtoupper($_POST['rating']);
							$bo = mysqli_real_escape_string($dbc, strip_tags($_POST['box_office']));
							
							
						if(!$problem){
							
							$query = "insert into movies (title, release_year, rating, box_office) values ('$title','$release', '$rating', '$bo')";
							if(mysqli_query($dbc, $query)){
								
								?>
									<h4 class="text-capitalize bg-success p-3 mb-5 text-white text-center">movie entered successfully</h4>
								<?php
							}else{
							?>
									<h4 class="text-capitalize bg-danger p-3 mb-5 text-white text-center">The movie could not be added because: <?php echo mysqli_error($dbc)?> <br> the query being run was <?php echo $query?></h4>
							
							<?php
								
						}
							
						}	
								
						}else{
							
							$problem = true;
							?>
								<h4 class="text-capitalize bg-danger p-3 mb-5 text-white text-center">Please fill in all forms</h4>
							<?php
						}
						
					}
				?>
				<form action="" method="post">
					<div class="form-group">
						<label for="">Movie Title</label>
						<input type="text" name="title" class="form-control">
					</div><!--form-control-->
					
					<div class="form-group">
						<label for="">Release Year</label>
						<input type="text" name="release" class="form-control">
					</div><!--form-control-->
					
					<div class="form-group">
						<label for="">Rating</label>
						<input type="text" name="rating" class="form-control">
					</div><!--form-control-->
					
					<div class="form-group">
						<label for="">Box Office</label>
						<input type="text" name="box_office" class="form-control" value="$">
					</div><!--form-control-->
					
					<input type="submit" value="submit" class="btn btn-outline-primary text-uppercase">
				</form>
			</div><!--col-6-->
		</div><!--row-->
	</div><!--container-->

</section>
<?php include('inc/footer.php')?>
