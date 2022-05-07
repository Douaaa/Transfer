<!-- ======= Top Bar ======= -->
<section id="topbar" class="d-flex align-items-center">
  <div class="container d-flex justify-content-center justify-content-md-between">
    <div class="contact-info d-flex align-items-center">
      <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:rihlat.aljanub@gmail.com">rihlat.aljanub@gmail.com</a></i>
      <i class="bi bi-phone d-flex align-items-center ms-4"><span>07708852492</span></i>
    </div>
    <div class="social-links d-none d-md-flex align-items-center">
      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
    </div>
  </div>
</section>

<!-- ======= Header ======= -->
<nav class="navbar navbar-light navbar-expand-sm ">
  <div class="container">
    <a href="/" class="navbar-brand">
     {{trans('all.site-title')}}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarCollapse" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a href="" class="nav-link active">
              {{ trans('all.home') }}
          </a>
        </li>
        <li class="nav-item">
          <a href="#about" class="nav-link ">
              {{ trans('all.about') }}
          </a>
        </li>
        <li class="nav-item">
          <a href="#services" class="nav-link ">
              {{ trans('all.services') }}
          </a>
        </li>
        <li class="nav-item">
          <a href="#archive" class="nav-link ">
              {{ trans('all.archive') }}
          </a>
        </li>
        <li class="nav-item">
          <a href="#contact" class="nav-link ">
              {{ trans('all.contact') }}
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
