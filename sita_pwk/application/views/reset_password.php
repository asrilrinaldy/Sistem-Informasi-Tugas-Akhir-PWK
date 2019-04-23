<!DOCTYPE html>
<html>

<head>
    <title>reset password</title>
</head>

<body>
    <?php
    $reset_key = $this->uri->segment(3);
    ?>

    <?= validation_errors() ?>
    <?= form_open('reset_password_user/reset_password_validation') ?>

    <?= form_input('reset_key', set_value('reset_key', $reset_key)) ?>
    <?= form_input('password', $this->input->post('password')) ?>
    <?= form_input('retype_password', $this->input->post('confirm_password')) ?>
    <input type="submit" value="reset password" name="">

    <?= form_close() ?>
</body>

</html>