<?php use_helper('I18N', 'Date') ?>
<?php include_partial('city/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Добавить город', array(), 'messages') ?></h1>

  <?php include_partial('city/flashes') ?>

  <div id="sf_admin_header">
    <?php include_partial('city/form_header', array('city' => $city, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('city/form', array('city' => $city, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('city/form_footer', array('city' => $city, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
