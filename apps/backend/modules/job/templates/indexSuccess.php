<?php use_helper('I18N', 'Date') ?>
<?php include_partial('job/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Сотрудники', array(), 'messages') ?></h1>
  <?php include_partial('job/flashes') ?>
  <div id="sf_admin_header">
    <?php include_partial('job/list_header', array('pager' => $pager)) ?>
  </div>
  <div class="wrapper-content">
      <div class="wrap-content">
          <div id="sf_admin_content" class="left-column">
              <div class="scroll-block">
                <form action="<?php echo url_for('jobeet_job_collection', array('action' => 'batch')) ?>" method="post">
                <?php include_partial('job/list', array('pager' => $pager, 'sort' => $sort, 'helper' => $helper)) ?>
                <ul class="sf_admin_actions">

                  <?php
                        include_partial(
                          'global/list_batch_actions',
                          array(
                            'helper' => $helper
                                      )
                        );
                  ?>
                  <?php
                        include_partial(
                          'global/list_actions',
                          array(
                            'helper' => $helper
                                      )
                        );
                  ?>

                </ul>
                </form>
              </div>
          </div>
          <div id="sf_admin_bar" class="right-column">
            <?php include_partial('job/filters', array('form' => $filters, 'configuration' => $configuration)) ?>
          </div>
      </div>
  </div>
  <div id="sf_admin_footer">
    <?php include_partial('job/list_footer', array('pager' => $pager)) ?>
  </div>
</div>
