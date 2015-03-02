
<?php get_header(); ?>

	<article class="container page">
		
		
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			
			<h2><img width="16px" src="<?php bloginfo('template_url' ); ?>/img/vineta1.png" alt=""> 

			<?php the_title(); ?></h2>
		
		
		<div class="six columns">
			
			<p><?php the_content(); ?></p>

		</div>

		<div style="margin-bottom:0px;" class="five columns">

			<?php echo do_shortcode( '[contact-form-7 id="37" title="Formulario de contacto 1"]' ); ?>
			

            
		</div>
		

		<?php endwhile; else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>

	</article>

<?php get_footer(); ?>