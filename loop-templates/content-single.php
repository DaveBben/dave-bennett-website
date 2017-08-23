<?php

/**
 * Single post partial template.
 *
 * @package understrap
 */

?>
<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<header class="entry-header">

		<div class="banner_ads">
<!-- DaveBennett_Banner -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:90px"
     data-ad-client="ca-pub-6594501022141871"
     data-ad-slot="9189728122"></ins>
</div>
<div class="banner_ads_mobile">
<!-- DaveBennett_Banner_mobile -->
<ins class="adsbygoogle"
     style="display:inline-block;width:320px;height:100px"
     data-ad-client="ca-pub-6594501022141871"
     data-ad-slot="1666461326"></ins>
</div>

		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		<div class="post_meta">
				<div class="read-time">
				<i class="fa fa-clock-o" aria-hidden="true"></i>&nbsp;<?php echo read_time(); ?>
			</div><!-- .entry-meta -->
			<div class="entry-meta">
				<?php understrap_posted_on(); ?>
			</div><!-- .entry-meta -->
			</div>

	</header><!-- .entry-header -->
			<?php $yt = get_post_meta(get_the_ID(), 'my_meta_box_text', true);
				if (isset($yt) && $yt !== '') { ?>
					<div class="embed-responsive embed-responsive-16by9"><iframe class="embed-responsive-item" src="" width="300" height="150" allowfullscreen="allowfullscreen" data-src="//www.youtube.com/embed/<?php echo $yt ?> "></iframe></div>
					<?php 
				}
				else{
					 echo get_the_post_thumbnail( $post->ID, 'full' ); 
					
				}
			?>

<div class="banner_ads">
	<!-- In page Links -->
	<ins class="adsbygoogle"
		style="display:inline-block;width:728px;height:15px"
		data-ad-client="ca-pub-6594501022141871"
		data-ad-slot="8591837725"></ins>
	</div>
	<div class="banner_ads_mobile">
	<!-- Responsive Link Ads -->
		<ins class="adsbygoogle"
		style="display:block"
		data-ad-client="ca-pub-6594501022141871"
		data-ad-slot="6223025728"
		data-ad-format="link"></ins>
	</div>
	<hr>

	<div class="entry-content">

		<?php the_content(); ?>

		<?php
		wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
			'after'  => '</div>',
		) );
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
