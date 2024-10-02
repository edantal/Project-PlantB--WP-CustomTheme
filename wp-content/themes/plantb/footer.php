    <!-- SECTION: CTA -->
    <?php if( !is_page(76)) : ?>
      <section class="section section__cta background--green">
        <div class="container">
          <div class="cta__action">
            <h5>Let's Talk About <span>Your Expansion into Israel</span></h5>
            <a class="btn btn__ghost--yellow" href="/contact">Get in touch</a>
          </div>
        </div>
      </section>
    <?php endif; ?>

    
    <!-- FOOTER -->
    <footer>
      <div class="container grid grid--2-cols">
        <div class="footer__content">
          <?php
            wp_nav_menu(array(
              'theme_location' => 'footerMenu1_loc',
              'menu_class'     => 'footer__nav',
            ));
          ?>
          <div class="footer__copyright">
            <p>Copyright &copy; <?php echo date("Y"); ?> <?php echo wp_get_theme()->get('Name'); ?></p>
          </div>
          <!-- <div class="footer__design">
            <p>Design by <a href="https://www.plain.co.il/" target="_blank">Plain.co.il</a></p>
          </div> -->
        </div>
        <div class="footer__icon">
          <img src="<?php echo get_theme_file_uri('/assets/images/logo/plantb-footer-icon.svg'); ?>" alt="PlantB icon">
        </div>

        <!-- <div class="">
          <ul class="footer__social">
            <?php //if(get_theme_mod('theme_fb_link') != '') : ?>
              <li><a href="<?php //echo $GLOBALS['contact_fb']; ?>" target="_blank" role="button"><i class="fab fa-facebook"></i></a></li>
            <?php //endif; ?>
            <?php //if(get_theme_mod('theme_tw_link') != '') : ?>
              <li><a href="<?php //echo $GLOBALS['contact_tw']; ?>" target="_blank" role="button"><i class="fab fa-twitter"></i></a></li>
            <?php //endif; ?>
            <?php //if(get_theme_mod('theme_li_link') != '') : ?>
              <li><a href="<?php //echo $GLOBALS['contact_li']; ?>" target="_blank" role="button"><i class="fab fa-linkedin"></i></a></li>
            <?php //endif; ?>
            <?php //if(get_theme_mod('theme_ig_link') != '') : ?>
              <li><a href="<?php //echo $GLOBALS['contact_ig']; ?>" target="_blank" role="button"><i class="fab fa-instagram"></i></a></li>
            <?php //endif; ?>
            <?php //if(get_theme_mod('theme_yt_link') != '') : ?>
              <li><a href="<?php //echo $GLOBALS['contact_yt']; ?>" target="_blank" role="button"><i class="fab fa-youtube"></i></a></li>
            <?php //endif; ?>
          </ul>
        </div> -->
      </div>
      
    </footer>

    <?php wp_footer(); ?>
  </body>
</html>
