<h2><?=$title ?></h2>
<small><?= $posts->created_at ?></small>
<div class="post-body">
    <?= $posts->body ?>
</div>

<hr>

<?=form_open('/testapi/delete/' .$posts->slug, 'style="width:100px" method="delete"'); ?>
    <a href="<?=base_url()?>testapi/edit/<?= $posts->slug?>" class="btn btn-primary btn-block">edit</a>
    <input type="submit" value="delete" class="btn btn-danger btn-block">
<?=form_close();?>
