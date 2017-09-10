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

					<?php get_template_part('template-parts/content', 'item'); ?>

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