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
      <a href="#contato" tabindex="0">Contato</a>
      <a href="https://www.instagram.com/dra.vanessasalomao/" tabindex="0" aria-label="Perfil no Instagram" target="_blank" class="ms-3">
        <img src="../vs-odontologia/assets/images/icons/instagram.svg" alt="" class="img-fluid" width="30" height="30">
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
        <a href="equipe.php" onclick="closeMobileMenu()">Equipe</a>
        <a href="tratamentos.php" onclick="closeMobileMenu()">Tratamentos</a>
        <a href="privacidade.php" onclick="closeMobileMenu()">Política de privacidade</a>
        <a href="#contato" onclick="closeMobileMenu()">Contato</a>
        <a href="https://www.instagram.com/dra.vanessasalomao/" tabindex="0" aria-label="Perfil no Instagram" target="_blank" onclick="closeMobileMenu()">
        <img src="../vs-odontologia/assets/images/icons/instagram.svg" alt="" class="img-fluid" width="30" height="30">
      </a>
      </div>
    </div>

    <div class="overlay"></div>
    <!--End Mobile Menu  -->
  </div>
</header>