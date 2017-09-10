<?php get_header(); ?>

    <div class="container">

	    <?php
        /*
         * For the home page, we will detect categories and display a preview
         * of 6 random items from each category
         */

        $categories = get_categories();
        foreach ($categories as $category) {
	        $args  = array(
		        'category_name'  => $category->name,
		        'posts_per_page' => 6,
		        'orderby'        => 'rand'
	        );
	        $query = new WP_Query( $args );
	        $posts = $query->get_posts();
	        ?>
            <div class="row">
                <div class="col-md-12">
                    <h1 id="<?php echo $category->name ?>" class="category-heading"><?php echo $category->name ?></h1>
                </div>
            </div>
	        <?php
            $row_count = 1;
	        $total_count = 1;
	        foreach ( $posts as $post ) {
		        // Start of row
                if ($row_count > 3) {
                    $row_count = 1;
                }
		        if ( $row_count === 1 ) {
			        echo '<div class="row">';
		        }
		        ?>

                <?php get_template_part('template-parts/content', 'item'); ?>
		        <?php
		        // End of row
		        if ( $row_count === 3 || $total_count === $query->post_count) {
			        echo '</div>';
		        }
		        $row_count++;
		        $total_count++;
	        }
        }
	    ?>
    </div>



<?php get_footer();