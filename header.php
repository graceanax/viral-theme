<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Viral</title>
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/viral.css">
</head>
<body>
  <header class="row header">
    <section class="col-6 header__main">
      <section class="col-12 header__logo">
        <figure class="header__logo__img e-center">
          <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/img/viral.png" alt="logo viral">
        </figure>
      </section>
      <nav class="col-12 header__nav">
        <ul class="nav nav__main j-center">
          <li class="nav-item nav__item">
            <a class="nav-link nav__link t-black" href="#">Tecnología</a>
          </li>
          <li class="nav-item nav__item">
            <a class="nav-link nav__link t-black" href="#">Youtube</a>
          </li>
          <li class="nav-item nav__item">
            <a class="nav-link nav__link t-black" href="#">Música</a>
          </li>
          <li class="nav-item nav__item">
            <a class="nav-link nav__link t-black" href="#">Cine</a>
          </li>
          <li class="nav-item nav__item">
            <a class="nav-link nav__link t-black" href="#">Series</a>
          </li>
        </ul>
      </nav>
    </section>
    <section class="col-6 header__sec d-flex a-center">
      <div class="row full-width">
        <nav class="col-5 ">
          <ul class="nav nav__social j-end">
            <li class="nav-item nav__item">
              <a class="nav-link nav__link active" href="#">
                <i class="t-black fab fa-facebook-square"></i>
              </a>
            </li>
            <li class="nav-item nav__item">
              <a class="nav-link nav__link" href="#">
                <i class="t-black fab fa-twitter-square"></i>
              </a>
            </li>
            <li class="nav-item nav__item">
              <a class="nav-link nav__link" href="#">
                <i class="t-black fab fa-instagram"></i>
              </a>
            </li>
            <li class="nav-item nav__item">
              <a class="nav-link nav__link" href="#">
                <i class="t-black fab fa-youtube"></i>
              </a>
            </li>
          </ul>
        </nav>
        <section class="search__form col-7">
          <div class="input-group mb-3">
            <input type="text" class="form-control search__input" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="basic-addon2">
            <div class="input-group-append">
              <button class="btn btn-outline-secondary border-none" type="button"><i class="fas t-black fa-search"></i></button>
            </div>
          </div>
        </section>
      </div>
    </section>
  </header>
  <section class="main row">