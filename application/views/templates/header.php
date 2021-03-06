<html>
		<head>
				<title>
				HEADER
				</title>
				<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
				<body>
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
				<div class="container">
	<a class="navbar-brand" href="<?php echo base_url();?>">Bootstrap</a>
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse" id="navbarNav">
		<ul class="navbar-nav">
			<li class="nav-item active">
			</li>
		<li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>">Home</a></li>
		<!-- <li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>">Posts</a></li> -->
		<li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>about">About</a></li>

	<?php if($this->session->userdata('username')): ?>
	<li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>testapi">Posts (API)</a></li>
		<li class="nav-item"><a class="nav-link" href="<?= base_url(); ?>testapi/create">Create</a></li>
		<li class="nav-item"><a class="btn btn-danger" type="button" href="<?= base_url(); ?>logout">Logout</a></li>
    <?php else: ?>
        <li class="nav-item"><a class="btn btn-secondary" type="button" href="<?= base_url(); ?>login">Login</a></li>
    <?php endif ?>
			</li>
		</ul>
	</div>
</nav>

<div class="container">
        <div id="flash_messages" >
            <?php if($this->session->flashdata('success')) : ?>
                <div style="margin: 1em; padding: 1em;" class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?=$this->session->flashdata('success'); ?>
                </div>
            <?php endif?>
            <?php if($this->session->flashdata('error'))   : ?>
                <div style="margin: 1em; padding: 1em;" class="alert alert-dismissible alert-danger">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?=$this->session->flashdata('error'); ?>
                </div>
            <?php endif?>
            <?php if($this->session->flashdata('warning')) : ?>
                <div style="margin: 1em; padding: 1em;" class="alert alert-dismissible alert-warning">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?=$this->session->flashdata('warning'); ?>
                </div>
            <?php endif?>
            <?php if($this->session->flashdata('info'))    : ?>
                <div style="margin: 1em; padding: 1em;" class="alert alert-dismissible alert-secondary">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?=$this->session->flashdata('info'); ?>
                </div>
            <?php endif?>
        </div>

        <?php if(!empty(validation_errors())) : ?>
        <div style="margin: 1em; padding: 1em;" id="validation_message" class="alert alert-dismissible alert-warning">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <?=validation_errors(); ?>
        </div>
        <?php endif ?>

