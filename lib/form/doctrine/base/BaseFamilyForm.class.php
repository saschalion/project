<?php

/**
 * Family form base class.
 *
 * @method Family getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseFamilyForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                  => new sfWidgetFormInputHidden(),
      'relation_degree'     => new sfWidgetFormInputText(),
      'marriage_status'     => new sfWidgetFormInputText(),
      'children'            => new sfWidgetFormInputText(),
      'date_birth_children' => new sfWidgetFormDate(),
    ));

    $this->setValidators(array(
      'id'                  => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'relation_degree'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'marriage_status'     => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'children'            => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'date_birth_children' => new sfValidatorDate(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('family[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Family';
  }

}
