<?php
/*

* Template Name: My Home
*/ ;?>
<!DOCTYPE HTML>
<html lang="en">
	<head>
		<title>Smalltown Coffee - Hand Roasted in NWI</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="stylesheet" type="text/css" href="https://smalltown.coffee/landing/assets/css/style.css">

		<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
	</head>
	<body>
    <header>
      <div class="container">
        <div class="logo">
    			<a href="https://smalltown.coffee/">
            <img src="https://smalltown.coffee/landing/assets/images/logo-black.png" alt="Smalltown Coffee" />
          </a>
    		</div>
        <div class="social">
          <ul class="right-nav">
            <li>Hand roasted in NWI</li>
            <li><a class="social-link" href="https://www.facebook.com/SMALLTOWNCOFFEECO"><i class="fa fa-facebook-square"></i></a></li>
            <li><a class="social-link" href="https://www.instagram.com/smalltowncoffeeco/"><i class="fa fa-instagram"></i></a></li>
            <li><a class="social-link" href="https://twitter.com/SMTOWNCOFFEE"><i class="fa fa-twitter-square"></i></a></li>
          </ul>
        </div>
        <a class="hamburger">
          <div class="bar"></div>
        </a>
      </div>
      <div class="clearfix"></div>
    </header>
    <div class="mobile-nav">
      <div class="menu">
        <a class="hamburger">
  				<div class="bar"></div>
  			</a>
      </div>
    </div>
    <div class="mobile__menu">
      <div class="container">
        <div class="logo">
          <a href="index.html">
            <img src="https://smalltown.coffee/landing/assets/images/logo-white.png" alt="Smalltown Coffee" />
          </a>
        </div>
        <p>Hand roasted in NWI</p>
        <a href="https://smalltown.coffee/shop-coffee/" class="btn" target="_blank">Buy Coffee</a>
        <a href="mailto:annette@smalltown.com" class="btn">Contact Us</a>
        <ul>
					<li><a class="social-link" href="https://www.facebook.com/SMALLTOWNCOFFEECO"><i class="fa fa-facebook-square"></i></a></li>
					<li><a class="social-link" href="https://www.instagram.com/smalltowncoffeeco/"><i class="fa fa-instagram"></i></a></li>
					<li><a class="social-link" href="https://twitter.com/SMTOWNCOFFEE"><i class="fa fa-twitter-square"></i></a></li>
				</ul>
        <img class="logomark" src="https://smalltown.coffee/landing/https://smalltown.coffee/landing/assets/images/logomark.png" alt="Smalltown Coffee">
      </div>
    </div>

    <!-- MAIN CONTENT -->
    <main>
      <div class="container">
        <div class="row">
          <div class="hero">
            <div class="hero__right">
							<div id="slider">
								<div class="autoplay">
									<div class="slider">
										<div class="image-1"></div>
						      </div>
									<div class="slider">
										<div class="image-1"></div>
						      </div>
									<div class="slider">
										<div class="image-1"></div>
						      </div>
								</div>
							</div>
            </div>
            <div class="hero__left">
              <div class="hero__text">
                <h1>Skillfully Roasted. Community Focused.</h1>
                <p>Smalltown Coffee Co. exists to provide exceptional coffee in a way that honors and invests in people on both sides of the cup.</p>
                <p class="tagline">New site coming soon</p>
                <a href="https://smalltown.coffee/shop-coffee/" target="_blank" class="btn">Buy Coffee</a>
                <a href="mailto:annette@smalltown.com" class="btn">Contact Us</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </main>

    <!-- MODAL OVERLAY -->
    <div id="bkgOverlay" class="backgroundOverlay"></div>
    <!-- POPUP -->
    <div id="delayedPopup" class="delayedPopupWindow">
      <!-- This is the close button -->
      <a href="#" id="btnClose" title="Click here to close."></a>
      <!-- This is the left side of the popup for the description -->
      <div class="formDescription">
        <img src="https://smalltown.coffee/landing/assets/images/logo-black.png" alt="Smalltown Coffee" />
        <p>Join our Email Club to receive Updates on Events and Special Promotions.</p>
      </div>
      <!-- Begin MailChimp Signup Form -->
      <div id="mc_embed_signup">
        <form action="https://coffee.us14.list-manage.com/subscribe/post?u=221afefc4ca85eda3bf4b9da6&amp;id=7b0d8c3aec" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
          <div class="mc-field-group">
            <label for="mce-FNAME">First Name
              <span class="asterisk">*</span>
            </label>
            <input type="text" value="" name="FNAME" class="" id="mce-FNAME" placeholder="First Name">
          </div>
          <div class="mc-field-group">
            <label for="mce-LNAME">Last Name
              <span class="asterisk">*</span>
            </label>
            <input type="text" value="" name="LNAME" class="" id="mce-LNAME" placeholder="Last Name">
          </div>
          <div class="mc-field-group">
            <label for="mce-EMAIL">Email Address
              <span class="asterisk">*</span>
            </label>
            <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL" placeholder="Email Address">
          </div>

          <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
          </div>
          <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
          <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_221afefc4ca85eda3bf4b9da6_7b0d8c3aec" tabindex="-1" value=""></div>
          <div class="clear">
            <input type="submit" value="SIGN ME UP" name="subscribe" id="mc-embedded-subscribe" class="button">
          </div>
        </form>
        <a href="#" id="textClose" title="Not today, thanks.">Not today, thanks</a>
      </div>
      <!-- End MailChimp Signup Form -->
    </div>

    <!-- JAVASCRIPT -->
		<script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
		<script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
		<script type="text/javascript" src="https://smalltown.coffee/landing/slick/slick.min.js"></script>
		<script src="https://smalltown.coffee/landing/assets/js/retina.min.js"></script>
		<script src="https://smalltown.coffee/landing/assets/js/main.js"></script>


    <script>
      $(document).ready(function (){
        $("#bkgOverlay").delay(4800).fadeIn(400);
        $("#delayedPopup").delay(5000).fadeIn(400);
        $("#btnClose").click(function (e){
          HideDialog();
          e.preventDefault();
        });
        $("#textClose").click(function (e){
          HideDialog();
          e.preventDefault();
        });
        $('.hamburger').click( function() {
          $(".mobile__menu").toggleClass("show");
        });
      });
			$(document).ready(function (){
				$('.autoplay').slick({
				  slidesToShow: 1,
				  slidesToScroll: 1,
				  autoplay: true,
				  autoplaySpeed: 5000,
					arrows: false,
					dots: true
				});
			});
      function HideDialog(){
        $("#bkgOverlay").fadeOut(400);
        $("#delayedPopup").fadeOut(300);
      }
    </script>


  </body>
</html>
