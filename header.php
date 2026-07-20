<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<?php wp_head(); // required — lets WP and plugins (like Yoast) inject SEO tags, styles, scripts ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); // required by modern WP for tracking/analytics plugin hooks ?>

<header class="site-nav">
  <div class="nav-inner">
    <a href="<?php echo esc_url( home_url( '/' ) ); ?>" class="logo">VM<span class="dot">.</span></a>
    <nav class="links" id="navLinks">
      <a href="#services">Services</a>
      <a href="#work">Work</a>
      <a href="#about">About</a>
      <a href="#contact">Contact</a>
    </nav>
    <div class="nav-cta">
      <a href="#contact" class="btn btn-ghost">Log in</a>
      <a href="#contact" class="btn btn-primary">Book a call</a>
      <button class="menu-toggle" id="menuToggle" aria-label="Toggle menu" aria-expanded="false">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M2 5h14M2 9h14M2 13h14" stroke="#1F3864" stroke-width="1.6" stroke-linecap="round"/></svg>
      </button>
    </div>
  </div>
</header>

<main id="top">
