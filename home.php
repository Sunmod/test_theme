<?php
/*
TempLate Name: home
*/
?>

<?php get_header(); ?>   

<div class="container">
   <section>
      <h1>Секция 1</h1>
   </section>
   <section>
      <h2>Секция 2</h2>
   </section>
   <section>
      <h2>Секция с котятами!</h2>
      <img width="500px" src="<?php bloginfo('template_url');?>/assets/images/kit1.jpg" alt="">
      <img width="500px" src="<?php bloginfo('template_url');?>/assets/images/kit2.jpg" alt="">
      <img width="500px" src="<?php bloginfo('template_url');?>/assets/images/kit3.jpg" alt="">
      <img width="500px" src="<?php bloginfo('template_url');?>/assets/images/kit4.jpg" alt="">
   </section>
   <section>
      <h3>Редактирование записей</h2>
      <div class="block__container">
            <?php
               global $post;

               $myposts = get_posts([
                  'numberposts' => -1
               ]);

               if ($myposts) {
                  foreach( $myposts as $post) {
                        setup_postdata($post);
                        ?>

                        <div class="block">
                           <?php the_post_thumbnail(
                              array(550, 300),
                              array('class' => 'block__img')
                           ); ?>
                          
                           <div>
                              <h3><?php the_title(); ?></h3>
                              <p><?php the_content(); ?></p>
                           </div>
                        </div>

                        <?php
                  }
               }

               wp_reset_postdata(); 
            ?>
      </div>
   </section>
   </div>

   <?php get_footer(); ?>