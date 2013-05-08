<?php snippet('header') ?>

<div class="row">
	<div class="large-9 small-centered columns">
			<h1><?php echo html($page->title()) ?></h1>
		<?php echo kirbytext($page->text()) ?>
	</div>
</div>

<?php snippet('footer') ?>