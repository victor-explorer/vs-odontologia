<?php get_header(); ?>

<main>
  <section class="wrapper home-banner">
    <div class="container">
      <div class="row">
        <div class="col-xl-7">
          <div class="home-banner-heading">
            <?php the_field('acf_home_pageTitle'); ?>
          </div>
          <div class="home-banner-background-helper"></div>
        </div>

        <div class="col-12">
          <div class=" row justify-content-xl-between align-items-center">
            <div class="col-xl-6 order-xl-last">
              <h2 class="home-banner-subheading">
                <?php the_field('acf_home_section01_title'); ?>
              </h2>
              <p>
                <?php the_field('acf_home_section01_content'); ?>
              </p>
              <a href="#contato" role="button" class="vs-button mt-xl-4">
                QUERO AGENDAR UMA CONSULTA
              </a>
            </div>

            <div class="col-xl-5 pt-5 pt-xl-0">
              <img src="<?php echo get_template_directory_uri() . '/assets/images/img-home-1.webp'; ?>" alt="" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="wrapper text-center">
    <div class="container">

      <?php the_field('acf_home_section02_title'); ?>

      <?php if (have_rows('acf_tratamentos_loop', 12)) : ?>
        <!-- Carrossel -->
        <div class="mt-4 mb-5 my-xl-5 carousel-tratamentos">
          <?php while (have_rows('acf_tratamentos_loop', 12)) : the_row(); ?>
            <div>
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

                  <div class="vs-card-content">
                    <p>
                      <?php the_sub_field('acf_tratamentos_loop_content'); ?>
                    </p>
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
        <!-- Fim Carrossel -->
      <?php endif; ?>

      <div class="pt-xl-4">
        <a href="tratamentos" role="button" class="vs-button">
          CONHEÇA NOSSOS TRATAMENTOS
        </a>
      </div>

    </div>
  </section>

  <section>
    <div class="container">
      <a href="https://www.youtube.com/watch?v=W3q_zHmSX8s&t=8s" target="_blank">
        <picture class="d-flex justify-content-center">
          <source media="(min-width:1200px)" srcset="<?php echo get_template_directory_uri() . '/assets/images/img-banner-intraoral-desktop.webp'; ?>">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/img-banner-intraoral.webp'; ?>" alt="ESCANEAMENTO INTRAORAL Tecnologia de ponta para atender 100% da sua necessidade" class="img-fluid">
        </picture>
      </a>
    </div>
  </section>

  <section class="wrapper">
    <div class="container">
      <div class="row align-items-center justify-content-between">
        <div class="col-xl-5">
          <?php the_field('acf_home_section04_title'); ?>

          <div>
            <?php the_field('acf_home_section04_content'); ?>
          </div>
        </div>

        <div class="col-xl-6 mt-5 mt-xl-0">
          <div class="video-container">
            <iframe class="video" src="<?php the_field('acf_home_section04_video'); ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope;" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="vs-about">
    <div class="vs-about-bg-container">
      <div class="container">
        <div class="row justify-content-xl-between">
          <div class="col-xl-7 order-xl-last">
            <h3 class="vs-about-heading text-start">
              <?php the_field('acf_home_section05_title'); ?>
            </h3>

            <div>
              <?php the_field('acf_home_section05_content'); ?>
            </div>
          </div>

          <div class="col-xl-4 d-none d-xl-block">
          </div>
        </div>
      </div>
    </div>

    <div class="col-xl-4 vs-about-image-container">
      <div class="vs-about-image"></div>
    </div>
  </section>

  <section class="wrapper text-center">
    <div class="container">
      <?php the_field('acf_home_section06_title'); ?>

      <?php if (have_rows('acf_equipe_loop', 8)) : ?>
        <!-- Carrossel Card Avatar -->
        <div class="my-5 carousel-avatar">

          <?php while (have_rows('acf_equipe_loop', 8)) : the_row(); ?>

            <div>
              <div class="vs-card-avatar">
                <div class="vs-card-avatar-circle">
                  <div class="vs-card-avatar-mask">
                    <img src="<?php the_sub_field('acf_equipe_loop_image'); ?>" alt="">
                  </div>
                </div>

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
                </div>
              </div>
            </div>

          <?php endwhile; ?>

        </div>
        <!-- Fim Carrossel Card Avatar -->
      <?php endif; ?>

      <div>
        <a href="equipe" role="button" class="vs-button">
          CONHEÇA O TIME VS ODONTOLOGIA
        </a>
      </div>

    </div>
  </section>

  <section class="wrapper vs-values">
    <div class="container">
      <div class="row">
        <div class="col-12 col-xl-6">
          <h3 class="pe-3 pe-xl-0 mb-3 vs-values-heading">
            <?php the_field('acf_home_section07_title'); ?>
          </h3>

          <div class="vs-values-content">
            <?php the_field('acf_home_section07_content'); ?>
          </div>

          <div class="vs-values-image d-block d-xl-none">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/img-values.webp'; ?> " alt="Mulher sorrindo">
          </div>
        </div>

        <div class="col-xl-6 d-none d-xl-block">
          <div class="vs-values-image">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/img-values.webp'; ?> " alt="Mulher sorrindo">
          </div>
        </div>

        <div class="col-12" id="estrutura">
          <?php the_field('acf_home_section08_title'); ?>

          <?php the_field('acf_home_section08_content'); ?>

          <?php if (have_rows('acf_home_section08_loop')) : ?>
            <!-- Carrossel Galeria -->
            <div class="vs-gallery-carousel mt-5 mb-4 my-xl-5">
              <?php while (have_rows('acf_home_section08_loop')) : the_row(); ?>

                <div>
                  <div class="vs-gallery">
                    <div class="vs-gallery-item">
                      <img src="<?php the_sub_field('acf_home_section08_loop_image'); ?>" alt="" data-fancybox="estrutura">
                    </div>
                  </div>
                </div>

              <?php endwhile; ?>

            </div>
            <!-- Fim Carrossel Galeria -->
          <?php endif; ?>
        </div>

        <div class="text-center">
          <a href="equipe" role="button" class="vs-button">
            CONHEÇA O TIME VS ODONTOLOGIA
          </a>
        </div>
      </div>
    </div>
  </section>

  <section class="wrapper text-center vs-testimonials">
    <div class="container">
      <?php the_field('acf_home_section09_title'); ?>

      <?php the_field('acf_home_section09_content'); ?>

      <?php if (have_rows('acf_home_section09_loop')) : ?>
        <!-- Carrossel Depoimentos -->
        <div class="mt-4 mb-5 my-xl-5 carousel-testimonial">
          <?php while (have_rows('acf_home_section09_loop')) : the_row(); ?>
            <div>
              <div class="vs-card-testmonial">
                <div class="vs-card-avatar">
                  <div class="vs-card-avatar-circle">
                    <div class="vs-card-avatar-mask">
                      <img src="<?php the_sub_field('acf_home_section09_loop_image'); ?>" alt="">
                    </div>
                  </div>
                </div>

                <div class="vs-card-testimonial-content">
                  <?php the_sub_field('acf_home_section09_loop_message'); ?>
                </div>

                <div class="vs-card-testimonial-author">
                  <?php the_sub_field('acf_home_section09_loop_name'); ?>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        </div>
        <!-- Fim Carrossel Depoimentos -->
      <?php endif; ?>

      <div>
        <a href="#contato" role="button" class="vs-button--light">
          AGENDE SUA CONSULTA
        </a>
      </div>
    </div>
  </section>

  <?php get_template_part('partials/content', 'form'); ?>

</main>

<?php get_footer(); ?>