<?php snippet('header') ?>
 
<div class="row" id="main-content">
	<div class="row">
	<section class="small-centered large-12 columns" id="video-area">
		 <div class="project-video small-centered <?= html($page->aspectratio()) ?>">
		 <?= kirbytext($page->video()) ?>
		 </div>
	</section>
	</div>
	<div class="row">
	<section class="small-centered large-12 columns" id="content-area">
		<article>
			<div class="row">
				<div class="large-3 push-9 columns <?= html($page->projectid()) ?>">
					<div class="panel radius">
						<h5>Support this Project:</h3>
						
							<form id="project-id-<?= html($page->projectid()) ?>" method="get">
						<div class="row collapse">
							<div class="small-8 columns">
								<input type="text" pattern="[0-9]*" placeholder="How much to" min="0" step="5">
							</div>
							<div class="small-4 columns">
								<input type="button" class="button radius postfix" value="Donate!" name="donate">
							</div>
						</div>
						</form>
					</div>
				</div>
				<div class="large-9 pull-3 columns">
				<h2><?= $page->title() ?></h2>
				<?= kirbytext($page->text()) ?>	
				</div>
			</div>	  
		</article>
	<hr />
		<!-- ADD A COMMENTING SYSTEM HERE -->
	</section>
	</div>

</div>

 
<?php snippet('footer') ?>