<footer class="footer">
  <div class="footer__container">
    <ul class="footer__links">
      <li><a href="mailto:info@oliviertheyskens.com">Info</a></li>
      <li><a href="<?php echo get_permalink( 6 ); ?>">Shops</a></li>
      <li><?php 
        $the_query = new WP_Query( 'posts_per_page=1' );
       
        while ($the_query -> have_posts()) : $the_query -> the_post();
       
          echo '<a href="'. get_permalink() .'">'. get_the_title() .'</a>';
       
        endwhile;
        
        wp_reset_postdata();
        ?></li>
      <li><a href="mailto:press@oliviertheyskens.com">Press</a></li>
    </ul>
  </div>
</footer>
