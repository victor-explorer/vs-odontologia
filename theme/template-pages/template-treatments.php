<?php

/**
 * Template Name: Tratamentos
 */
?>
<?php
$args = array(
  'page_title' => get_field('acf_tratamentos_pageTitle')
)
?>

<?php get_header(); ?>

<main id="tratamentos">
  <?php get_template_part('partials/content', 'banner', $args); ?>

  <section class="wrapper text-center">
    <div class="container">
      <?php the_field('acf_tratamentos_section01_title'); ?>

      <?php the_field('acf_tratamentos_section01_content'); ?>

      <?php if (have_rows('acf_tratamentos_loop')) : ?>
        <!-- Carrossel -->
        <div class="mt-4 mb-5 my-xl-5">
          <div class="row row-cols-1 row-cols-xl-4 gx-xl-4 gy-5">

            <?php while (have_rows('acf_tratamentos_loop')) : the_row(); ?>
              <div class="col">
                <div class="vs-card-w-link">
                  <div class="vs-card-asset">
                    <img src="<?php the_sub_field('acf_tratamentos_loop_icon'); ?>" alt="">
                  </div>

                  <div class="vs-card-info">
                    <div class="vs-card-title">
                      <strong>
                        <?php the_sub_field('acf_tratamentos_loop_content_title'); ?>
                      </strong>
                    </div>

                  </div>
                  <div class="vs-card-link">
                    <a href="<?php the_sub_field('acf_tratamentos_loop_link'); ?>">
                      Saiba mais
                    </a>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          </div>
        </div>
      <?php endif; ?>

      <div class="pt-xl-4">
        <a href="#contato" role="button" class="vs-button">
          QUERO AGENDAR UMA CONSULTA
        </a>
      </div>

    </div>
  </section>

  <?php get_template_part('partials/content', 'form'); ?>

</main>


<?php get_footer(); ?>