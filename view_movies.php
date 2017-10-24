<?php 
$dbc = mysqli_connect('localhost','root','thefallen_09','ultimate_mysql');
if(isset($_GET['movies']) && is_numeric($_GET['movies'])){

$query = "select title from movies where movieID={$_GET['movies']}";
if($r = mysqli_query($dbc,$query)){
	
	$row = mysqli_fetch_array($r);
	
define('TITLE',"Ultimate MySQL Course | {$row['title']}");
define('PAGE',"{$row['title']}");
	
}


}
include('inc/header.php');
			
					
	function getFunction($getValue){
		global $dbc;
		if(isset($_GET['movies']) && is_numeric($_GET['movies'])){
			$query = "select $getValue from movies where movieID={$_GET['movies']}";
			if($r = mysqli_query($dbc,$query)){


				while($row =mysqli_fetch_array($r)){

				return $row["$getValue"];
			}

		}
	}

}	



?>										
							
<section class="home">
	<div class="container">
		<div class="row">
			<div class="col">
				<?php 
					if(isset($_GET['movies']) && is_numeric($_GET['movies'])){
						
						$query = "select title from movies where movieID={$_GET['movies']}";
							if($r = mysqli_query($dbc, $query)){
								
								$row = mysqli_fetch_array($r);
								
									?>
										<h2><?php echo $row['title']?></h2>
									<?php
								}
						
							}else{
						
							?>
								<h2 class="text-danger"> the page has been accessed in error</h2>
							<?php
						}
				
				?>
			</div>
		</div>
	</div>
</section>

<secion class="synopsis">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="card mt-5">
					<div class="card-header">
						<h3>Synopsis</h3>
					</div>
					<div class="card-body">
						<?php echo getFunction('synopsis')?>
					</div><!--card-body-->
				</div><!--card-->
			</div><!--col-6-->		
			

			<div class="col-md-12 text-center">
					<div class="row mt-5">
						<div class="col-md-4">
							<div class="card">
								<div class="card-header">
									<h4>Box Office</h4>
								</div><!--card-header-->
								<div class="card-body">
									<?php echo getFunction('box_office')?>
								</div>

							</div><!--card-->
						</div><!--col-4-->		

						<div class="col-md-4 ">
							<div class="card">
								<div class="card-header">
									<h4>Release</h4>
								</div><!--card-header-->
								<div class="card-body">
									<?php echo getFunction('release_year')?>
								</div>

							</div><!--card-->
						</div><!--col-4-->	

						<div class="col-md-4 ">
							<div class="card">
								<div class="card-header">
									<h4>MPAA Rating </h4>
								</div><!--card-header-->
								<div class="card-body">
									<?php echo getFunction('rating')?>
								</div>

							</div><!--card-->
						</div><!--col-4-->
						
					

				</div><!--row-->
			</div><!--col-12-->
		</div><!--row-->
	</div><!--container-->
</secion>






<?php include('inc/footer.php')?>