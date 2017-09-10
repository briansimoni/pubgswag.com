<?php
get_header(); ?>

	<div class="container">

			<?php
			if ( have_posts() ) : ?>
				<?php
				/* Start the Loop */
				$row_count = 1;
				while ( have_posts() ) : the_post();
					$post = get_post();
					// Start of row
					if ($row_count > 3) {
						$row_count = 1;
					}
					if ( $row_count === 1 ) {
						echo '<div class="row">';
					} ?>

					<div class="col-lg-4">
						<div class="item-container">
							<div style="height:70px" class="amazon-item-title">
								<h2><?php echo $post->post_title ?></h2>
							</div>
							<img class="img-fluid" src="http://via.placeholder.com/350x250">
							<h3>$999.99</h3>
							<p>description</p>
							<!--                <a target="_blank" href="https://www.amazon.com/gp/product/B00006JSUA/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B00006JSUA&linkCode=as2&tag=pubgswag-20&linkId=f910cac0de9e75442680d9258e3a7ee4">Lodge Cast Iron Skillet, Pre-Seasoned, 10.25-inch</a><img src="//ir-na.amazon-adsystem.com/e/ir?t=pubgswag-20&l=am2&o=1&a=B00006JSUA" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />-->
							<button class="btn btn-primary">Buy</button>
						</div>
					</div>

					<?php
					// End of row
					if ( $row_count === 3) {
						echo '</div>';
					}
					$row_count++;
					?>



				<?php
				endwhile;
				if ($row_count !== 4) {
					echo '</div>';
				}
			endif; ?>

	</div>

<?php
get_footer();