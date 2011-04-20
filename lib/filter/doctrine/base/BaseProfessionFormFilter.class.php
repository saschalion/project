<?php

/**
 * Profession filter form base class.
 *
 * @package    jobeet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseProfessionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'main_profession'    => new sfWidgetFormFilterInput(),
      'other_profession'   => new sfWidgetFormFilterInput(),
      'total_length'       => new sfWidgetFormFilterInput(),
      'continuous_service' => new sfWidgetFormFilterInput(),
      'last_job'           => new sfWidgetFormFilterInput(),
      'termination_date'   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'main_profession'    => new sfValidatorPass(array('required' => false)),
      'other_profession'   => new sfValidatorPass(array('required' => false)),
      'total_length'       => new sfValidatorPass(array('required' => false)),
      'continuous_service' => new sfValidatorPass(array('required' => false)),
      'last_job'           => new sfValidatorPass(array('required' => false)),
      'termination_date'   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('profession_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Profession';
  }

  public function getFields()
  {
    return array(
      'id'                 => 'Number',
      'main_profession'    => 'Text',
      'other_profession'   => 'Text',
      'total_length'       => 'Text',
      'continuous_service' => 'Text',
      'last_job'           => 'Text',
      'termination_date'   => 'Date',
    );
  }
}
