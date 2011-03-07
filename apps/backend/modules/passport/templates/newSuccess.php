<?php use_helper('I18N', 'Date') ?>
<div id="sf_admin_container">
  <h1><?php echo __('New Passport', array(), 'messages') ?></h1>

  <?php include_partial('passport/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('passport/form_header', array('passport' => $passport, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('passport/form', array('passport' => $passport, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('passport/form_footer', array('passport' => $passport, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
