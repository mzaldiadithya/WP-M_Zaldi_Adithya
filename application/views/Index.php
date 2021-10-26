<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title> Master </title>
  <link rel="shortcut icon" href="<?php echo base_url() ?>assets/Landing/img/Logo/MSW.png" type="image/x-icon">

  <!-- CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/Landing/vendors/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/Landing/vendors/linearicons/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/Landing/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/Landing/css/bar.css">
  
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/Landing/css/flipbook.css">
	<link href="<?php echo base_url() ?>assets/Landing/booklet/jquery.booklet.1.1.0.css" type="text/css" rel="stylesheet" media="screen" />

  <!-- End CSS -->

</head>

<body style="overflow-x: hidden !important;">
	<!-- Top Navbar -->
	<!-- <div id="top-nav" style="background: linear-gradient(-180deg, #f9e761, #f2c369);">
		<div class="container">
			<ul class="nav justify-content-end pt-1 pb-2">
				<li class="nav-item m-2">
					<div class="d-flex align-items-center text-dark font-weight-bold">
						<svg style="width: 25px; height: 25px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
						<span class="text-dark font-weight-bold ml-2" href="#">1010 New York, NY 10018 US.</span>
					</div>
				</li>
				<li class="nav-item m-2">
					<div class="d-flex align-items-center text-dark font-weight-bold">
						<svg style="width: 25px; height: 25px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
						<span class="text-dark font-weight-bold ml-2" href="#"> Mon - Sat 8.00 - 18.00. Sunday CLOSED</span>
					</div>
				</li>
				<li class="nav-item m-2">
					<div class="d-flex align-items-center text-dark font-weight-bold">
						<svg style="width: 25px; height: 25px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
						<span class="text-dark font-weight-bold ml-2" href="#"> 212 386 5575</span>
					</div>
				</li>
			</ul>
		</div>
	</div> -->
	<!-- Top Navbar -->

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-light">
      <div class="container">
          <a class="navbar-brand" href="#"> <img src="<?php echo base_url() ?>assets/Landing/img/Logo/MSW.png" alt="logo" class="logo"> </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse pb-3 mt-3" id="navbarNavAltMarkup">
              <div class="navbar-nav ml-auto">
                  <a class="nav-item nav-link scroll actived" href="#home">Home</a>
                  <a class="nav-item nav-link scroll" href="#offering">Offering</a> 
                  <a class="nav-item nav-link scroll" href="#about"> About </a>
                  <a class="nav-item nav-link scroll" href="#panduan"> Gallery </a>
                  <a class="nav-item nav-link scroll" href="#database"> Spesification </a>
                  <a class="nav-item nav-link scroll" href="#testimoni"> Testimonial </a>
                  <a class="nav-link btn-login px-3" href="<?php echo site_url('DashboardController/index') ?>"> Login </a>
              </div>
          </div>
      </div>
  </nav>    
  <!-- End Navbar -->

	<!-- Slider -->
	<div id="home">
		<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="margin-top: -7%;">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?php echo base_url() ?>assets/Landing/img/Carousel/3.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>First slide label</h5>
						<p>Some representative placeholder content for the first slide.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?php echo base_url() ?>assets/Landing/img/Carousel/4.png" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>First slide label</h5>
						<p>Some representative placeholder content for the first slide.</p>
					</div>
				</div>
				<div class="carousel-item">
					<img src="<?php echo base_url() ?>assets/Landing/img/Carousel/2.jpg" class="d-block w-100" alt="...">
					<div class="carousel-caption d-none d-md-block">
						<h5>First slide label</h5>
						<p>Some representative placeholder content for the first slide.</p>
					</div>
				</div>
			</div>

			<a class="carousel-control-prev btn-secondary p-3" style="height: fit-content; width: fit-content; margin: auto;" href="#carouselExampleFade" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" style="color: #999 !important;" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next btn-secondary p-3" style="height: fit-content; width: fit-content; margin: auto;" href="#carouselExampleFade" role="button" data-slide="next">
				<span class="carousel-control-next-icon" style="color: #999 !important;" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>

		</div>

		<div class="py-3 featured" style="background: linear-gradient(-180deg, #1978b3, #002e5b); z-index: 999;">
			<div class="container">
				<div class="row">
					<a href="#" data-target="#carouselExampleFade" data-slide-to="0" class="col-md-4 my-3 featured-item d-flex align-items-center text-white">
						<svg style="height: 50px; width: 50px;" class="text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
						<div class="ml-3 d-flex flex-column" style="font-size: 18px;">
							<span class="font-weight-bold">Life Insurance</span>
							<span>Protect Your Family With Insurance</span>
						</div>
					</a>
					<a href="#" data-target="#carouselExampleFade" data-slide-to="1" class="col-md-4 my-3 featured-item d-flex align-items-center text-white">
						<svg style="height: 50px; width: 50px;" class="text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
						<div class="ml-3 d-flex flex-column" style="font-size: 18px;">
							<span class="font-weight-bold">Life Insurance</span>
							<span>Protect Your Family With Insurance</span>
						</div>
					</a>
					<a href="#" data-target="#carouselExampleFade" data-slide-to="2" class="col-md-4 my-3 featured-item d-flex align-items-center text-white">
						<svg style="height: 50px; width: 50px;" class="text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
						<div class="ml-3 d-flex flex-column" style="font-size: 18px;">
							<span class="font-weight-bold">Life Insurance</span>
							<span>Protect Your Family With Insurance</span>
						</div>
					</a>
				</div>
			</div>
		</div>		

	</div>
	<!-- End Slider -->

	<!-- Offering -->
	<div class="pb-3 pt-5" style="background: #f1f1f1;">
		<div class="container" id="offering">
			<h1 class="text-uppercase title font-weight-bold">What we Offered ?</h1>
			<div class="row offering-item mt-5">
				<div class="col-md-4 mb-3">
					<div class="d-flex">
						<div class="offering-icon p-1">
							<div class="offering-icon-bg pt-2 pb-1 px-2">
								<svg style="height: 50px; width: 50px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
							</div>
						</div>
						<div class="ml-3 d-flex flex-column">
							<h3 class="subtitle">Title</h3>
							<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, animi.</span>
						</div>
					</div>
				</div>
				
				<div class="col-md-4 mb-3">
					<div class="d-flex">
						<div class="offering-icon p-1">
							<div class="offering-icon-bg pt-2 pb-1 px-2">
								<svg style="height: 50px; width: 50px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
							</div>
						</div>
						<div class="ml-3 d-flex flex-column">
							<h3 class="subtitle">Title</h3>
							<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, animi.</span>
						</div>
					</div>
				</div>

				<div class="col-md-4 mb-3">
					<div class="d-flex">
						<div class="offering-icon p-1">
							<div class="offering-icon-bg pt-2 pb-1 px-2">
								<svg style="height: 50px; width: 50px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
							</div>
						</div>
						<div class="ml-3 d-flex flex-column">
							<h3 class="subtitle">Title</h3>
							<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, animi.</span>
						</div>
					</div>
				</div>

				<div class="col-md-4 mb-3">
					<div class="d-flex">
						<div class="offering-icon p-1">
							<div class="offering-icon-bg pt-2 pb-1 px-2">
								<svg style="height: 50px; width: 50px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
							</div>
						</div>
						<div class="ml-3 d-flex flex-column">
							<h3 class="subtitle">Title</h3>
							<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, animi.</span>
						</div>
					</div>
				</div>

				<div class="col-md-4 mb-3">
					<div class="d-flex">
						<div class="offering-icon p-1">
							<div class="offering-icon-bg pt-2 pb-1 px-2">
								<svg style="height: 50px; width: 50px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
							</div>
						</div>
						<div class="ml-3 d-flex flex-column">
							<h3 class="subtitle">Title</h3>
							<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, animi.</span>
						</div>
					</div>
				</div>

				<div class="col-md-4 mb-3">
					<div class="d-flex">
						<div class="offering-icon p-1">
							<div class="offering-icon-bg pt-2 pb-1 px-2">
								<svg style="height: 50px; width: 50px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
							</div>
						</div>
						<div class="ml-3 d-flex flex-column">
							<h3 class="subtitle">Title</h3>
							<span>Lorem ipsum dolor sit amet consectetur adipisicing elit. Suscipit, animi.</span>
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
	<!-- End Offering -->

  <!-- About Us -->
  <div class="py-3" id="about">
		<div class="container">
			<h1 class="text-uppercase title font-weight-bold">About Us</h1>
      <p style="font-size: 20px;" class="text-white">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis odit velit voluptatibus exercitationem possimus, nisi et, atque fugiat magnam quae incidunt doloremque non soluta autem quia ipsum officiis ad deserunt!</p>
    </div>
  </div>      
  <!-- End About Us -->

  <!-- Panduan -->
  <div class="pb-5" id="panduan" style="background: #aaaaaa;">
    <div class="container">
      <div class="book_wrapper">
        <div class="hide">
          <a id="next_page_button"></a>
          <a id="prev_page_button"></a>
        </div>
          
        <div id="mybook" style="display:none;">
          <div class="b-load">
            <div>
              <img src="<?php echo base_url() ?>assets/Landing/images/1.jpg" alt=""/>
              <h1>Slider Gallery</h1>
              <p>This tutorial is about creating a creative gallery with a
                slider for the thumbnails. The idea is to have an expanding
                thumbnails area which opens once an album is chosen.
                The thumbnails will scroll to the end and move back to
                the first image. The user can scroll through the thumbnails
                by using the slider controls. When a thumbnail is clicked,
                it moves to the center and the full image preview opens.</p>
              <a href="" class="article">ARTICLE</a>
              <a href="" class="demo">DEMO</a>
            </div>
      
            <div>
              <img src="<?php echo base_url() ?>assets/Landing/images/2.jpg" alt="" />
              <h1>Animated Portfolio Gallery</h1>
              <p>Today we will create an animated portfolio gallery with jQuery.
                The gallery will contain a scroller for thumbnails and a
                content area where we will display details about the portfolio
                item. The image can be enlarged by clicking on it, making
                it appear as an overlay.</p>
              <a href="" target="_blank" class="article">ARTICLE</a>
              <a href="" class="demo">DEMO</a>
            </div>
      
            <div>
              <img src="<?php echo base_url() ?>assets/Landing/images/3.jpg" alt="" />
              <h1>Annotation Overlay Effect</h1>
              <p>Today we will create a simple overlay effect to display annotations in e.g. portfolio
                items of a web designers portfolio. We got the idea from the wonderful
                portfolio of www.rareview.com where Flash is used to create the
                effect. We will use jQuery.</p>
              <a href="" target="_blank" class="article">ARTICLE</a>
              <a href="" class="demo">DEMO</a>
            </div>
      
            <div>
              <img src="<?php echo base_url() ?>assets/Landing/images/4.jpg" alt="" />
              <h1>Bubbleriffic Image Gallery</h1>
              <p>In this tutorial we will create a bubbly image gallery that
                shows your images in a unique way. The idea is to show the
                thumbnails of albums in a rounded fashion allowing the
                user to scroll them automatically by moving the mouse.
                Clicking on a thumbnail will zoom in a big circle and
                the full image which will be automatically resized to
                fit into the screen.</p>
              <a href="" target="_blank" class="article">ARTICLE</a>
              <a href="" class="demo">DEMO</a>
            </div>
      
            <div>
              <img src="<?php echo base_url() ?>assets/Landing/images/5.jpg" alt="" />
              <h1>Collapsing Site Navigation</h1>
              <p>Today we will create a collapsing menu that contains vertical
                navigation bars and a slide out content area. When hovering
                over a menu item, an image slides down from the top and a
                submenu slides up from the bottom. Clicking on one of the
                submenu items will make the whole menu collapse like a card
                deck and the respective content area will slide out.</p>
              <a href="" class="article">ARTICLE</a>
              <a href="" class="demo">DEMO</a>
            </div>
      
            <div>
              <img src="<?php echo base_url() ?>assets/Landing/images/6.jpg" alt="" />
              <h1>Custom Animation Banner</h1>
              <p>In today’s tutorial we will be creating a custom animation banner with jQuery.
                The idea is to have different elements in a banner that will
                animate step-wise in a custom way.</p>
              <p>We will be using the jQuery Easing Plugin and the jQuery 2D
                Transform Plugin to create some nifty animations.</p>
              <a href="" class="article">ARTICLE</a>
              <a href="" class="demo">DEMO</a>
            </div>
      
            <div>
              <img src="<?php echo base_url() ?>assets/Landing/images/7.jpg" alt="" />
              <h1>Full Page Image Gallery</h1>
              <p>In this tutorial we are going to create a stunning full page
                gallery with scrollable thumbnails and a scrollable full
                screen preview. The idea is to have a thumbnails bar at
                the bottom of the page that scrolls automatically when
                the user moves the mouse. When a thumbnail is clicked,
                it moves to the center of the page and the full screen
                image is loaded in the background.</p>
              <a href="" class="article">ARTICLE</a>
              <a href="" class="demo">DEMO</a>
            </div>
      
            <div>
              <img src="<?php echo base_url() ?>assets/Landing/images/8.jpg" alt="" />
              <h1>Hover Slide Effect</h1>
              <p>Today we will create a neat effect with some images using
                jQuery. The main idea is to have an image area with several
                images that slide out when we hover over them, revealing
                other images. The sliding effect will be random, i.e.
                the images will slide to the top or bottom, left or
                right, fading out or not. When we click on any area,
                all areas will slide their images out.</p>
              <a href="" class="article">ARTICLE</a>
              <a href="" class="demo">DEMO</a>
            </div>
      
            <div>
              <img src="<?php echo base_url() ?>assets/Landing/images/9.jpg" alt="" />
              <h1>Merging Image Boxes</h1>
              <p>Today we will show you a nice effect for images with jQuery.
                The idea is to have a set of rotated thumbnails that,
                once clicked, animate to form the selected image.
                You can navigate through the images with previous
                and next buttons and when the big image gets clicked
                it will scatter into the little box shaped thumbnails again.</p>
              <a href="" class="article">ARTICLE</a>
              <a href="" class="demo">DEMO</a>
            </div>
      
            <div>
              <img src="<?php echo base_url() ?>assets/Landing/images/10.jpg" alt="" />
              <h1>Compact News Previewer</h1>
              <p>Today we will create a news previewer that let’s you
                show your latest articles or news in a compact way.
                The news previewer will show some list of articles
                on the left side and the preview of the article with a
                longer description on the right. Once a news on the left
                is clicked, the preview will slide in.</p>
              <a href="" class="article">ARTICLE</a>
              <a href="" class="demo">DEMO</a>
            </div>
      
            <div>
              <img src="<?php echo base_url() ?>assets/Landing/images/11.jpg" alt="" />
              <h1>Overlay Effect Menu</h1>
              <p>In this tutorial we are going to create a simple menu
                that will stand out once we hover over it by covering
                everything except the menu with a dark overlay.
                The menu will stay white and a submenu area will
                expand. We will create this effect using jQuery.</p>
              <a href="" class="article">ARTICLE</a>
              <a href="" class="demo">DEMO</a>
            </div>
      
            <div>
              <img src="<?php echo base_url() ?>assets/Landing/images/12.jpg" alt="" />
              <h1>Polaroid Photobar Gallery</h1>
              <p>In this tutorial we are going to create an image gallery
                with a Polaroid look. We will have albums that will expand
                to sets of slightly rotated thumbnails that pop out on hover.
                The full image will slide in from the bottom once a thumbnail
                is clicked. In the full image view the user can navigate
                through the pictures or simply choose another thumbnail
                to be displayed.</p>
              <a href="" class="article">ARTICLE</a>
              <a href="" class="demo">DEMO</a>
            </div>
      
            <div>
              <img src="<?php echo base_url() ?>assets/Landing/images/13.jpg" alt="" />
              <h1>Pull Out Content Panel</h1>
              <p>In this tutorial we will create a content panel that 
                slides out at a predefined scroll position. It will 
                reveal a teaser with related content and it can be 
                expanded to full page size to show more. A custom 
                slider allows to scroll through many items in the 
                panel.</p>
              <a href="" class="article">ARTICLE</a>
              <a href="" class="demo">DEMO</a>
            </div>
      
            <div>
              <img src="<?php echo base_url() ?>assets/Landing/images/14.jpg" alt="" />
              <h1>Thumbnails Navigation Gallery</h1>
              <p>In this tutorial we are going to create an extraordinary
                gallery with scrollable thumbnails that slide out from a
                navigation. We are going to use jQuery and some CSS3
                properties for the style. The main idea is to have a
                menu of albums where each item will reveal a horizontal
                bar with thumbnails when clicked.</p>
              <a href="" class="article">ARTICLE</a>
              <a href="" class="demo">DEMO</a>
            </div>
            
          </div>
        </div>
      </div>      
    </div>

    <div class="d-flex justify-content-center">
      <div class="border border-secondary p-2 rounded-circle bg-white mx-1 left-right" 
      onclick="document.getElementById('prev_page_button').click()">
        <svg style="height: 35px; width: 35px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 19l-7-7 7-7m8 14l-7-7 7-7"></path></svg>
      </div>
      <div class="border border-secondary p-2 rounded-circle bg-white mx-1 left-right" 
      onclick="document.getElementById('next_page_button').click()">
        <svg style="height: 35px; width: 35px;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 5l7 7-7 7M5 5l7 7-7 7"></path></svg>
      </div>
    </div>
  </div>
  <!-- End Panduan -->

  <!-- Spesifikasi Database -->
  <div class="container mt-5" id="database">
    <h1 class="text-uppercase title font-weight-bold">Spesification</h1>
    <nav class="vertical-bar" style="background: #fff !important; box-shadow: none !important;">
      <ul>
        <li>
          <div class="d-flex flex-column">
            <a href="" class="active">Services</a>
            <span class="mt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis, quibusdam?</span>
          </div>
        </li>
        <li>
          <div class="d-flex flex-column">
            <a href="" class="active">Works</a>
            <span class="mt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis, quibusdam?</span>
          </div>
        </li>
        <li>
          <div class="d-flex flex-column">
            <a href="" class="active">Teams</a>
            <span class="mt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis, quibusdam?</span>
          </div>
        </li>
        <li>
          <div class="d-flex flex-column">
            <a href="" class="active">Testimonials</a>
            <span class="mt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis, quibusdam?</span>
          </div>
        </li>
        <li>
          <div class="d-flex flex-column">
            <a href="" class="active">Contact</a>
            <span class="mt-2">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Reiciendis, quibusdam?</span>
          </div>
        </li>
      </ul>
    </nav>  
  </div>
  <!-- End Spesifikasi Database -->

  <!-- Testimoni -->
  <div class="mt-4" style="border-top: 3px solid #1978b3; position: absolute; width: 100%;">
    <div class="container">
      <div id="separater"></div>
    </div>
  </div>

  <div class="container" style="margin-top: 11em;">
    <div class="row testi justify-content-center" id="testimoni">
      <div class="col-lg-10">
        <h1 class="text-center text-uppercase font-weight-bold mb-5" style="color: #1978b3;"> What Clients Says ? </h1>    

        <div class="row justify-content-center">
          <div class="list-group list-group-horizontal" id="list-tab" role="tablist">
            <a class="active" id="list-home-list" data-toggle="list" href="#list-home" role="tab" aria-controls="home">      
              <img src="<?php echo base_url() ?>assets/Landing/img/image-1.png" class="rounded-circle">                
            </a>
            <a class="" id="list-profile-list" data-toggle="list" href="#list-profile" role="tab" aria-controls="profile">
                <img src="<?php echo base_url() ?>assets/Landing/img/image-2.png" class="rounded-circle">
            </a>
            <a class="" id="list-messages-list" data-toggle="list" href="#list-messages" role="tab" aria-controls="messages">
                <img src="<?php echo base_url() ?>assets/Landing/img/image-3.png" class="rounded-circle">
            </a>
          </div>
        </div>
        
        <div class="container">
          <div class="tab-content" id="nav-tabContent">
            <div class="tab-pane fade show active" id="list-home" role="tabpanel" aria-labelledby="list-home-list">
                <h1 class="text-center text-white">Quotes</h1>  
                <p class="text-center text-white">
                  "Bekerja dengan suasana hati yang lebih baik dan mempelajari hal baru setiap harinya"
                </p>          
                <p class="quotes-pri text-center text-white">Rex</p>                        
                <p class="quotes-sec text-center text-white">Programmer</p> 
                
                <img src="<?php echo base_url() ?>assets/Landing/img/image-1.png" class="rounded-circle">
            </div>
            <div class="tab-pane fade" id="list-profile" role="tabpanel" aria-labelledby="list-profile-list">
                <h1 class="text-center text-white">Quotes</h1>  
                <p class="text-center text-white">
                  "Bekerja dengan suasana hati yang lebih baik dan mempelajari hal baru setiap harinya"
                </p>          
                <p class="quotes-pri text-center text-white">Pyra</p>                       
                <p class="quotes-sec text-center text-white">Designer</p> 

                <img src="<?php echo base_url() ?>assets/Landing/img/image-2.png" class="rounded-circle">
            </div>
            <div class="tab-pane fade" id="list-messages" role="tabpanel" aria-labelledby="list-messages-list">
                <h1 class="text-center text-white">Quotes</h1>  
                <p class="text-center text-white">
                  "Bekerja dengan suasana hati yang lebih baik dan mempelajari hal baru setiap harinya"
                </p>          
                <p class="quotes-pri text-center text-white">Mythra</p>                       
                <p class="quotes-sec text-center text-white">Teacher</p>
                
                <img src="<?php echo base_url() ?>assets/Landing/img/image-3.png" class="rounded-circle">
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>
  <!-- End Testimoni -->

  <!-- Footer -->
  <div style="background: #7dbfe7; margin-top: 5em;" class="p-3"> </div>

  <footer class="pb-2">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg">
          <img src="<?php echo base_url() ?>assets/Landing/img/Logo/MSW.png" alt="">
          <p class="text"> GET WORK DONE FASTER AND BETTER WITH US </p>
        </div>

        <div class="col-lg about">
          <h5>About</h5>
          <ul class="list-group">
            <li> <a href=""> About Us</a> </li>
            <li> <a href=""> Contant </a> </li>
            <li> <a href=""> Blog </a> </li>
          </ul>         
        </div>

        <div class="col-lg about">
          <h5>About</h5>
          <ul class="list-group">
            <li> <a href=""> About Us</a> </li>
            <li> <a href=""> Contant </a> </li>
            <li> <a href=""> Blog </a> </li>
          </ul>         
        </div>        
          
        
        <div class="col-lg sosmed">
          <h5>Follow Us On Social Media</h5>
          <div class="row justify-content-left">
            <a href=""> <img src="<?php echo base_url() ?>assets/Landing/img/facebook.png" class="fb"> </a>
            <a href=""> <img src="<?php echo base_url() ?>assets/Landing/img/ig.png" class="ig"> </a>
            <a href=""> <img src="<?php echo base_url() ?>assets/Landing/img/git.png" class="git"> </a>
            <a href=""> <img src="<?php echo base_url() ?>assets/Landing/img/pinterest.png" class="pin"> </a>
          </div>
        </div>            
      </div>

      <p class="copy">&copy Copyright Master <span>2021</span> </p>
    </div>
  </footer>
  <!-- End Footer --> 

  <!-- JS -->
  <!-- <script src="vendors/jquery/jquery.js"></script> -->

  <!-- Bootstrap JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script type="text/javascript">
    // var jQuery_3_3_1 = $.noConflict(true);

    jQuery_3_3_1('Use jQuery 3.3.1').click(function() {
      alert('Top: ' + jQuery_3_3_1(this).offset().top + '\n' +
        'jQuery: ' + jQuery_3_3_1.fn.jquery);
    }).appendTo('body');     
  </script>
  <script src="<?php echo base_url() ?>assets/Landing/vendors/popper.js/popper.js"></script>
  <script src="<?php echo base_url() ?>assets/Landing/vendors/bootstrap/js/bootstrap.js"></script>  
  <script src="<?php echo base_url() ?>assets/Landing/js/scroll.js"></script>
  <!-- Bootstrap JS -->

  <!-- Booklet Js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>
  <script type="text/javascript">
    var jQuery_1_4_4 = $.noConflict(true);

    (function($) {
      var jq144 = $('Use jQuery 1.4.4');

      jq144.click(function() {
          alert('Top: ' + $(this).offset().top + '\n' +
            'jQuery: ' + $.jQuery 1.1.4.jquery);
        })
        .appendTo('body');
    })(jQuery_1_1_4);      
  </script>
  <script src="<?php echo base_url() ?>assets/Landing/booklet/jquery.easing.1.3.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/Landing/booklet/jquery.booklet.1.1.0.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url() ?>assets/Landing/js/flipbook.js"></script>  
  <!-- Booklet Js -->

</body>

</html>