<header class="header">

  <div class="header__burger">
    <div></div>
    <div></div>
    <div></div>
  </div>

  <ul class="header__list">

  <?php 
  $the_query = new WP_Query( 'posts_per_page=4' );
 
  while ($the_query -> have_posts()) : $the_query -> the_post();
 
    echo '<li><a href="'. get_permalink() .'">'. get_the_title() .'</a></li>';
 
  endwhile;
  
  wp_reset_postdata();
  ?>
  
  </ul>
</header>
