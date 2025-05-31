<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="shortcut icon" href="favicon/favicon.ico" type="image/x-icon">
    <title>AgroSoft Solutions</title>

    <!-- Font-Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    />
    <!-- CSS -->
    <link rel="stylesheet" href="assets/css/miestilo.css" />

    <!-- Bootstrap CSS -->
    <link
      href="assets/css/bootstrap.min.css"
      rel="stylesheet"
    />
  </head>
  <body>

    <!-- Encabezado pagina principal -->
    <header>

      <!-- Imagen Logo empresa -->
      <div class="header-top text-center text-white">
        <img
          class="header-logo my-3"
          src="assets/img/AgroSoft.png"
          alt="Banner AgroSoft"
        />
        <h1>Bienvenido a AgroSoft Solutions</h1>
        <h4>La solucion definitiva de tu campo</h4>
      </div>

      <!-- Barra de navegacion -->
      <nav class="navbar navbar-expand-lg bg-seccess-tertiary">
        <div class="container-fluid">
          <button
            class="navbar-toggler"
            type="button"
            data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="principal.html">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="acerca_de.html">Acerca de</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="quienes_somos.html">Quienes somos</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="form_registro.html">Registrate</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="login.html">Ya tengo cuenta</a>
              </li>
              
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li><hr class="dropdown-divider" /></li>
                  <li>
                    <a class="dropdown-item" href="#">Something else here</a>
                  </li>
                </ul>
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input
                class="form-control me-2"
                type="search"
                placeholder="Buscar"
                aria-label="Search"
              />
              <button class="btn btn-outline-success" type="submit">
                Buscar
              </button>
            </form>
          </div>
        </div>
      </nav>
    </header>

    <!-- Contenido principal -->
    <main>
      <section class="centrado">
        <p>
          Somos una empresa especializada en el desarrollo de software para
          agricultura de precisión, ubicada en Corrientes, Argentina. Nuestras
          soluciones tecnológicas están diseñadas para optimizar el manejo de
          cultivos, mejorar la eficiencia en el uso de recursos y aumentar la
          productividad del sector agropecuario. A través de herramientas
          innovadoras, ayudamos a productores y empresas a tomar decisiones
          basadas en datos, integrando análisis avanzados, sensores y sistemas
          inteligentes adaptados a las necesidades del campo moderno.
        </p>
        <!-- Imagen principal -->
        <picture>
          <img src="assets/img/imagen_principal.jpg" alt="Hombre en el campo" />
        </picture>
        <p>
          Comprometidos con la sostenibilidad y la innovación, nuestro objetivo
          es transformar la agricultura tradicional en una actividad más
          precisa, rentable y amigable con el medio ambiente. Trabajamos junto a
          los actores del sector para ofrecer tecnología accesible y de alto
          impacto, contribuyendo al crecimiento del agro en la región y más
          allá.
        </p>
      </section>
    </main>
    <!-- Pie de pagina -->
    <footer class="footer-content">
      <div class="footer-social">
        <a href="https://www.facebook.com" target="_blank"><i class="fa-brands fa-square-facebook"></i></a>
        <a href="https://www.instagram.com" target="_blank"><i class="fa-brands fa-instagram"></i></a>
        <a href="https://twitter.com" target="_blank"><i class="fa-brands fa-twitter"></i></a>
      </div>

      <div class="footer-info">
        <p>AgroSoft Solutions &copy; | Todos los derechos reservados</p>
      </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.bundle.min.js"></script>
  </body>
</html>
