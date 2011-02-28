<?php

/**
 * JobeetCategory form.
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class JobeetCategoryForm extends BaseJobeetCategoryForm
{
  public function configure()
  {
      unset(
      $this['created_at'], $this['updated_at'],
      $this['expires_at'], $this['is_activated'],
      $this['jobeet_affiliates_list'], $this['jobeet_affiliates_list']
    );
    $this->widgetSchema->setLabels(array(
  'name'    => 'Должность'
));

  }
}
