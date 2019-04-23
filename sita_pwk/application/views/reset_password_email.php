<!DOCTYPE html>
<html>

<head>
    <title>reset password</title>
</head>

<body>
    <?php echo validation_errors(); ?>

    <?= form_open('reset_password_user/email_reset_password_validation') ?>

    <?= form_input('Email', $this->input->post('Email')) ?>
    <input type="submit" value="email to reset password" name="">
    <?= form_close() ?>
</body>

</html>