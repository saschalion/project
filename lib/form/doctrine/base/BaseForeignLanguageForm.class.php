<?php

/**
 * ForeignLanguage form base class.
 *
 * @method ForeignLanguage getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseForeignLanguageForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                 => new sfWidgetFormInputHidden(),
      'name_foreign_language'              => new sfWidgetFormInputText(),
      'degree_knowledge_foreign_languages' => new sfWidgetFormInputText(),
      'created_at'                         => new sfWidgetFormDateTime(),
      'updated_at'                         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name_foreign_language'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'degree_knowledge_foreign_languages' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'created_at'                         => new sfValidatorDateTime(),
      'updated_at'                         => new sfValidatorDateTime(),
    ));

    $this->widgetSchema->setNameFormat('foreign_language[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'ForeignLanguage';
  }

}
