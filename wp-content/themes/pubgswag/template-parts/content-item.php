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
		<h3><?php the_field('price', $post->ID) ?></h3>
		<p>description</p>
		<!--                <a target="_blank" href="https://www.amazon.com/gp/product/B00006JSUA/ref=as_li_tl?ie=UTF8&camp=1789&creative=9325&creativeASIN=B00006JSUA&linkCode=as2&tag=pubgswag-20&linkId=f910cac0de9e75442680d9258e3a7ee4">Lodge Cast Iron Skillet, Pre-Seasoned, 10.25-inch</a><img src="//ir-na.amazon-adsystem.com/e/ir?t=pubgswag-20&l=am2&o=1&a=B00006JSUA" width="1" height="1" border="0" alt="" style="border:none !important; margin:0px !important;" />-->
        <a href="<?php the_field('amazon_link', $post->ID)?>">
            <button class="btn btn-primary">
                <img src="<?php echo get_template_directory_uri() . '/images/amazon-glyph.png'?>">
                Buy
            </button>
        </a>
	</div>
</div>