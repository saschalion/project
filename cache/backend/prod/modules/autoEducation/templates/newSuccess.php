<?php use_helper('I18N', 'Date') ?>
<?php include_partial('education/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('New Education', array(), 'messages') ?></h1>

  <?php include_partial('education/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('education/form_header', array('education' => $education, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('education/form', array('education' => $education, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('education/form_footer', array('education' => $education, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
