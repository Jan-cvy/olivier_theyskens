
<div class="shop">

    <?php 

    if( have_rows('countries__location') ):

      echo '<ul>';

      while ( have_rows('countries__location') ) : the_row();

        echo '<li class="country">
                <div class="country_location">' . get_sub_field('location') . '</div>';

        if( have_rows('country_shops') ):

          echo '<ul class="country_shops">';

          while ( have_rows('country_shops') ) : the_row();

            echo '<li class"country_shop">';
            if( get_sub_field('country_shop_link') ){
              echo '<a href="' . get_sub_field('country_shop_link') . '" target="_blank">';
            }

            echo get_sub_field('country_shop');

            if( get_sub_field('country_shop_link') ){
              echo '</a>';            
            }
            echo '</li>';

          endwhile;

          echo '</ul>';

        endif;

        echo '</li>';

      endwhile;

      echo '</ul>';

    endif;
?>

</div>