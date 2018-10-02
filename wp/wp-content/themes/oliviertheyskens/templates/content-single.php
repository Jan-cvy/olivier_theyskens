<?php while (have_posts()) : the_post(); ?>
  <video class="single__video contain" src="<?php echo get_field('video'); ?>" autoplay muted></video>
<?php endwhile; ?>
