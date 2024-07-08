<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
  <title>Lupaper</title>
  <?php wp_head(); ?>
</head>
<body>
  <header class="header">
    <img src="<?php echo get_template_directory_uri(); ?>/images/logo.png" alt="Lupaper Logo" class="logo">
    <h1>Lupaper</h1>
    <nav class="navbar">
      <a href="#home">Inicio</a>
      <a href="#shop">Tienda</a>
      <a href="#about">Acerca de Nosotros</a>
      <a href="#contact">Contáctenos</a>
    </nav>
  </header>
