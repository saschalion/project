<?php

/**
 * Passport form base class.
 *
 * @method Passport getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BasePassportForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'passport_number'     => new sfWidgetFormInputText(),
      'issuance_passports'  => new sfWidgetFormInputText(),
      'date_issue_passport' => new sfWidgetFormDate(),
      'code_division'       => new sfWidgetFormInputText(),
      'created_at'          => new sfWidgetFormDateTime(),
      'updated_at'          => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'passport_number'     => new sfValidatorString(array('max_length' => 11)),
      'issuance_passports'  => new sfValidatorString(array('max_length' => 50)),
      'date_issue_passport' => new sfValidatorDate(),
      'code_division'       => new sfValidatorString(array('max_length' => 7)),
      'created_at'          => new sfValidatorDateTime(),
      'updated_at'          => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorDoctrineUnique(array('model' => 'Passport', 'column' => array('passport_number')))
    );

    $this->widgetSchema->setNameFormat('passport[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Passport';
  }

}
