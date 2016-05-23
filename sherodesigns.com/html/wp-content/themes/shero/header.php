<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/images/favicon.ico" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="<?php echo bloginfo('stylesheet_directory');?>/css/style.css">
<link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,900,100italic,300italic,400italic,700italic,900italic' rel='stylesheet' type='text/css'>

<!-- live -->

<title>Magento Experts | Magento Development Company NY</title>
<?php wp_head();?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-5925958-4', 'auto');
  ga('send', 'pageview');

</script>

<script>
$y('.blog-inner')
	.css( {backgroundPosition: "0 0"} )
	.mouseover(function(){
		$y(this).stop().animate(
			{backgroundPosition:"(0 -250px)"}, 
			{duration:500})
		})
	.mouseout(function(){
		$y(this).stop().animate(
			{backgroundPosition:"(0 0)"}, 
			{duration:500})
		})
		
		
</script>

<script src="js/lib/jquery-1.9.0.min.js" type="text/javascript"></script>
    <script src="js/jquery.index.js" type="text/javascript"></script>
    
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.1/jquery.min.js"></script>
<script type="text/javascript">
var $y = jQuery.noConflict(true);
</script>

<script type="text/javascript">


		$y(document).ready(function($) {
			$y('#accordion').find('.accordion-toggle').click(function(){
	
				//Expand or collapse this panel
				$y(this).next().slideToggle('fast');
	
				//Hide the other panels
				$y(".accordion-content").not($y(this).next()).slideUp('fast');
	
			});
		});
	</script>
    <style>
		.accordion-toggle {cursor: pointer; margin: 0;}
		.accordion-content {display: none;}
		.accordion-content.default {display: block;}
	</style>
    
    <script>

	$y(function(){
  $y('#contain-entire-header').data('size','big');
});

$y(window).scroll(function(){
  if($y(document).scrollTop() > 0)
{
    if($y('#contain-entire-header').data('size') == 'big')
    {
        $y('#contain-entire-header').data('size','small');
        $y('#contain-entire-header').stop().animate({
            height:'100px'
        },600);
    }
}
else
  {
    if($y('#contain-entire-header').data('size') == 'small')
      {
        $y('#contain-entire-header').data('size','big');
        $y('#contain-entire-header').stop().animate({
            height:'110px'
        },600);
      }  
  }
});
</script>
 <script>
	$y(function(){
  $y('#logo').data('size','big');
});

$y(window).scroll(function(){
  if($y(document).scrollTop() > 0)
{
    if($y('#logo').data('size') == 'big')
    {
        $y('#logo').data('size','small');
        $y('#logo').stop().animate({
            width:'30%'
        },600);
    }
}
else
  {
    if($y('#logo').data('size') == 'small')
      {
        $y('#logo').data('size','big');
        $y('#logo').stop().animate({
            width: '40%' 
        },600);
      }  
  }
});
</script>
<script>
	$y(function(){
  $y('#menu-main-nav').data('size','big');
});

$y(window).scroll(function(){
  if($y(document).scrollTop() > 0)
{
    if($y('#menu-main-nav').data('size') == 'big')
    {
        $y('#menu-main-nav').data('size','small');
        $y('#menu-main-nav').stop().animate({
            width:'90%'
        },600);
    }
}
else
  {
    if($y('#menu-main-nav').data('size') == 'small')
      {
        $y('#menu-main-nav').data('size','big');
        $y('#menu-main-nav').stop().animate({
            width: '100%'
        },600);
      }  
  }
});
</script>



</head>

<body class="services-pages">

<!-- DEV -->


<!-- Go to www.addthis.com/dashboard to customize your tools -->
<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5489bcb342768312" async="async"></script>
<div id="contain-entire-header">
	<div id="wide-header">
		<div class="container" id="scrollwork">
			<div class="head-left">
				&nbsp;
			</div>
			<div class="head-right">
				<a class="phone-number" href="#">845.656.3000</a><a class="top-quote" href="http://sherodesigns.com/free-website-design-quote/">Get a Quote ></a>
			</div>
		</div>
	</div>
	<div id="header-stick">
		<div class="container header-contain">
			<div class="header">
				<div id="logo">
					<a href="<?php echo bloginfo('home');?>"><img src="<?php echo bloginfo('stylesheet_directory');?>/images/shero-logo.png" alt="Shero Designs logo" /></a>
				</div> <!-- logo end --> 
				<div class="nav">
					<?php #wp_nav_menu( array( 'container_class' => 'menu-header', 'theme_location' => 'primary' ) ); ?>
					<nav id="site-navigation" class="main-navigation" role="navigation">
						<h3 class="menu-toggle"><?php _e( 'Menu', 'mh' ); ?></h3>
						<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'mh' ); ?>"><?php _e( 'Skip to content', 'mh' ); ?></a>
						<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ,'menu' => 'main nav') ); ?>
					</nav><!-- #site-navigation -->				
				</div> <!-- nav end -->
			</div> <!-- header end -->
		</div>
	</div>
</div> <!-- container end -->




<?php
#echo $_SERVER["REQUEST_URI"];
if ( $_SERVER["REQUEST_URI"] == '/' )
{
?>
<script type='text/javascript' src='http://sherodesigns.com/dev/wp-content/themes/shero/js/navigation.js?ver=1.0'></script>
<?php
} 
?>
