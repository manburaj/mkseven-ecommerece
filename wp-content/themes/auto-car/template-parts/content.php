<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package auto-car
 */

global $post;
$auto_car_settings = auto_car_get_theme_options();
$blog_meta = $auto_car_settings['auto_car_entry_meta_blog'];
$post_format = get_post_format($post->ID);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php  
if($post_format == 'gallery'){
	auto_car_blog_post_format($post_format, $post->ID); }?>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;

		if ( 'post' === get_post_type() && ($blog_meta == 'show-meta') ) :
			?>
			<div class="entry-meta">
				<?php
				auto_car_posted_on();
				auto_car_posted_by();
				?>
			</div><!-- .entry-meta -->
		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php auto_car_post_thumbnail(); ?>

	<div class="entry-content">
		<?php
        if(is_single()){
            		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'auto-car' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );
        }
        else{
            echo wp_kses_post(auto_car_get_excerpt($post->ID,400 ));
        }


		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'auto-car' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
        <?php         if(!is_single()){
        ?>
        <a class="more-link" title="" href="<?php echo esc_url(get_the_permalink()) ?>"><?php echo esc_html__('Read More','auto-car');?></a>
		<?php } //auto_car_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
