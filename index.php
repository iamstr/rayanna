<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/style.css" rel="stylesheet" type="text/css"/>
    <link href="css/jquery-ui.min.css" rel="stylesheet"/>
    <link href="css/animate.css" rel="stylesheet"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="shortcut icon" href="images/logo.png">
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/jquery-ui.min.js"type="text/javascript"></script>
    <script src="js/jquery.scrollTo.min.js" type="text/javascript"></script>
    <script src="js/jquery.cycle2.js" type="text/javascript"></script>
    <script src="js/jquery.cycle2.swipe.min.js" type="text/javascript"></script>
    <script src="js/jquery.viewport.mini.js" type="text/javascript"></script>
    <script src="js/home.js" type="text/javascript"></script>
<style>
body, html {
  height: 100%;
    margin:0px;


}
    
    
    .section {
    padding: 60px 0;
}
    
    
    #footer ul.quick-links li {
    padding: 3px 0;
    -webkit-transition: .5s all ease;
    -moz-transition: .5s all ease;
    transition: .5s all ease;
}
    
    
    #footer a {
    color: #ffffff;
    text-decoration: none !important;
    background-color: transparent;
    -webkit-text-decoration-skip: objects;
}
    
    #footer ul.quick-links li a i {
    margin-right: 5px;
}
    
    
    #footer h5 {
    padding-left: 10px;
    border-left: 3px solid #eeeeee;
    padding-bottom: 6px;
    margin-bottom: 20px;
    color: #ffffff;
}
    
    
    .navbar-light .navbar-nav .nav-link {
    color: white;
}
    
    .navbar-nav .nav-link:hover {
    color: blue;
}
    
    
    body{


          /* The image used */
  background-image: url('images/oldskool-photography-unsplash.jpg');
   

  /* Full height */
  height: 100%;
    width: 100%;

  /* Create the parallax scrolling effect */
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
    }

    #navbarDropdown:hover>.dropdown-menu {
        
        
         display: block;
}
/*.dropdown>.dropdown-toggle:active {*/
/*  Without this, clicking will make it sticky*/
/*    pointer-events: none;*/
/*}*/
    
    /* CUSTOMIZE THE CAROUSEL
-------------------------------------------------- */

/* Carousel base class */
.carousel {
  margin-bottom: 4rem;
}
/* Since positioning the image, we need to help out the caption */
.carousel-caption {
  bottom: 3rem;
  z-index: 10;
}

/* Declare heights because of positioning of img element */
.carousel-item {
  height: 32rem;
}
.carousel-item > img {
  position: absolute;
  top: 0;
  left: 0;
  min-width: 100%;
  height: 32rem;
}


    .shadow{
        
         text-shadow: 2px 2px 8px black;
  color:white;
    }
    
    
    .sectionWrapper {
     background: rgba(1, 1, 1,0.7);
/*        	#2962A9*/
    padding: 10px;
    width: 100%;
    box-sizing: border-box;
    color: #fff;
    font-size: 16px;
    position: relative;
    max-width: 1200px;
    margin: 0 auto 40px auto;
}



    .sectionWrapper h1 {
    font-size: 28px;
    color: #fff;
    text-transform: uppercase;
    border-bottom: solid 3px #FAD84A;
    margin: 5px 0 10px 0;
    letter-spacing: 3px;
    padding-bottom: 5px;
    font-weight: normal;
}


    .tabs ul {
    list-style-image: url(images/list-style.png);
}



   @media only screen and (min-device-width: 768px)
.contentWrapper {
    padding-right: 320px;
    box-sizing: border-box;
    width: 100%;
}


</style>
</head>
<body>

  
    <header class="fixed-top mb-5">
       
       
        
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color:#C52D23!important;color:#fff;">
  <a class="navbar-brand" href="#"><img src="images/logo.png" width="80px" height="80px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <li class="nav-item active">
        <a class="nav-link" href="#home">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#services">Services</a>
      </li>
     
      <li class="nav-item">
        <a class="nav-link " href="#book" tabindex="-1" aria-disabled="true">Booking Request</a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link " href="#book" tabindex="-1" aria-disabled="true">Online Payment</a>
      </li>
      
      
      
      <li class="nav-item">
        <a class="nav-link " href="#aboutus" tabindex="-1" aria-disabled="true">Photo Gallery</a>
      </li>
      
        <li class="nav-item">
        <a class="nav-link " href="#book" tabindex="-1" aria-disabled="true">Car sales</a>
      </li>
      
       <li class="nav-item">
        <a class="nav-link" href="#contacts">Contact us</a>
        
      </li>
      
      
     
    </ul>
    
  </div>
