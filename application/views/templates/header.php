<html>

<head>
  <title>Mural de Oportunidade de Estágio</title>
  <link rel="stylesheet" href="https://bootswatch.com/3/flatly/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css">
  <script src="http://cdn.ckeditor.com/4.5.11/standard/ckeditor.js"></script>
</head>

<body>
  <nav class="navbar navbar-inverse">
    <div class="container">
      <div class="navbar-header">
        <a class="navbar-brand" href="<?php echo base_url(); ?>">MOE</a>
      </div>
      <div id="navbar">
        <ul class="nav navbar-nav">
          <li><a href="<?php echo base_url(); ?>">Home</a></li>
          <li><a href="<?php echo base_url(); ?>about">Sobre</a></li>
        </ul>
        <ul class="nav navbar-nav navbar-right">
          <?php if (!$this->session->userdata('logged_in')) : ?>
            <li><a href="<?php echo base_url(); ?>users/login">Login</a></li>
            <li><a href="<?php echo base_url(); ?>users/register">Registrar</a></li>
          <?php endif; ?>
          <?php if ($this->session->userdata('logged_in')) : ?>
            <li><a href="<?php echo base_url(); ?>users/logout">Logout</a></li>
          <?php endif; ?>
        </ul>
      </div>
    </div>
  </nav>

  <div class="container">
    