<?php

/**
 * LeavingTable form base class.
 *
 * @method LeavingTable getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseLeavingTableForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                   => new sfWidgetFormInputHidden(),
      'kind_leave'           => new sfWidgetFormInputText(),
      'getting_started'      => new sfWidgetFormDate(),
      'end_work'             => new sfWidgetFormDate(),
      'number_vacation_days' => new sfWidgetFormInputText(),
      'commencement'         => new sfWidgetFormDate(),
      'end_leave'            => new sfWidgetFormDate(),
      'base_release'         => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                   => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'kind_leave'           => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'getting_started'      => new sfValidatorDate(array('required' => false)),
      'end_work'             => new sfValidatorDate(array('required' => false)),
      'number_vacation_days' => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'commencement'         => new sfValidatorDate(array('required' => false)),
      'end_leave'            => new sfValidatorDate(array('required' => false)),
      'base_release'         => new sfValidatorString(array('max_length' => 60, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('leaving_table[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'LeavingTable';
  }

}
