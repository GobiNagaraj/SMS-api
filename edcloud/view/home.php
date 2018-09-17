<?php 
	include_once 'layout/header.php';
	 ?>

<div class="page-container">	
   <div class="left-content">
	   <div class="mother-grid-inner">
            <!--header start here-->
				<?php include_once 'layout/head_bar.php'; ?>
<!--heder end here-->
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">
<!--main updates updates-->
	 <div class="market-updates">
		<?php 
		if (isset($_GET['status'])) {
			switch ($_GET['status']) {
				case 'Success':
					echo "<div class='alert alert-success'><span>Success!</span>Data Added.</div>";
					break;
				
				case 'Error':
					echo "<div class='alert alert-danger'><span>Sorry!</span>Please check Email.</div>";
					break;
			}
		}

		 ?>	
		   <div class="clearfix"> </div>
	 </div>
<!--main updates end here-->

<!--climate start here-->
<div class="climate">
	<div class="col-md-4 climate-grids">
		<div class="climate-grid1">
			<div class="climate-gd1-top">
				<div class="col-md-6 climate-gd1top-left">
				<?php 
					$dateTime = new DateTime('now', new DateTimeZone('Asia/Kolkata')); 
				?>
					<h4><?php echo $dateTime->format("d-M-Y"); ?></h4>
					<h3><?php echo $dateTime->format("H:i"); ?><span class="timein-pms"><?php echo $dateTime->format("A")?></span></h3>				
					<p>Humidity:</p>					
					<p>Sunset:</p>
					<p>Sunrise:</p>
				</div>
				<div class="col-md-6 climate-gd1top-right">
					  <span class="clime-icon"> 
					  	<figure class="icons">
								<canvas id="partly-cloudy-day" width="64" height="64">
								</canvas>
							</figure>
						<script>
							 var icons = new Skycons({"color": "#fff"}),
								  list  = [
									"clear-night", "partly-cloudy-day",
									"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
									"fog"
								  ],
								  i;

							  for(i = list.length; i--; )
								icons.set(list[i], list[i]);

							  icons.play();
						</script>					  
				   </span>					
					  <p>88%</p>					
					  <p>5:40PM</p>
					   <p>6:30AM</p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="climate-gd1-bottom">
				<div class="col-md-4 cloudy1">
						<h4>Hongkong</h4>
						  <figure class="icons">
							<canvas id="sleet" width="58" height="58">
							</canvas>
					       </figure>
					       <script>
								 var icons = new Skycons({"color": "#fff"}),
									  list  = [
										"clear-night", "clear-day",
										"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
										"fog"
									  ],
									  i;
	
								  for(i = list.length; i--; )
									icons.set(list[i], list[i]);
	
								  icons.play();
							</script>
						<h3>10c</h3>
					</div>
					<div class="col-md-4 cloudy1">
						<h4>UK</h4>
						<figure class="icons">
					<canvas id="cloudy" width="58" height="58"></canvas>
				</figure>					
					<script>
							 var icons = new Skycons({"color": "#fff"}),
								  list  = [
									"clear-night", "cloudy",
									"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
									"fog"
								  ],
								  i;

							  for(i = list.length; i--; )
								icons.set(list[i], list[i]);

							  icons.play();
						</script>
						<h3>6c</h3>
					</div>
					<div class="col-md-4 cloudy1">
						<h4>USA</h4>
						<figure class="icons">
							<canvas id="snow" width="58" height="58">
							</canvas>
						</figure>
				        <script>
							 var icons = new Skycons({"color": "#fff"}),
								  list  = [
									"clear-night", "clear-day",
									"partly-cloudy-night", "cloudy", "rain", "sleet", "snow", "wind",
									"fog"
								  ],
								  i;

							  for(i = list.length; i--; )
								icons.set(list[i], list[i]);

							  icons.play();
						</script>
						<h3>10c</h3>
					</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>

	<div class="col-md-8 climate-grids">
		<form action="../controller/home_controller.php" method="POST"> 

		<?php
			//whether ip is from share internet
			if (!empty($_SERVER['HTTP_CLIENT_IP']))   
			  {
			    $ip_address = $_SERVER['HTTP_CLIENT_IP'];
			  }
			//whether ip is from proxy
			elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))  
			  {
			    $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];
			  }
			//whether ip is from remote address
			else
			  {
			    $ip_address = $_SERVER['REMOTE_ADDR'];
			  }
			//echo $ip_address;
			echo '<input type="hidden" class="form-control" name="get_id" value='.$ip_address.'>';
		?>

			<div class="form-group">
				<label> Registered Date </label>
				<?php 
					$dateTime1 = new DateTime('now', new DateTimeZone('Asia/Kolkata')); 
					$getDate = $dateTime1->format("d-M-Y H:i A");
				?>
				<div class="col-sm-4">
					<input type="text" name="date" class="form-control" value="<?php echo $getDate; ?>" readonly>	
				</div>
			</div>
			<div class="form-group">
				<label> Name </label>
				<div class="col-sm-4">
					<input type="text" name="name" class="form-control" id="user_name" required>	
				</div>
			</div>
			<div class="form-group">
				<label> Number </label>
				<div class="col-sm-4">
					<input type="text" name="number" class="form-control" id="mobile_number" required>	
				</div>
			</div>
			<div class="form-group">
				<label> Email </label>
				<div class="col-sm-4">
					<input type="email" name="email" class="form-control" id="email_id" required>	
				</div>
			</div>
			<div class="form-group">
				<label> Address </label>
				<div class="col-sm-4">
					<textarea name="address" class="form-control" rows="5" cols="5" id="address" required></textarea>
				</div>
			</div>
			<div class="form-group">
				<input type="submit" name="submit" value="Save" class="btn btn-success">
				<input type="reset" name="reset" value="Reset" class="btn btn-primary">
			</div>
		</form>
	</div>
	<div class="clearfix"> </div>
</div>
<!--climate end here-->
</div>
<!--inner block end here-->
<?php  include_once 'layout/copyright.php'; ?>
</div>
</div>
<!--slider menu-->
    <?php include_once 'layout/sidebar.php'; ?>
<!--slide bar menu end here-->

<?php  include_once 'layout/footer.php'; ?>
                    