<?php ?>
<div class="col-lg-4">
	<div class="item-container">
		<div style="height:70px" class="amazon-item-title">
			<h2><?php echo $post->post_title ?></h2>
		</div>
<!--		<img class="img-fluid" src="http://via.placeholder.com/350x250">-->
        <?php if (has_post_thumbnail($post)) { ?>
            <?php echo get_the_post_thumbnail($post, array(350,250), array('class' => 'img-fluid')) ?>
        <?php } else {
            echo '<img class="img-fluid" src="http://via.placeholder.com/350x250">';
        } ?>
<!--		<h3 class="price">$--><?php ////the_field('price', $post->ID) ?><!--</h3>-->
        <h3 class="price">See Price on Amazon</h3>
        <p><?php echo $post->post_content ?></p>
        <a class="amazon-link" data-amazon-item="<?php echo $post->post_title ?>" target="_blank" href="<?php the_field('amazon_link', $post->ID)?>">
            <img src="<?php echo get_template_directory_uri() . '/images/amazon-button.gif'?>">
        </a>
	</div>
</div>