
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <title>
      <?php wp_title(''); ?>
    </title>

	<?php wp_head(); ?>

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700&display=swap" rel="stylesheet"> 

	<script src="https://kit.fontawesome.com/e91d3748fd.js" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo get_template_directory_uri();?>/icon/apple-icon-57x57.png">
	<link rel="apple-touch-icon" sizes="60x60" href="<?php echo get_template_directory_uri();?>/icon/apple-icon-60x60.png">
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo get_template_directory_uri();?>/icon/apple-icon-72x72.png">
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo get_template_directory_uri();?>/icon/apple-icon-76x76.png">
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo get_template_directory_uri();?>/icon/apple-icon-114x114.png">
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo get_template_directory_uri();?>/icon/apple-icon-120x120.png">
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo get_template_directory_uri();?>/icon/apple-icon-144x144.png">
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo get_template_directory_uri();?>/icon/apple-icon-152x152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/icon/apple-icon-180x180.png">
	<link rel="icon" type="image/png" sizes="192x192"  href="<?php echo get_template_directory_uri();?>/icon/android-icon-192x192.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/icon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo get_template_directory_uri();?>/icon/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/icon/favicon-16x16.png">
	<link rel="manifest" href="<?php echo get_template_directory_uri();?>/icon/manifest.json">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri();?>/icon/ms-icon-144x144.png">
	<meta name="theme-color" content="#35AADD">


	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-N6EE9XMS1D"></script>

	<script>
	// Function to determine the user's location based on their IP address

function getUserLocation() {
  return fetch('https://ipapi.co/json/')
    .then(response => response.json())
    .then(data => {
      return {
        country: data.country,
        region: data.region_code
      };
    });
}

// Function to check if the user is located in California or the EU
function isCaliforniaOrEU(location) {
	console.log(location)
  return location.region === 'CA' || 
         location.country === 'AT' || 
         location.country === 'BE' || 
         location.country === 'BG' || 
         location.country === 'CY' || 
         location.country === 'CZ' || 
         location.country === 'DE' || 
         location.country === 'DK' || 
         location.country === 'EE' || 
         location.country === 'ES' || 
         location.country === 'FI' || 
         location.country === 'FR' || 
         location.country === 'GR' || 
         location.country === 'HR' || 
         location.country === 'HU' || 
         location.country === 'IE' || 
         location.country === 'IT' || 
         location.country === 'LT' || 
         location.country === 'LU' || 
         location.country === 'LV' || 
         location.country === 'MT' || 
         location.country === 'NL' || 
         location.country === 'PL' || 
         location.country === 'PT' || 
         location.country === 'RO' || 
         location.country === 'SE' || 
         location.country === 'SI' || 
         location.country === 'SK';
}
function addGoogleTag(){
	window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());
	  gtag('config', 'G-N6EE9XMS1D');
}

jQuery(document).ready(function() {

  var hasConsented = localStorage.getItem('hasConsentedToCookies');
  if(hasConsented=='true'){
	addGoogleTag();
  }
  jQuery('.accept').click(function() {
	localStorage.setItem('hasConsentedToCookies', true);
	jQuery('#cookie-consent').hide();
	addGoogleTag();
  });
  jQuery('.deny').click(function() {
	localStorage.setItem('hasConsentedToCookies', false);
	jQuery('#cookie-consent').hide();
  });

  getUserLocation().then(function(location) {

	if (isCaliforniaOrEU(location)) {
      // Show the cookie consent popup
	  if(!hasConsented){
		jQuery('#cookie-consent').show();
	  }
	} else {
		addGoogleTag();
		localStorage.setItem('hasConsentedToCookies', true);
		jQuery('#cookie-consent').hide();
    }
});

  


  

});	

		</script>
</head>

<body>
<div id="cookie-consent">		
<a href="#" class="accept">Accept</a>
<a href="#" class="deny">x</a>
	This website uses cookies to enhance user experience and to analyze performance and traffic on our website. We also share information about your use of our site with our social media, advertising and analytics partners. <a href ="https://insuriq.com/449-2/">Cookie Notice</a>

</div>

<!--NAVIGATION-->


	<script>
	$(document).ready(function(){

		$('.nav_mobile_icon').on('click',function(){
			$('.nav_mobile_icon a i').toggleClass('fa-times');
			$('.nav_menu').slideToggle();
		});

		$('#menu-item-65').hover(function() {
			$(this).children('ul').stop(true, false, true).fadeToggle(400);
		    }, function(){
			$(this).children('ul').stop(true, false, true).fadeToggle(200);
		});

		$('#menu-item-65 > a').append( " <i class='fa-solid fa-caret-down'>" );
		$("#menu-item-65 > ul").append( "<div class='sub_menu_arrow1'></div>" );
		$('#menu-item-65 > ul').hide();

		$('#menu-item-66').hover(function() {
			$(this).children('ul').stop(true, false, true).fadeToggle(400);
		    }, function(){
			$(this).children('ul').stop(true, false, true).fadeToggle(200);
		});

		$('#menu-item-66 > a').append( " <i class='fa-solid fa-caret-down'>" );
		$("#menu-item-66 > ul").append( "<div class='sub_menu_arrow1'></div>" );
		$('#menu-item-66 > ul').hide();

	});
	</script>



	<nav>
		<div class="page_width nav_content">

			<div class="nav_logo"><a href="/"><img src="<?php echo get_template_directory_uri();?>/images/logo_tagline.svg" class="logo" alt="" /></a></div>

			<div class="nav_mobile_icon"><a data-target="#main-navigation"> &nbsp;<i class="far fa-bars"></i></a></div>

			<div class="nav_menu">
				<?php wp_nav_menu( array ('menu' => 'Main Menu') ); ?>
			</div>

		</div>
	</nav>


