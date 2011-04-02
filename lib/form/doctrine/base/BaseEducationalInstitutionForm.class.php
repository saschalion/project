<?php

/**
 * EducationalInstitution form base class.
 *
 * @method EducationalInstitution getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEducationalInstitutionForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                           => new sfWidgetFormInputHidden(),
      'name_educational_institution' => new sfWidgetFormInputText(),
      'diploma'                      => new sfWidgetFormInputText(),
      'year_graduation'              => new sfWidgetFormInputText(),
      'education_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Education'), 'add_empty' => true)),
      'diploma_qualification'        => new sfWidgetFormInputText(),
      'speciality_diploma'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                           => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'name_educational_institution' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'diploma'                      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'year_graduation'              => new sfValidatorPass(array('required' => false)),
      'education_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Education'), 'required' => false)),
      'diploma_qualification'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'speciality_diploma'           => new sfValidatorString(array('max_length' => 150, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('educational_institution[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EducationalInstitution';
  }

}
