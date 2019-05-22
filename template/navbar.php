<header class="main-header">
    <nav class="navbar navbar-static-top">
      <div class="container">
        <div class="navbar-header">
          <a href=<?= BASE_URL; ?> class="navbar-brand"><b>Home</b></a>
        </div>
        <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Alur Administrasi<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href=<?= BASE_URL . '/alur/pembayaran'; ?> >Pembayaran Semerster</a></li>
                <li class="divider"></li>
                <li><a href=<?= BASE_URL . '/alur/krs'; ?>>KRS</a></li>
                <li class="divider"></li>
                <li><a href=<?= BASE_URL . '/alur/khs'; ?>>KHS</a></li>
              </ul>
            </li>

            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">Info Gedung Fakultas Teknik<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href=<?= BASE_URL . '/lantai/1';?>>Gedung D dan C Lantai 1</a></li>
                <li class="divider"></li>
                <li><a href=<?= BASE_URL . '/lantai/2';?>>Gedung D dan C Lantai 2</a></li>
                <li class="divider"></li>
                <li><a href=<?= BASE_URL . '/lantai/3';?>>Gedung D dan C Lantai 3</a></li>
              </ul>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
  <div class="wrapper">
    <div class="content-wrapper">
      <div class="container">
        <section class="content">