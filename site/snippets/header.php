<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->

<head>
	<meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" /> 
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />

  <?php echo css('assets/stylesheets/normalize.css') ?>
  <?php echo css('assets/stylesheets/app.css') ?>  
  
  <?php echo js('assets/javascripts/vendor/custom.modernizr.js') ?>
	<?php echo js('assets/javascripts/vendor/jquery.js"')?>
  <?php echo js('assets/javascripts/foundation/foundation.js') ?>
	<?php echo js('assets/javascripts/vendor/jquery.flexslider-min.js')?>
    
  
  
  <script src="http://platform.tumblr.com/v1/share.js"></script>

</head>

<body>
	
	<div class="fixed contain-to-grid">
		<nav class="top-bar">
			<ul class="title-area">
			    <!-- Title Area -->
			    <li class="name">
			      <h1><a href="<?= url() ?>"><?= html($site->title()) ?></a></h1>
			    </li>
			    <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
			    <li class="toggle-topbar menu-icon"><a href="#"><span>Menu</span></a></li>
			</ul>
		    <section class="top-bar-section">
			    <!-- Left Nav Section -->
			    <ul class="right">
					<?php foreach($pages->visible() AS $p): ?>
						<?php if ($p->hasChildren() && $p->template() != 'blog'){ ?>
							<li class="has-dropdown"><a href="<?php echo $p->url(); ?>"><?php echo html($p->title()); ?></a>
								<ul class="dropdown">
								<?php foreach($p->children() AS $c): ?>
									<li><a href="<?php echo $c->url(); ?>"><?php echo html($c->title()); ?></a></li>
								<?php endforeach; ?>
								</ul>
							</li>
							<li class="divider"></li>

						<?php } else{ ?>
											
					<li <?php ecco($p->isOpen(), ' class="active"') ?> ><a href="<?php echo $p->url() ?>"><?php echo html($p->title())?>  </a></li>
					<li class="divider"></li>
						<?php } ?>
				   
				    <?php endforeach ?>
			       
				</ul>
			</section>
		</nav>
	</div>
	