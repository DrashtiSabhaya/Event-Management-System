<?php
	include_once("header.php");
?>
<link rel="stylesheet" href="css/lightbox.css">
<link href="css/font-awesome.css" rel="stylesheet"> 
	<!-- //header -->
	<div class="banner about-bnr">
		<div class="container">
		</div>
	</div>
	
	<!-- gallery -->
	<div class="gallery-top">
		<!-- container -->
		<div class="container">
			<h2 class="w3ls-title1">Our <span>Gallery</span></h2>
			<div class="grid_3 grid_5"><br /><br/>
				<div class="but_list w3layouts">
					<h1>
						<a href="gallery.php"><span class="label label-default">Wedding</span></a>
						<a href="bday_gal.php"><span class="label label-primary">Birthday Party</span></a>
						<a href="anni_gal.php"><span class="label label-success">Anniversary</span></a>
						<a href="other_gal.php"><span class="label label-warning">Entertainment</span></a>
					</h1>
			</div></div>
			<div class="gallery-grids-top">
				<div class="gallery-grids">
				<?php
						include_once("Database/connect.php");
						$qry="select * from wedding";
						$res=mysqli_query($con,$qry)or die("can't fetch data");
						while($row=mysqli_fetch_array($res)){
				?>
				<div class="col-md-3 gallery-grid">
						<a class="example-image-link" href="images/<?php echo $row['img']; ?>" data-lightbox="example-set" data-title=""><img class="example-image" src="images/<?php echo $row['img']; ?>" alt="" height="200"/></a>
						<a href="book_wed.php?id=<?php echo $row['id']; ?>"><?php echo "<input type='button' value='BOOK NOW' class='btn my'/>" ;?></a><br />
					</div>
					<?php } ?>
					<div class="clearfix"> </div>
				</div>
				<script src="js/lightbox-plus-jquery.min.js"></script>
			</div>
			<div class="clearfix"> </div>
		</div>
		<!-- //container -->
	</div>				
	<!-- //gallery -->
	<!-- footer -->
	<?php
		include_once("footer.php");
	?>