<?php if(isset($errors) && count($errors) != 0): ?>
    <div class="alert alert-danger" role="alert">
        <button class="close" type="button" data-dismiss="alert" aria-hidden="true">&times;</button>
        <?php foreach($errors as $error): ?>
            <p><?= $error .'</br>'?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>