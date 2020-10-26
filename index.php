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
    							<li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="23.999" viewBox="0 0 24 23.999">
  <path id="Icon_awesome-linkedin-in" data-name="Icon awesome-linkedin-in" d="M5.372,24H.4V7.977H5.372ZM2.882,5.791A2.9,2.9,0,1,1,5.763,2.882,2.906,2.906,0,0,1,2.882,5.791ZM23.995,24H19.03V16.2c0-1.859-.038-4.243-2.587-4.243-2.587,0-2.983,2.02-2.983,4.109V24H8.489V7.977h4.772v2.186h.07a5.228,5.228,0,0,1,4.708-2.588C23.074,7.575,24,10.891,24,15.2V24Z" transform="translate(0 -0.001)"/>
</svg>
</a></li>
    							<li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="23.995" viewBox="0 0 24 23.995">
  <path id="Icon_awesome-instagram" data-name="Icon awesome-instagram" d="M12,8.083a6.152,6.152,0,1,0,6.152,6.152A6.142,6.142,0,0,0,12,8.083Zm0,10.151a4,4,0,1,1,4-4A4.007,4.007,0,0,1,12,18.235Zm7.838-10.4A1.435,1.435,0,1,1,18.4,6.4,1.432,1.432,0,0,1,19.836,7.831ZM23.91,9.288A7.1,7.1,0,0,0,21.972,4.26a7.148,7.148,0,0,0-5.028-1.938c-1.981-.112-7.919-.112-9.9,0A7.137,7.137,0,0,0,2.017,4.255,7.124,7.124,0,0,0,.079,9.282c-.112,1.981-.112,7.919,0,9.9A7.1,7.1,0,0,0,2.017,24.21a7.157,7.157,0,0,0,5.028,1.938c1.981.112,7.919.112,9.9,0a7.1,7.1,0,0,0,5.028-1.938,7.148,7.148,0,0,0,1.938-5.028C24.023,17.2,24.023,11.269,23.91,9.288Zm-2.559,12.02a4.049,4.049,0,0,1-2.281,2.281c-1.579.626-5.327.482-7.073.482s-5.5.139-7.073-.482a4.049,4.049,0,0,1-2.281-2.281c-.626-1.579-.482-5.327-.482-7.073s-.139-5.5.482-7.073A4.049,4.049,0,0,1,4.925,4.881C6.5,4.255,10.252,4.4,12,4.4s5.5-.139,7.073.482a4.049,4.049,0,0,1,2.281,2.281c.626,1.579.482,5.327.482,7.073S21.978,19.734,21.351,21.308Z" transform="translate(0.005 -2.238)" fill="#2d2b2c"/>
</svg>
</a></li>
    							<li><a href="#"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="19.492" viewBox="0 0 24 19.492">
  <path id="Icon_awesome-twitter" data-name="Icon awesome-twitter" d="M21.533,8.239c.015.213.015.426.015.64A13.9,13.9,0,0,1,7.553,22.873,13.9,13.9,0,0,1,0,20.665a10.176,10.176,0,0,0,1.188.061,9.851,9.851,0,0,0,6.107-2.1,4.927,4.927,0,0,1-4.6-3.411,6.2,6.2,0,0,0,.929.076,5.2,5.2,0,0,0,1.294-.167A4.919,4.919,0,0,1,.975,10.294v-.061a4.954,4.954,0,0,0,2.223.624A4.926,4.926,0,0,1,1.675,4.279,13.982,13.982,0,0,0,11.817,9.426,5.553,5.553,0,0,1,11.7,8.3a4.923,4.923,0,0,1,8.513-3.365A9.684,9.684,0,0,0,23.33,3.746a4.906,4.906,0,0,1-2.162,2.711A9.86,9.86,0,0,0,24,5.7,10.573,10.573,0,0,1,21.533,8.239Z" transform="translate(0 -3.381)" fill="#2d2b2c"/>
</svg></a></li>
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

    <!-- Start Services Section -->

    <section class="services__">
        <div class="services-text" id="serv-backg">
            <div class="services-text-p">
                <h1><?php echo $expr['services'] ;?></h1> 
            </div>
        </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="img/design.svg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $expr['design'] ;?></h5>
                                <p class="card-text"><?php echo $expr['design-p'] ;?></p>
                                <a href="#"><?php echo $expr['read-more'] ;?></a>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-4">
                        <div class="card" >
                            <img class="card-img-top" src="img/print.svg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $expr['print'] ;?></h5>
                                <p class="card-text"><?php echo $expr['print-p'] ;?></p>
                                <a href="#"><?php echo $expr['read-more'] ;?></a>
                            </div>
                        </div> 
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="img/social.svg" alt="Card image cap">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $expr['social media'] ;?></h5>
                                <p class="card-text"><?php echo $expr['social media-p'] ;?></p>
                                <a href="#"><?php echo $expr['read-more'] ;?></a>
                            </div>
                        </div> 
                    </div>                    
                </div>
            </div>
    </section>

    <!-- End Services Section -->

    <!-- Start Clinets Section -->

    <section class="clinets__">
        <div class="services-text">
            <div class="services-text-p">
                <h1><?php echo $expr['clients'] ;?></h1> 
            </div>
        </div>
         <!-- Swiper -->
        <div class="swiper-container">
        <div class="swiper-wrapper">
          <div class="swiper-slide"><img src="img/gig.svg"></div>
          <div class="swiper-slide"><img src="img/bricks.svg"></div>
          <div class="swiper-slide"><img src="img/farah.svg"></div>
          <div class="swiper-slide"><img src="img/osssco.svg"></div>
          <div class="swiper-slide"><img src="img/aic.svg"></div>
        </div>
        <!-- Add Arrows -->
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
      </div>         
    </section>

    <!-- End Clinets Section -->

    <!-- Start footer Section -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-2"><img id="footer-i" src="img/footer.svg"></div>
                <div class="col-lg-2 my-auto">
                    <ul class="social">
                        <li><a href="#"><img src="img/linked-in.svg"></a></li>
                        <li><a href="#"><img src="img/insta.svg"></a></li>
                        <li><a href="#"><img src="img/twitter.svg"></a></li>
                    </ul> </div>
                <div class="col-lg-3"><?php echo $expr['address']; ?></div>
                <div class="col-lg-2">
                                <?php echo $expr['work-days']; ?><br/>
                                <?php echo $expr['work-h']; ?></div>
                <div class="col-lg-3">
                                <b>info@bricksintegrated.com</b><br/>
                                <?php echo $expr['tel']; ?>
                </div>
            </div>
        </div>
    </footer>
    <!-- End footer Section -->
        
<?php 
    include 'assets/footer.php';
    ?>
