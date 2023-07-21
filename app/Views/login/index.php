<?php helper('form'); ?>
<?= session()->getFlashdata('error') ?>
<?= validation_list_errors() ?>


<form action="login" method="POST">
    <?= csrf_field() ?>

    <input type="text" name="username" value="<?= set_value('username') ?>">
    <input type="password" name="password" data-password>
    <button class="">Submit</button>
</form>

<script>
    const passDom = document.querySelector('[data-password]')
</script>