</nav>
    </header>
  
<section id="home" class="my-5">
   
   <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class=""></li>
      <li data-target="#myCarousel" data-slide-to="1" class="active"></li>
      
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item">
       <img src="images/rayan1.jpg" alt=""  style="object-fit:fit;height:1000px;width:100%;">
        <div class="container">
          <div class="carousel-caption text-left">
            <h1 class="shadow">Creating a Higher Standard..</h1>
<!--            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item active">
        <img src="images/rayan2.jpg" alt="" style="object-fit:fit;height:1000px;width:100%;">
        <div class="container">
          <div class="carousel-caption">
            <h1 class="shadow">Eye it – try it – buy it!</h1>
<!--            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>-->
            <p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
          </div>
        </div>
      </div>
      
    </div>
    <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
    
</section>


<section id="services">
    <div class="sectionWrapper clearfix">

        <div class="contentWrapper">
            <div class="tabs " id="serviceTab">
                <h1>Services</h1>
                Rayan Auto Garage  technicians provide a full and comprehensive body work service on all makes of vehicles. Our body work specialties include but are not limited to: -
                <ul>
                   <li>Oil &amp; Break Checks.</li>
                    <li>Full insurance estimation.</li>
                    <li>Solid colour and metallic finishes.</li>
                    <li>Blending and colour matching of individual doors and panels.</li>
                    <li>Vehicle restoration to original condition.</li>
                    
                    <li>Rust removal, welding and scratch removal.</li>
                    <li>Tires Fix &amp; Replacements.</li>
                    <li>Under seal and water proofing.</li>
                    <li>Vehicle Maintenance.</li>
                    
                </ul>
            </div>

            <div class="tabs" id="bodyShopTab">
                <h1>BODY SHOP</h1>
                <p>We transform your vehicle from a car to your vision.  Our committed and dedicated staff put in the time just for our clients to be satisfied.</p>
            </div>

            <div class="tabs hide" id="accidentRepairsTab">
                <h1>ACCIDENT REPAIRS</h1>
                <p>One man's garbage is another man's treasure. We pride in restoration of badly damaged vehicles and giving them a new lease of life.</p>
               <p>Accident repairs has been our core business slightly after inception. Through the years, we've learnt a lot perfecting our garage process and quality of work.</p>
            </div>

            <div class="tabs hide" id="maintenanceTab">
                <h1>SERVICE</h1>
                <p>Regular servicing can drastically help contribute towards extending the life and performance of your vehicle.</p>

                <p>We can help you regain that great drive and performance that your vehicle previously had by carrying out essential and non-essential maintenance services. Our garage workshop contains the latest diagnostic equipment and technical data to ensure any assessments will be extensive and therefore reliable.
                    </p><p>With experienced mechanics who have successfully repaired all manner of cars over the years, you can be sure you’ve chosen the right team when you come to Rayan Auto Garage for all your maintenance services.</p>
                <p>
                    Our service points are:
                </p>
                    <ul>
                    <li>All car'(s) Spare Parts and Replacements</li>
                    <li>External light check</li>
                    <li>Wiper blade and washers check</li>
                    <li>Air filter replacement</li>
                    <li>Visual brake inspection</li>
                    <li>Fuel filter replacement (if required)</li>
                    <li>Oil and filter replacement</li>
                    <li>Spark plug replacement</li>
                    <li>Suspension and steering visual inspection</li>
                    <li>Full brake inspection (wheels removed)</li>
                    <li>Gearbox level check</li>
                    <li>Rear brake drums removed if fitted</li>
                    <li>Vehicle body checks</li>
                    <li>Pollen filter replacement</li>
                    <li>Screen wash fluid added to bottle</li>
                    <li>Tyres and tyre pressure checked</li>
                    <li> All fluid levels checked/topped up</li>
                </ul>


            </div>

            <div class="tabs hide" id="interiorTab">
                <h1>INTERIOR WORK</h1>
                <p> For extraordinary upholstery craftsmanship for all your interior needs, We got it covered! Completely restore your vehicle or make it even better.  We aim to give your vehicles interior repairs and upgrades with attention to detail by our skilled craftsmen.  Our auto upholstery service includes:
                </p><ul>
                    <li>Convertible Tops</li>
                    <li>Seat Covers</li>
                    <li>Repair Burnholes</li>
                    <li>Carpet/Door Panels</li>
                    <li>Headliners</li>
                    <li>Foam Repairs</li>
                    <li>Vinyl Tops</li>
                    
                    <li>Leather Seat Covers</li>
                    <li>Tonneau Covers</li>
                    <li>Custom Covers</li>
                </ul>
                <p></p>
            </div>


        </div>
        <select class="selectMenu" id="ui-id-1" style="display: none;">
            <option value="serviceTab">SERVICES</option>
            <option value="bodyShopTab">BODY SHOP</option>
            <option value="accidentRepairsTab">ACCIDENT REPAIRS</option>
            <option value="maintenanceTab">MAINTENANCE</option>
            <option value="interiorTab">UPHOLSTERY</option>
        </select><span tabindex="0" id="ui-id-1-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-1-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget hide"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">SERVICES</span></span>
        <div class="iconNavigationWrapper">
            <table>
                <tbody><tr>
                    <td tab="bodyShopTab" class="sectionTabs active">BODYSHOP</td>
                    <td tab="accidentRepairsTab" class="sectionTabs">REPAIRS</td>
                    <td tab="maintenanceTab" class="sectionTabs">MAINTENANCE</td>
                </tr>
                <tr>
                    <td tab="interiorTab" class="sectionTabs">UPHOLSTERY</td>
                    <td class="noNAv">&nbsp;</td>
                    <td tab="serviceTab" class="sectionTabs">SERVICES</td>
                </tr>
            </tbody></table>
        </div>
    </div>
