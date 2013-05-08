<?php snippet('header') ?>
 
<div class="row" id="main-content">
  <section class="small-centered columns" id="content-area">
	  <article>
	      <h2><?= $page->title() ?></h2>
	  <h5 class="subheader"><?= $page->date('m-d-Y') ?></h5>
	      <?= kirbytext($page->text()) ?>
	  </article>
	  <hr />
	  <!-- ADD A COMMENTING SYSTEM HERE -->
  </section>

</div>

 
<?php snippet('footer') ?>