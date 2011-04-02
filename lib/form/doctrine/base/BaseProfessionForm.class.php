<?php

/**
 * Profession form base class.
 *
 * @method Profession getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseProfessionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                 => new sfWidgetFormInputHidden(),
      'main_profession'    => new sfWidgetFormInputText(),
      'other_profession'   => new sfWidgetFormInputText(),
      'total_length'       => new sfWidgetFormInputText(),
      'continuous_service' => new sfWidgetFormInputText(),
      'last_job'           => new sfWidgetFormInputText(),
      'termination_date'   => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'main_profession'    => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'other_profession'   => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'total_length'       => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'continuous_service' => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'last_job'           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'termination_date'   => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('profession[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Profession';
  }

}
