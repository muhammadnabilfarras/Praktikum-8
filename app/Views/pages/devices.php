<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.84.0">
    <title>Album example · Bootstrap v5.0</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/album/">
    <!-- Bootstrap core CSS -->
    <link href="../assets/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
  </head>
  <body>
    <header>
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="/">Monitoring IoT</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="/">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/device">Device</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="/device-details">Barang</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <main>
      <section class="py-5 text-center container">
        <div class="row py-lg-5">
          <div class="col-lg-6 col-md-8 mx-auto">
            <h1 class="fw-light">All Devices here</h1>
            <p class="lead text-muted">Disinilah list dimana barang - barang tersimpan.</p>
          </div>
        </div>
      </section>
      <div class="album py-5 bg-light">
        <div class="container">
          <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
            <div class="col">
              <div class="card shadow-sm">
                <img src="/img/arduino.jpg" height="250px" width="250px" alt="">
                <div class="card-body">
                  <p class="card-text"><strong>Arduino</strong></p>
                  <p>Genuino</p>
                  <p>19</p>
                  <div class="d-grip gap-2">
                    <button class="btn btn-primary" type="button"><span>Back to Home</span></button>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="/img/komputer.png" alt="">
                <div class="card-body">
                <p class="card-text"><strong>Komputer</strong></p>
                  <p>Samsung</p>
                  <p>20</p>
                  <div class="d-grip gap-2">
                    <button class="btn btn-primary" type="button"><span>Back to Home</span></button>
                  </div>
                    <small class="text-muted">9 mins</small>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card shadow-sm">
                <img src="/img/projector.png" alt="">
                <div class="card-body">
                <p class="card-text"><strong>Projector</strong></p>
                  <p>Canon</p>
                  <p>2</p>
                  <div class="d-grip gap-2">
                    <button class="btn btn-primary" type="button"><span>Back to Home</span></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </main>
    <footer class="text-muted py-5">
      <div class="container">
        <p class="float-end mb-1">
          <a href="#">Back to top</a>
        </p>
        <p class="mb-1">Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p class="mb-0">New to Bootstrap? <a href="/">Visit the homepage</a> or read our <a href="../getting-started/introduction/">getting started guide</a>. </p>
      </div>
    </footer>
    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
  </body>undefined
</html>