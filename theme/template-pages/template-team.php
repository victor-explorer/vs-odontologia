<?php

/**
 * Template Name: Equipe
 */
?>
<?php get_header(); ?>

<main id="equipe">

  <section class="wrapper internal-page-banner">
    <div class="container">
      <div class="row">
        <div class="col-xl-7">
          <div class="banner-heading">
            <h1>
              <?php the_field('acf_equipe_pageTitle'); ?>
            </h1>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="wrapper">
    <div class="container">
      <div class="text-center">
        <?php the_field('acf_equipe_section01_title'); ?>

        <?php the_field('acf_equipe_section01_content'); ?>
      </div>

      <?php if (have_rows('acf_equipe_loop')) : ?>

        <div class="my-3 row row-cols-1 row-cols-xl-2 gy-5 gx-xl-5">

          <?php while (have_rows('acf_equipe_loop')) : the_row(); ?>

            <div class="col">
              <div class="row">
                <div class="vs-card-avatar mb-4 col-xl-4">
                  <div class="vs-card-avatar-circle">
                    <div class="vs-card-avatar-mask">
                      <img src="<?php the_sub_field('acf_equipe_loop_image'); ?>" alt="">
                    </div>
                  </div>
                </div>

                <div class="vs-card-avatar col-xl">
                  <div class="vs-card-avatar-content">
                    <div class="vs-card-avatar-info">
                      <?php the_sub_field('acf_equipe_loop_cro'); ?>
                    </div>

                    <div class="vs-card-avatar-name">
                      <strong>
                        <?php the_sub_field('acf_equipe_loop_name'); ?>
                      </strong>
                    </div>

                    <div class="vs-card-avatar-role">
                      <?php the_sub_field('acf_equipe_loop_role'); ?>
                    </div>

                    <?php if (have_rows('acf_equipe_loop_list')) : ?>

                      <div class="vs-card-avatar-list">
                        <ul>

                          <?php while (have_rows('acf_equipe_loop_list')) : the_row(); ?>
                            <li>
                              <?php the_sub_field('acf_equipe_loop_list_item'); ?>
                            </li>
                          <?php endwhile; ?>

                        </ul>
                      </div>

                    <?php endif; ?>
                  </div>
                </div>
              </div>
            </div>

          <?php endwhile; ?>

        </div>

      <?php endif; ?>

    </div>
  </section>

  <?php get_template_part('partials/content', 'form'); ?>
</main>

<?php get_footer(); ?>