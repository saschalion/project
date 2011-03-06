<?php use_helper('I18N', 'Date') ?>
<?php include_partial('job/assets') ?>

<div id="sf_admin_container">
  <h1><?php echo __('Личная карточка сотрудника:' .'&nbsp;'. $jobeet_job->getLastName() .'&nbsp;'. $jobeet_job->getFirstName() .'&nbsp;'. $jobeet_job->getThreeName(), array(), 'messages') ?></h1>
  <h1><?php echo __('Добавлено:' .'&nbsp;'. $jobeet_job->getCreatedAt(), array(), 'messages') ?></h1>  
  <?php if ($jobeet_job->getType() == 'M'): ?>
    <?php  echo link_to('Паспорт', 'passport/new?id='.$jobeet_job->getId());?>
  <?php endif; ?>
  
  <?php echo link_to(
                            'Печать',
                            'job/show?id='.$jobeet_job->getId(), array('target' => '_blank')

                            );
                    ?>
  <?php include_partial('job/flashes') ?>
  
  <div id="sf_admin_header">
    <?php include_partial('job/form_header', array('jobeet_job' => $jobeet_job, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>

  <div id="sf_admin_content">
    <?php include_partial('job/form', array('jobeet_job' => $jobeet_job, 'form' => $form, 'configuration' => $configuration, 'helper' => $helper)) ?>
  </div>

  <div id="sf_admin_footer">
    <?php include_partial('job/form_footer', array('jobeet_job' => $jobeet_job, 'form' => $form, 'configuration' => $configuration)) ?>
  </div>
</div>
