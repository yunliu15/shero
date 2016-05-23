<?php $navmenu = array(
	'theme_location'  => 'primary',
	'menu'            => '', 
	'container'       => 'false', 
	'container_class' => '', 
	'container_id'    => '',
	'menu_class'      => '', 
	'menu_id'         => '',
	'echo'            => true,
	'fallback_cb'     => 'false',
	'before'          => '',
	'after'           => '',
	'link_before'     => '',
	'link_after'      => '',
	'items_wrap'      => /* Don't wrap in a UL */ '%3$s',
	'depth'           => 2,
	'walker'          => ''
); ?>

<div class="page-wrap">
	<div id="logo">
		<a title="Shero Designs" href="<?php bloginfo('wpurl'); ?>">shero</a>
		<span class="logo-left"></span>
		<span class="logo-right"></span>
	</div>

	<a class="nav-cta" href="<?php bloginfo('wpurl'); ?>/free-website-design-quote">
		Get a Quote
	</a>
	
	<!-- DESKTOP -->
	<nav id="menu" class="navmenu">

		<label id="mobile-menu-button"><span class="fa fa-bars"></span></label>
		<ul>
			<?php wp_nav_menu( $navmenu ); ?>
			<li class="search-icon"><a><span class="fa fa-search"></span></a></li>
		</ul>

	</nav>

	<div id="mobile-search" class="search-icon"><a><span class="fa fa-search"></span></a></div>


</div>


