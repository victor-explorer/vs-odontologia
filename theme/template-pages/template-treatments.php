<?php

/**
 * Template Name: Tratamentos
 */
?>
<?php
$args = array(
  'page_title' => 'tudo o que seu <em>sorriso precisa</em>'
)
?>

<?php get_header(); ?>

<main id="tratamentos">
  <?php get_template_part('partials/content', 'banner', $args); ?>

  <section class="wrapper text-center">
    <div class="container">
      <h2>TRATAMENTOS</h2>
      <p>
        Na VS Odontologia você conta com uma equipe especializada para diagnosticar exatamente o que seu sorriso necessita.
      </p>

      <!-- Carrossel -->
      <div class="mt-4 mb-5 my-xl-5">
        <div class="row row-cols-1 row-cols-xl-4 gx-xl-4 gy-5">

          <div class="col">
            <div class="vs-card-w-link">
              <div class="vs-card-asset">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/clinica.svg'; ?>" alt="">
              </div>
              <div class="vs-card-info">
                <div class="vs-card-title">
                  <strong>
                    Clínica Geral
                  </strong>
                </div>

              </div>
              <div class="vs-card-link">
                <a href="clinica">
                  Saiba mais
                </a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="vs-card-w-link">
              <div class="vs-card-asset">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/implantodontia.svg'; ?>" alt="">
              </div>
              <div class="vs-card-info">
                <div class="vs-card-title">
                  <strong>
                    Implantodontia
                  </strong>
                </div>

              </div>
              <div class="vs-card-link">
                <a href="implantodontia">
                  Saiba mais
                </a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="vs-card-w-link">
              <div class="vs-card-asset">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/protese.svg'; ?>" alt="">
              </div>
              <div class="vs-card-info">
                <div class="vs-card-title">
                  <strong>
                    Prótese
                  </strong>
                </div>

              </div>
              <div class="vs-card-link">
                <a href="protese">
                  Saiba mais
                </a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="vs-card-w-link">
              <div class="vs-card-asset">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/ortodontia.svg'; ?>" alt="">
              </div>
              <div class="vs-card-info">
                <div class="vs-card-title">
                  <strong>
                    Ortodontia
                  </strong>
                </div>

              </div>
              <div class="vs-card-link">
                <a href="ortodontia">
                  Saiba mais
                </a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="vs-card-w-link">
              <div class="vs-card-asset">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/endodontia.svg'; ?>" alt="">
              </div>
              <div class="vs-card-info">
                <div class="vs-card-title">
                  <strong>
                    Endodontia
                  </strong>
                </div>

              </div>
              <div class="vs-card-link">
                <a href="endodontia">
                  Saiba mais
                </a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="vs-card-w-link">
              <div class="vs-card-asset">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/periodontia.svg'; ?>" alt="">
              </div>
              <div class="vs-card-info">
                <div class="vs-card-title">
                  <strong>
                    Periodontia
                  </strong>
                </div>

              </div>
              <div class="vs-card-link">
                <a href="periodontia">
                  Saiba mais
                </a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="vs-card-w-link">
              <div class="vs-card-asset">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/estetica.svg'; ?>" alt="">
              </div>
              <div class="vs-card-info">
                <div class="vs-card-title">
                  <strong>
                    Estética
                  </strong>
                </div>

              </div>
              <div class="vs-card-link">
                <a href="estetica">
                  Saiba mais
                </a>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="vs-card-w-link">
              <div class="vs-card-asset">
                <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/cirurgia.svg'; ?>" alt="">
              </div>
              <div class="vs-card-info">
                <div class="vs-card-title">
                  <strong>
                    Cirurgia
                  </strong>
                </div>

              </div>
              <div class="vs-card-link">
                <a href="cirurgia">
                  Saiba mais
                </a>
              </div>
            </div>
          </div>

        </div>
      </div>

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