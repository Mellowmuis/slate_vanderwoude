<?php
  //import the default gravityform contact forms
define("GF_THEME_IMPORT_FILE", "includes/gravityforms-contactform.xml");

// Register the sitemap menu
add_action( 'init', 'register_menu_sitemap' );

function register_menu_sitemap(){
	register_nav_menus( array(
		'sitemap' => 'Sitemap'
    ));
}

$initialized = get_option('slate_initialized');
if($initialized == null){
	$initialized = false;
}

if(is_admin() && !$initialized){
	  include_once('includes/initialize_pages.php');
	
	  $siteIniter = new SiteInitializer(
		  "vanderwoude", 
		  "Zuideinde 19 1521DA Wormerveer", 
		  "075-6212580", 
		  "info@vanderwoude.nl");
	  $siteIniter->initializeAll();
	  add_option('slate_initialized', true);
}


include_once('includes/antispam.php');



//


function checktax(){
	$initialized = get_option('slate_products_initialized');
	if($initialized == null){
		$initialized = false;
	}
	if(!$initialized){
		include_once('includes/initialize_products.php');
		$p = new ProductInitializer();
		//	$p->parsePagesFromXml('/var/www/wp-content/themes/slate-0.3.1_vanderwoude/includes/products_brasserie.xml');
		$p->initializeAll();
		
		add_option('slate_products_initialized', true);
	}
}
add_action( 'init', 'checktax' );
?>
