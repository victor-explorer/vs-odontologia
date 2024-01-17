<header>
  <div class="container header">
    <!-- Logo -->
    <a class="logo" href="index.php" tabindex="0">
      <img src="assets/images/logo.png" alt="VS Odontologia">
    </a>
    <!-- End Logo -->

    <!-- Desktop Menu -->
    <nav>
      <a href="equipe.php" tabindex="0">Equipe</a>
      <a href="tratamentos.php" tabindex="0">Tratamentos</a>
      <a href="privacidade.php" tabindex="0">Política de Privacidade</a>
      <a href="contato.php" tabindex="0">Contato</a>
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
        <a href="equipe.php" onclick="closeMobileMenu()">Equipe</a>
        <a href="tratamentos.php" onclick="closeMobileMenu()">Tratamentos</a>
        <a href="privacidade.php" onclick="closeMobileMenu()">Política de privacidade</a>
        <a href="contato.php" onclick="closeMobileMenu()">Contato</a>
      </div>
    </div>

    <div class="overlay"></div>
    <!--End Mobile Menu  -->
  </div>
</header>