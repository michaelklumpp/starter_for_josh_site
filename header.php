<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title>
    <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>

    </title>
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/_/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;800&display=swap" rel="stylesheet">
    <?php wp_head(); ?>
    
  </head>
  <body>
  <header class="container-fluid herobg"<?php if ( get_field(' headerbackgroundimage ') ) { echo 'style="background: url(' . get_field(' headerbackgroundimage ') . ')"'; } ?>>
    <nav class="navbar">
        <div class="container-fluid">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><span class="josh">JOSH</span><span class="orange">WHITKIN</span></a>
          </div>
          <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
  <?php wp_nav_menu(array(
        'menu' => 'Top menu',
        'items_wrap'=>'%3$s',
        'container' => false,
        'list_item_class' => "nav-item",
        'link_class' => "nav-link",
        )); ?>
</ul>

          </div>
        </div>
      </nav>

      
        <div class="container">
        <h1 class="animate__animated animate__fadeInLeft"><?php the_field('maintagline'); ?></h1>
        </div>
      </header>