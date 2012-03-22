<?php /* If there are no posts to display, such as an empty archive page */ ?>
<?php if ( ! have_posts() ) : ?>
	<div id="post-0" class="post error404 not-found">
		<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>
		<div class="entry-content">
			<p><?php _e( 'Apologies, but no results were found for the requested archive. Perhaps searching will help find a related post.', 'twentyten' ); ?></p>
			<?php get_search_form(); ?>
		</div><!-- .entry-content -->
	</div><!-- #post-0 -->
<?php endif; ?>


<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

  <div class="post">
    <h1><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h1>
    <span class="date"><?php the_time('l, F jS, Y') ?></span>
    <?php if (in_category('photos')) { // If a photo/video ?>
      <figure>
        <?php the_content(); ?>
        <figcaption>
          <?php echo get_post_meta($post->ID, 'caption', true) ?>
        </figcaption>
      </figure>
    <?php } elseif (in_category('quotes')) { // If a quote ?>
      <figure>
        <blockquote>
          <p><?php echo get_post_meta($post->ID, 'quote', true) ?></p>
        </blockquote>
        <figcaption>
          <?php echo get_post_meta($post->ID, 'caption', true) ?>
        </figcaption>
      </figure>
      <?php the_content(); ?>
    <?php } else { // If a regular post ?>
      <?php the_content(); ?>
    <?php } ?>
  </div>

<?php endwhile; ?>


<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<ul class="pagination">
		<li class="older"><?php next_posts_link('<span>&#x261C;</span> Older'); ?></li>
		<li class="newer"><?php previous_posts_link('<span>&#x261E;</span> Newer</a>'); ?></li>
	</ul><!-- #nav-above -->
<?php endif; ?>