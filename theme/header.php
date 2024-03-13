<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        ‘
        gtm.start’: new Date().getTime(),
        event: ‘gtm.js’
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != ‘dataLayer’ ? ‘ & l = ‘+l : ‘’;
      j.async = true;
      j.src = ’https: //www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window, document, ‘script’, ‘dataLayer’, ‘GTM - PTWRHQ7’);
  </script>
  <!-- End Google Tag Manager -->

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src=“ns ” height="0 " width="0" style=“display:none;visibility:hidden”></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  
  <header>
    <div class="container header">
      <!-- Logo -->
      <a class="logo" href="<?php echo get_home_url(); ?>" tabindex="0">
        <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>" alt="VS Odontologia">
      </a>
      <!-- End Logo -->

      <!-- Desktop Menu -->
      <nav>
        <a href="https://vsodontologia.com/equipe/" tabindex="0">Equipe</a>
        <a href="https://vsodontologia.com/tratamentos/" tabindex="0">Tratamentos</a>
        <a href="https://vsodontologia.com#estrutura" tabindex="0">O Consultório</a>
        <a href="https://vsodontologia.com/privacidade/" tabindex="0">Política de Privacidade</a>
        <a href="#contato" tabindex="0">Contato</a>
        <a href="https://www.instagram.com/dra.vanessasalomao/" tabindex="0" aria-label="Perfil no Instagram" target="_blank" class="ms-3">
          <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/instagram.svg'; ?>" alt="" class="img-fluid" width="30" height="30">
        </a>
      </nav>
      <!-- End Desktop Menu -->

      <!-- Mobile Menu -->
      <div id="menu-trigger" class="mobile-menu-trigger" onclick="openMobileMenu()">
        <span class="top"></span>
        <span class="middle"></span>
        <span class="bottom"></span>
      </div>

      <div id="mobileMenu" class="mobile-menu">
        <div class="nav-links-wrapper">
          <a href="javascript:void(0)" class="close-menu-button" onclick="closeMobileMenu()">&times;</a>
          <a href="https://vsodontologia.com/equipe" onclick="closeMobileMenu()">Equipe</a>
          <a href="https://vsodontologia.com/tratamentos/" onclick="closeMobileMenu()">Tratamentos</a>
          <a href="https://vsodontologia.com#estrutura" onclick="closeMobileMenu()">O Consultório</a>
          <a href="https://vsodontologia.com/privacidade/" onclick="closeMobileMenu()">Política de privacidade</a>
          <a href="#contato" onclick="closeMobileMenu()">Contato</a>
          <a href="https://www.instagram.com/dra.vanessasalomao/" tabindex="0" aria-label="Perfil no Instagram" target="_blank" onclick="closeMobileMenu()">
            <img src="<?php echo get_template_directory_uri() . '/assets/images/icons/instagram.svg'; ?>" alt="" class="img-fluid" width="30" height="30">
          </a>
        </div>
      </div>

      <div class="overlay"></div>
      <!--End Mobile Menu  -->
    </div>
  </header>