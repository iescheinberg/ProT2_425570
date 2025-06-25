<!-- Navbar -->
<nav class="navbar navbar-expand-lg bg-seccess-tertiary">
  <div class="container-fluid">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0 align-items-center">
        <li class="nav-item">
          <a class="navbar-brand text-decoration-none" href="<?= base_url('principal') ?>">
            <img class="logo" src="<?= base_url('assets/img/Logo.png') ?>" alt="Logo AS">
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('productos') ?>">Soluciones</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('nosotros') ?>">Quienes somos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('registro') ?>">Registrate</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?= base_url('login') ?>">Ya tengo cuenta</a>
        </li>

        <ul class="dropdown-menu">
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <li>
            <hr class="dropdown-divider" />
          </li>
          <li>
            <a class="dropdown-item" href="#">Something else here</a>
          </li>
        </ul>
        </li>
      </ul>
      <!-- Bienvenida + Buscador -->
      <div class="d-flex align-items-center">
        <?php if (session()->has('usuario')): ?>
          <span class="navbar-text text-white me-3">
            👤 Bienvenido, <?= session('usuario'); ?>
          </span>
          <a href="<?= base_url('logout') ?>" class="btn btn-outline-light btn-sm me-3">
            Cerrar sesión
          </a>
        <?php endif; ?>  

        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search" />
          <button class="btn btn-outline-success" type="submit">
            Buscar
          </button>
        </form>

      </div>

    </div>
  </div>
</nav>