</section>




<section id="aboutus">
    <div class="sectionWrapper clearfix">

        <div class="contentWrapper">
            <div class="tabs" id="abouttab">
                <h1>About Us</h1>
                <p>Rayan Auto Garage Auto was established in 2015. </p>

                <table id="aboutTable">
                    <tbody><tr>
                        <td><img src="images/mission.png">
                        <p><strong>Mission</strong></p>
                        </td>
                        <td><img src="images/vision.png">
                            <p><strong>Vision</strong></p>
                        </td>

                    </tr>
                    <tr>
                        <td>To retain our customers by giving them a world class service </td>
                        <td>To the best and most preferred locally established auto garage in Kenya</td>
                    </tr>
                </tbody></table>

                <p>We focus on exceeding our clients’ expectations through the quality of service we provide. Our Core values are:</p>
                <ul>
                    <li>Integrity</li>
                    <li>Hard work</li>
                    <li>Meticulosity</li>
                    <li>Quality - Above &amp; beyond expectations</li>
                    <li>Flexibility</li>
                    <li>Fun</li>
                    <li>Passionate</li>
                    <li>Accountability</li>
                </ul>

                <p>At Rayan Auto Garage Auto we pride ourselves on providing not only the highest quality service you can find, but also at prices that are superbly competitive.  We are known for providing consistent, dependable quality to our customers and aim for every job to be right first time! We know there are many body shops out there and the choice can be sometimes endless so drop by our shop and try us out ... when your car is repaired by us you will not be disappointed.</p>
            </div>

            <div class="tabs hide" id="facilitiesTab">
                <h1>Customer Facilities</h1>
                <p><strong>Reception</strong></p>
                <p>We have modern and spacious reception area set aside to receive customers and conduct transactions. The reception is clearly signed externally and maintained in a clean and tidy condition for customers to wait in comfort.  </p>
                <p><strong>Lounge</strong></p>
                <p>We also have a luxurious lounge for our customers who are waiting for longer times.</p>
                <p>The lounge has comfortable recliners and a huge wall mounted tv with fully featured satellite channels for your entertainment.  Take advantage of our high speed wi-fi internet to respond to your business emails or surf the web at your leisure.</p>
            </div>


            <div class="tabs hide" id="whyusTab">
                <h1>Why us?</h1>
                <ul>
                    <li>
                        <img src="images/experience.png">
                        <strong>Over 10 years experience</strong>We operated Rayan  auto since 2015<p></p>
                    </li>
                    <li>
                        <img src="images/staff.png">
                        <strong>20+ Staff</strong>We have a variety of technicians and staff with many years of experience <p></p>
                    </li>
                    <li>
                        <img src="images/lounge.png">
                        <strong>Comfortable Facilities</strong>Enjoy our comfortable reception and lounge area as you wait<p></p>
                    </li>

                    <li>
                        <img src="images/best.png">
                        <strong>Professionalism</strong>Rayan auto garage observes best practices and safety precautions<p></p>
                    </li>

                    <li>
                        <img src="images/members.png">
                        <strong>Industry Association</strong>We are members of Kenya Motor Repairers Association (KEMRA) and AA Kenya<p></p>
                    </li>

                    <li>
                        <img src="images/approved.png">
                        <strong>Insurance Panel Approval</strong>We have been approved in multiple panels of reputable insurance companies in Kenya<p></p>
                    </li>
                </ul>

            </div>


        </div>
        <select class="selectMenu" id="ui-id-2" style="display: none;">
            <option value="abouttab">ABOUT US</option>
            <option value="facilitiesTab">FACILITIES</option>
            <option value="whyusTab">WHY US</option>

        </select><span tabindex="0" id="ui-id-2-button" role="combobox" aria-expanded="false" aria-autocomplete="list" aria-owns="ui-id-2-menu" aria-haspopup="true" class="ui-selectmenu-button ui-selectmenu-button-closed ui-corner-all ui-button ui-widget hide"><span class="ui-selectmenu-icon ui-icon ui-icon-triangle-1-s"></span><span class="ui-selectmenu-text">ABOUT US</span></span>
        <div class="iconNavigationWrapper">
            <table>
                <tbody><tr>
                    <td tab="facilitiesTab" class="sectionTabs">FACILITIES</td>
                    <td tab="whyusTab" class="sectionTabs">WHY US</td>
                    <td class="noNAv">&nbsp;</td>
                </tr>
                <tr>
                    <td class="noNAv">&nbsp;</td>
                    <td class="noNAv">&nbsp;</td>
                    <td tab="abouttab" class="sectionTabs active">ABOUT US</td>
                </tr>
            </tbody></table>
        </div>
    </div>
