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

      <!-- запускается цикл вывода постов -->
            <?php
               global $post;

               $myposts = get_posts([
                  'numberposts' => -1
               ]);
      // проверяется, есть ли посты в вордпрессе
               if ($myposts) {
                  foreach( $myposts as $post) {
                        setup_postdata($post);
                        ?>
      <!-- запускается сам цикл по шаблону ниже -->
                        <div class="block">
                           <!-- изображения, где array - атрибуты и свойства изображения -->
                           <?php the_post_thumbnail(
                              array(550, 300),
                              array('class' => 'block__img')
                           ); ?>
                          <!-- сам контент (заголовок и текст основной) -->
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
   <section>
      <form>
         <h2>Контакты</h2>
         <input class="contact__input" type="text" placeholder="Имя">
         <input class="contact__input" type="tel" placeholder="Телефон">
         <button class="contact__btn" type="submit">Отправить</button>
      </form>
   </section>
   </div>

   <?php get_footer(); ?>