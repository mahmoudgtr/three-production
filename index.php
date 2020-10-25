<?php 
    include "init.php";
    include 'assets/headernav.php';
    ?>

    <!-- Start Home Page -->

    <section class="main__page">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-6">
    				<div class="row">
    					<div class="col-12">
    						<div class="caption">
    							<h1><?php echo $expr['caption'] ;?></h1>
    							<p><?php echo $expr['caption-p'] ;?></p>
    						</div>
    					</div>
    					<div class="col-12">
    						<ul class="social">
    							<li><a href="#"><img src="img/linked-in.svg"></a></li>
    							<li><a href="#"><img src="img/insta.svg"></a></li>
    							<li><a href="#"><img src="img/twitter.svg"></a></li>
    						</ul>    						
    					</div>
    				</div>
    			</div>
    			<div class="col-md-6">
    				<div class="caption-img">
    					<img src="img/main-logo.svg">
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <!-- End Home Page -->

    <!-- Start About Section -->

    <section class="about__us">
    	<div class="container-fluid">
    		<div class="row">
    			<div class="col-md-6 about-p-p">
					<div class="about-p">
						<h2><?php echo $expr['about-us'] ;?></h2>
						<h1><?php echo $expr['solve'] ;?></h1>
						<p><?php echo $expr['solve-p'] ;?></p>
					</div>
    			</div>
    			<div class="col-md-6 px-0">
    				<div class="about-img">
    					<img src="img/about-us.png">
    				</div>
    			</div>
    		</div>
    	</div>
    </section>

    <!-- End About Section -->
        
<?php 
    include 'assets/footer.php';
    ?>
