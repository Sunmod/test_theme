    <section>
        <div class="links__block">
                <a class="instagram" href="<?php the_field('instagram_link'); ?>"></a>
                <a class="telegram" href="<?php the_field('telegram_link'); ?>"></a>
                <a class="google" href="<?php the_field('google_link'); ?>"></a>
        </div>
        <footer class="footer__container">
            <?php the_custom_logo();?>
            <nav>
                <a href="#1">Footer link 1</a>
                <a href="#2">Footer link 2</a>
                <a href="#3">Footer link 3</a>
            </nav>
            <a class="logo_tel" href="tel:<?php the_field('phone_work ');?>"><?php the_field('phone');?></a>
        </footer>
    </section>
</body>
</html>