</section>




<section id="contacts">
    <div class="sectionWrapper ">
        <h1>Contacts</h1>
        <table class="contacttable ">
            <tbody>
            <tr>
                <td>Physical Address</td>
                <td>NCPB Godown, <br> Lunga Lunga Road,Industrial Area</td>
            </tr>
            <tr>
                <td>Postal Address</td>
                <td>PO Box 64360-00620<br> Nairobi, Kenya</td>
            </tr>
            <tr>
                <td>Telephone</td>
                <td>+254 20 237 8358, <br> +254 716 723 064</td>
            </tr>
            <tr>
                <td>Email</td>
                <td>info@rayana.com,</td>
            </tr>
            <tr>
                <td id="open">Open &amp; Closing Hours </td>
                <td>Mon to Fri: 0800 - 1800 Hrs, <br> Saturday: 0800 - 1500 Hrs, <br> Closed on Sundays &amp; Public Holidays </td>
                
            </tr>

            </tbody>
        </table>
        <div id="maps" class="">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.782700775517!2d36.88423971472414!3d-1.3054810990478327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f13c97b86dd57%3A0xdef54c1c496f3729!2sNCPB!5e0!3m2!1sen!2ske!4v1548271656391" width="600" height="380" frameborder="0"  allowfullscreen></iframe>
        </div>
    </div>
</section>

