<html>
    <head>
        <title>
        HEADER
        </title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="<?php echo base_url();?>">Bootstrap</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
      </li>
    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>">Home</a></li>
    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>">Posts</a></li>
    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>testapi">Posts (API)</a></li>
    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>about">About</a></li>
    <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>testapi/create">Create</a></li>
      </li>
    </ul>
  </div>
</nav>