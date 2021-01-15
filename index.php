<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Template Sample </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 
   <link rel="stylesheet" href="circle.css">
 
  <style>
  body {
    font: 400 15px/1.8 Lato, sans-serif;
    color: #777;
  }
  h3, h4 {
    margin: 10px 0 30px 0;
    letter-spacing: 10px;      
    font-size: 20px;
    color: #3399CC;
  }
  logo {
  font-size:16px;
  font-family:Georgia, "Times New Roman", Times, serif;
  
  }
  .container {
    padding: 80px 120px;
  }
  .vision {
    border: 10px solid transparent;
    margin-bottom: 25px;
    width: 100%;
    height: 80%;
    opacity: 0.7;
  }
  .vision:hover {
    border-color: #f1f1f1;
  }
  .carousel-inner img {
    width: 100%; /* Set width to 100% */
    margin: auto;
  }
  .carousel-caption {
	padding-bottom: 21em;
	color: #fff !important;
    letter-spacing: 10px;      
	text-align: center;
    vertical-align: middle;
  }
  .carousel-caption h3 {
    font-size: 60px;
	color: #fff;
 }
   .carousel-caption p {
    font-size: 20px;
 }

  @media (max-width: 600px) {
    .carousel-caption {
      display: none; /* Hide the carousel text when the screen is less than 600 pixels wide */
    }
  }
  .bg-1 {
    background: #2d2d30;
    color: #bdbdbd;
  }
  .bg-1 h3 {color: #3399CC;}
  .bg-1 p {font-style: italic;}
  .list-group-item:first-child {
    border-top-right-radius: 0;
    border-top-left-radius: 0;
  }
  .list-group-item:last-child {
    border-bottom-right-radius: 0;
    border-bottom-left-radius: 0;
  }
  .thumbnail {
    padding: 0 0 15px 0;
    border: none;
    border-radius: 0;
  }
  .thumbnail p {
    margin-top: 15px;
    color: #555;
  }
  
  .btn {
    padding: 10px 20px;
    background-color: #333;
    color: #f1f1f1;
    border-radius: 0;
    transition: .2s;
  }
  .btn:hover, .btn:focus {
    border: 1px solid #333;
    background-color: #fff;
    color: #000;
  }
  .modal-header, h4, .close {
    background-color: #333;
    color: #fff !important;
    text-align: center;
    font-size: 30px;
  }
  .modal-header, .modal-body {
    padding: 40px 50px;
  }
  .nav-tabs li a {
    color: #777;
  }
  #googleMap {
    width: 100%;
    height: 400px;
    -webkit-filter: grayscale(100%);
    filter: grayscale(100%);
  }  
  .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
  footer {
    background-color: #2d2d30;
    color: #f5f5f5;
    padding: 32px;
  }
  footer a {
    color: #f5f5f5;
  }
  footer a:hover {
    color: #777;
    text-decoration: none;
  }  
  
  .form-control {
    border-radius: 0;
  }
  textarea {
    resize: none;
  }
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>

        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand logo" href="#myPage">Prajna Soft</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#myPage">HOME</a></li>
        <li><a href="#about">ABOUT US</a></li>
        <li><a href="#products">PRODUCTS</a></li>
        <li><a href="#contact">CONTACT</a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#">OUR SERVICES
          <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Web Development</a></li>
            <li><a href="#">Mobile Applications</a></li>
          </ul>
        </li>
        <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
      </ul>
    </div>
  </div>
</nav>

<div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img  src="1200X800.jpeg" alt="New York" width="1200" height="400">
        <div class="carousel-caption">
          <h3>HARVESTING</h3>
          <p>Cultivating New Crops To Make Farmers Increase Profits</p>
        </div>      
      </div>

      <div class="item">
        <img src="1200X800.jpeg" alt="Chicago" width="1200" height="400">
        <div class="carousel-caption">
          <h3>Farming</h3>
          <p>Cultivating New Crops To Make Farmers Increase Profits.</p>
        </div>      
      </div>
    
      <div class="item">
        <img src="field.jpeg" alt="Los Angeles" width="1200" height="400">
        <div class="carousel-caption">
          <h3>CULTIVATING</h3>
          <p>Cultivating New Crops To Make Farmers Increase Profits</p>
        </div>      
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
</div>

<!-- Container (The AboutUs Section) -->
<div id="about" class="container text-justify">
  <h4>PRAJNA SOFT CREATIONS</h4>
  <p>Founded in 2020, Prajna Soft Creations is an Indian technology  company providing AI solutions to industries including Agriculture.

