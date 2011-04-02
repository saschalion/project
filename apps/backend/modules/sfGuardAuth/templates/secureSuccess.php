<?php use_helper('I18N') ?>

<h2><?php echo __('Извините, у Вас нет доступа к запрошенной странице', null, 'sf_guard') ?></h2>

<p class="url"><?php echo sfContext::getInstance()->getRequest()->getUri() ?></p>

<h3><?php echo __('Пожалуйста, войдите снова', null, 'sf_guard') ?></h3>

<div class="login-wrap">
<h1><?php echo __('Авторизация', null, 'sf_guard') ?></h1>
    <div class="login-form">
        <?php echo get_component('sfGuardAuth', 'signin_form') ?>
    </div>
</div>