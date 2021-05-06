<?php
    if(!$this->session->userdata('username')) redirect('login','refresh');
?>

<h2><?= $title ?></h2>

<?php foreach($posts as $post) : ?>
    <h4><?=$post->title ?></h4>
    <small><?= $post->created ?></small>
    <p><?= $post->body ?></p>
    <p class="more"><a class="btn btn-primary btn-sm" href="<?=site_url('/testapi/')?><?=$post->slug?>">Read more...</a></p>
<?php endforeach ?>
