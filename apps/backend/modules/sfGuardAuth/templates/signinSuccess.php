<?php use_helper('I18N') ?>
<div class="login-wrap">
<h1><?php echo __('Авторизация', null, 'sf_guard') ?></h1>
    <div class="login-form">
        <?php echo get_partial('sfGuardAuth/signin_form', array('form' => $form)) ?>
    </div>
</div>