<section id="book my-5 py-5" style="background: rgba(1 , 1 , 1 ,0.7);color:#fff;">
    
    <div class="lipa-logo mx-auto" style="width:200px;" ><img src="images/mpesa.png" alt="" style="width:300px;height:100px;object-fit:scale;"></div>
    
    
        <div class="mx-auto" style="width:400px;" id="book">
            <form action="vendor/send.php" method="post">
          <div class="row">
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Name" required="" name="contact-name">
              </div>
            </div>
            
            <div class="col-lg-6">
              <div class="form-group">
                
      <select class="custom-select mt-2" id="inlineFormCustomSelect" name="service">
        <option selected>Choose Service</option>
        <option value="Booking Request">Booking Request</option>
        <option value="Online payment">Online payment</option>
        <option value="Car Sales">Car Sales</option>
      </select>
              </div>
            </div>
            
            <div class="col-lg-6">
              <div class="form-group">
                <input type="tel" class="form-control mt-2" placeholder="Mobile number" name="contact-number">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="email" class="form-control mt-2" placeholder="Email" name="contact-email" required="">
              </div>
            </div>
            
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Car Registration number" name="registration-number">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Car Make e.g toyota , volvo" name="car-make" required="">
              </div>
            </div>
            <div class="col-12">
              <div class="form-group">
                <input type="text" class="form-control mt-2" placeholder="Car Make e.g vitz" name="car-make">
              </div>
            </div>
            
            <div class="col-12">
              <div class="form-group">
                <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Message" rows="3" required="" name="contact-content"></textarea>
              </div>
            </div>
            
            <div class="col-12 py-3" >
              <button class="btn btn-light btn-block" type="submit" name="contact">Submit</button>
            </div>
          </div>
        </form>
            
        </div>
    
</section>

<section id="footer" class="section mt-3" style="background: rgba(197 , 45 , 35 ,0.7);color:#fff;">
		<div class="container">
			<div class="row text-center text-xs-center text-sm-left text-md-left ">
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Rayanna Auto Garage</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="#aboutus" style="color:#fff;"><i class="fa fa-angle-double-right"></i>About Us</a></li>
						<li><a href="#book"  style="color:#fff;"><i class="fa fa-angle-double-right"></i>Online Payment</a></li>
						<li><a href="#book"  style="color:#fff;"><i class="fa fa-angle-double-right"></i>Booking Request</a></li>
						<li><a href="#book"  style="color:#fff;"><i class="fa fa-angle-double-right"></i>Photo Gallery</a></li>
						<li><a href="#book"  style="color:#fff;"><i class="fa fa-angle-double-right"></i>Car Sales</a></li>
					</ul>
				</div>
				
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Rayanna Auto Garage</h5>
					<ul class="list-unstyled quick-links">
						<li><a href="javascript:void();" style="color:#fff;"><i class="fa fa-angle-double-right"></i>Policies</a></li>
						<li><a href="javascript:void();"  style="color:#fff;"><i class="fa fa-angle-double-right"></i>FAQ</a></li>
						<li><a href="#open"  style="color:#fff;"><i class="fa fa-angle-double-right"></i>Opening Times</a></li>
						<li><a href="#aboutus "  style="color:#fff;"><i class="fa fa-angle-double-right"></i>About Us</a></li>
						<li><a href="#aboutus"  style="color:#fff;"><i class="fa fa-angle-double-right"></i>Contact Us</a></li>
					</ul>
				</div>
				
				
				
				<div class="col-xs-12 col-sm-4 col-md-4">
					<h5>Sign Up for Newsletter</h5>
					<form action="#" id="newsletter-form">
                <div class="input-group mb-3 mx-0">
                  <input type="email" placeholder="Your Email Address" aria-label="Your Email Address" class="form-control  border-secondary border-right-0">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-secondary border-left-0"> <i class="fa fa-paper-plane text-lg "></i></button>
                  </div>
                </div>
              </form>
					
				</div>
				
				
				
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-5">
					<ul class="list-unstyled list-inline social text-center">
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-facebook"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-twitter"></i></a></li>
						<li class="list-inline-item"><a href="javascript:void();"><i class="fa fa-instagram"></i></a></li>
						
						<li class="list-inline-item"><a href="javascript:void();" target="_blank"><i class="fa fa-envelope"></i></a></li>
					</ul>
				</div>
				<hr>
			</div>	
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center text-white">
					
					<p class="h6">&copy; 2019 All rights reserved. Terms and condition apply</p>
				</div>
				<hr>
			</div>	
		</div>
		
		
		
		
		
		
		
	</section>



<!--<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>

</body>
</html>
