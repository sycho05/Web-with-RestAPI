<h2><?= $title ?></h2>

<?= form_open('login/index', ''); ?>
    <div class="form-group">
        <label for="inputEmail1">Email address</label>
        <input name="userEmail" type="email" class="form-control" id="inputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
        <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
    </div>
    <div class="form-group">
        <label for="inputPassword1">Password</label>
        <input name="userPass" type="password" class="form-control" id="inputPassword1" placeholder="Password">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
<?=form_close();?>
