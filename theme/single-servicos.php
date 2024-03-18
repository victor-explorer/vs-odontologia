<?php
$args = array(
  'page_title' => get_field('acf_tratamento_pageTitle')
)
?>

<?php get_header(); ?>

<main id="<?php the_title(); ?>" class="vs-services">
  <?php get_template_part('partials/content', 'banner', $args); ?>
  <section class="wrapper">
    <div class="container">

      <?php the_field('acf_tratamento_content'); ?>


      <?php if (get_field('acf_tratamento_gallery_toggle_switch')) {
      ?>

        <?php if (have_rows('acf_tratamento_gallery_loop')) : ?>
          <!-- Carrossel Galeria -->
          <div class="vs-gallery-carousel mt-5 mb-4 my-xl-5">
            <?php while (have_rows('acf_tratamento_gallery_loop')) : the_row(); ?>
              <div>
                <div class="vs-gallery">
                  <div class="vs-gallery-item">
                    <img src="<?php the_sub_field('acf_tratamento_gallery_loop_image'); ?>" alt="">
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
          <!-- Fim Carrossel Galeria -->
        <?php endif; ?>

      <?php  }  ?>

      <?php if (get_field('acf_tratamento_video_toggle_switch')) {
      ?>
        <div class="row justify-content-center my-5">
          <div class="col-xl-8 mt-5 mt-xl-0">
            <div class="video-container">
              <iframe class="video" src="<?php the_field('acf_tratamento_video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;" allowfullscreen></iframe>
            </div>
          </div>
        </div>
      <?php } ?>

      <div class="text-center">
        <a href="https://wa.me/5511914155003" aria-label="Chat no WhatsApp" target="_blank" role="button" class="vs-button">
          AGENDE SUA CONSULTA
        </a>
      </div>
    </div>
  </section>

  <?php get_template_part('partials/content', 'form'); ?>

</main>

<?php get_footer(); ?>