Dedicated team of professionals to raise the standard of farmers by using enhanced technology in developing their business.Every human on earth depends directly or indirectly on farming for their survival. The drastic increase in global population requires more better and smart farming which enhance the yield quality and profit of the farmers. We have a team of professionals who dream to help out the farmers catch up with this challenge using software integrated with latest technology to increase the efficiency, yield and productivity of quality food, thus making the farming business more profitable.
</p>
  <br>
  <div class="row">
    <div class="col-sm-4">
	
      <p class="text-center"><strong><br><br>Mission<br><br>
We cultivate innovative technology solutions to the field that give birth to a healthier generation.</strong></p><br>
      
      
    </div>
	<div class="col-sm-4">
	<a href="#demo2" data-toggle="collapse">
        <img src="logo.jpeg" class="rounded-circle" alt="Random Name">
      </a>
	</div>
    <div class="col-sm-4">
      <p class="text-center"><strong><br><br>Vision<br><br>
 Better Food for healthier life.</strong></p><br>
      
     </div>
	 
  </div>
</div>

<!-- Container (TOUR Section) -->
<div id="products" class="bg-1">
  <div class="container">
    <h3 class="text-center">OUR PRODUCTS</h3>
    <p class="text-justify">Our Products embraces a broad all-inclusive category of products related to AGRICULTURE. It includes a comprehensive range of raw and finished goods under the classifications of plants, animals and other life forms. The term 'agro' has stemmed from the Greek word 'agros' meaning field, which has led to its current usage meaning anything that falls under the 'agricultural' category.</p>
    <div class="row text-center">
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="logo.jpeg" alt="Paris" width="400" height="300">
          <p><strong>Croptracker</strong></p>
          <p>At Croptracker, our mission is to make crop production more profitable, efficient, and safe. Track and record nearly everything in your farm - including  harvests, packing materials, storage, shipping, and teams. </p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Now</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="logo.jpeg" alt="New York" width="400" height="300">
          <p><strong>NAVFARM</strong></p>
          <p>An application that manage Farms and livestocks and contributes to manage the bookkeeping, food processing and its distribution, production along with critical report in scheduled manner.</p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Now</button>
        </div>
      </div>
      <div class="col-sm-4">
        <div class="thumbnail">
          <img src="logo.jpeg" alt="San Francisco" width="400" height="300">
          <p><strong>Farm brite</strong></p>
          <p>Farmbrite is a complete farm and livestock record keeping & management system. Designed to help you run a more efficient, productive and profitable agricultural business.<br></p>
          <button class="btn" data-toggle="modal" data-target="#myModal">Buy Now</button>
        </div>
      </div>
    </div>
  </div>
  
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">�</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Products & Service</h4>
        </div>
        <div class="modal-body">
		<p>
		At Croptracker, our mission is to make crop production more profitable, efficient, and safe.  Since 2006 we have helped growers, packers, cooperations, and associations of all sizes to maintain accurate records, connect their teams, and optimize their operations through our integrated software and consulting services.  Track and record nearly everything in your farm - including your sprays, harvests, packing materials, storage, shipping, and teams.  Over 50 reports make your audits painless and give you a bird's eye view of your operation, allowing you to identify and resolve problems quickly.  With Croptracker, you can spend less time in your office and more time on your farm.
		</p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal">
            <span class="glyphicon glyphicon-remove"></span> Cancel
          </button>
          <p>Need <a href="#">help?</a></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Container (Contact Section) -->
<div id="contact" class="container">
  <h3 class="text-center">Contact</h3>
  <p class="text-center"><em>We love Your Queries!</em></p>

  <div class="row">
    <div class="col-md-4">
      <p>Contact ?</p>
      <p><span class="glyphicon glyphicon-map-marker"></span>India</p>
      <p><span class="glyphicon glyphicon-phone"></span>Phone: +00 1234567890</p>
      <p><span class="glyphicon glyphicon-envelope"></span>Email: mail@mail.com</p>
    </div>
    <div class="col-md-8">
      <div class="row">
        <div class="col-sm-6 form-group">
          <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
        </div>
        <div class="col-sm-6 form-group">
          <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
        </div>
      </div>
      <textarea class="form-control" id="comments" name="comments" placeholder="Place Your Query" rows="5"></textarea>
      <br>
      <div class="row">
        <div class="col-md-12 form-group">
          <button class="btn pull-right" type="submit">Send</button>
        </div>
      </div>
    </div>
<!-- Image of location/map -->
	<div id="map" class="col-md-8">
<img src="pkd-iit.jpg" class="img-responsive" style="width:100%; height:100%;" >
</div>

  </div>
</div>

<!-- Footer -->
<footer class="text-center">
  <a class="up-arrow" href="#myPage" data-toggle="tooltip" title="TO TOP">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <p>A  Sample Bootstrap Template</p> 
</footer>

<script>
$(document).ready(function(){
  // Initialize Tooltip
  $('[data-toggle="tooltip"]').tooltip(); 
  
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
    } // End if
  });
})
</script>

</body>
</html>
