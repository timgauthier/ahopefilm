<footer class="container">
	<div class="row">
		<div class="large-5 columns">
			<div class"row">
			<form action="http://forkables.us2.list-manage.com/subscribe/post" method="post">
					<input type="hidden" name="u" value="4a7c468040d165b6b672268bc">
					<input type="hidden" name="id" value="c9a1b544cf">
				<div class="row collapse">
	
					<label><h4>Sign up for our Newsletter</h4></label>

					<div class="small-9 columns mc-field-group">
						<input type="email" autocapitalize="off" autocorrect="off" name="MERGE0" id="MERGE0" size="25" placeholder="Enter your Email Address">
						<small class="error" style="display:none">*|HTML:EMAILERROR|*</small>
					</div>
					<div class="small-3 columns clear">	
						<input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button postfix radius">
					</div>
				</div>
			</form>
			<!--
			<div class="row hide-on-phones">
							
							<div class="small-2 columns">
							<?php echo kirbytext($site->facebooklike()) ?>
							</div>
						</div>-->
			
			<div class="row">
				<hr>
			</div>
			<div class="row">
				<div class="small-12 columns">
					<ul class="small-block-grid-3">
						<li>
						<?php echo kirbytext($site->ahopetweet()) ?>
						</li>
						<li>
						<?php echo kirbytext($site->tumblrplus()) ?>
						</li>
						<li>
						<?php echo kirbytext($site->redditthis()) ?>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
		<div class="large-7 columns">
			<div class="row">
				<div class="small-12 columns">
				<ul class="small-block-grid-3"> 
				<li><?php echo kirbytext($site->ywaminfo()) ?></li>
				<li><?php echo kirbytext($site->photogenxinfo()) ?></li>
				<li><?php echo kirbytext($site->v4vinfo()) ?></li>
				</ul>
				</div>
			</div>
			<div class="row">
				<div class="small-12 large-centered columns copyright">
					<ul class="inline-list">
						<li><?php echo kirbytext($site->colophon()) ?></li>
						<li><?php echo kirbytext($site->tech()) ?></li>
					 </ul>
				 <class="row">
					 <?php echo kirbytext($site->copyright()) ?>
				 </class>
				</div>
			</div>
		</div>
	</div>
</footer>
  
  <?php snippet('scripts') ?>
 
</body>

</html>
