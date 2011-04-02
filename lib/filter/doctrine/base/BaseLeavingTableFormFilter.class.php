<?php

/**
 * LeavingTable filter form base class.
 *
 * @package    jobeet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseLeavingTableFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kind_leave'           => new sfWidgetFormFilterInput(),
      'getting_started'      => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'end_work'             => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'number_vacation_days' => new sfWidgetFormFilterInput(),
      'commencement'         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'end_leave'            => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'base_release'         => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'kind_leave'           => new sfValidatorPass(array('required' => false)),
      'getting_started'      => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'end_work'             => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'number_vacation_days' => new sfValidatorPass(array('required' => false)),
      'commencement'         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'end_leave'            => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'base_release'         => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('leaving_table_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'LeavingTable';
  }

  public function getFields()
  {
    return array(
      'id'                   => 'Number',
      'kind_leave'           => 'Text',
      'getting_started'      => 'Date',
      'end_work'             => 'Date',
      'number_vacation_days' => 'Text',
      'commencement'         => 'Date',
      'end_leave'            => 'Date',
      'base_release'         => 'Text',
    );
  }
}
