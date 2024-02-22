<?php
$args = array(
  'page_title' => get_field('acf_tratamento_pageTitle')
)
?>

<?php get_header(); ?>

<main id="<?php the_title(); ?>">
  <?php get_template_part('partials/content', 'banner', $args); ?>
  <section class="wrapper">
    <div class="container">

      <?php the_field('acf_tratamento_content'); ?>


      <?php
        if (get_field('acf_tratamento_gallery_toggle_switch')) {
          echo '<p>' . 'Galeria' . '</p>';
        }
      ?>

      <?php
        if (get_field('acf_tratamento_video_toggle_switch')) {
          echo '<p>' . 'Vídeo' . '</p>';
        }
      ?>

      <div class="text-center">
        <a href="https://wa.me/5511914155003" aria-label="Chat no WhatsApp" target="_blank" role="button" class="vs-button">
          AGENDE SUA CONSULTA
        </a>
      </div>

      <?php get_template_part('partials/content', 'form'); ?>
    </div>
  </section>

</main>

<?php get_footer(); ?>