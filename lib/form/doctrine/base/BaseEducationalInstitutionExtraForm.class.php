<?php

/**
 * EducationalInstitutionExtra form base class.
 *
 * @method EducationalInstitutionExtra getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseEducationalInstitutionExtraForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                 => new sfWidgetFormInputHidden(),
      'study_extra'                        => new sfWidgetFormInputText(),
      'name_educational_institution_extra' => new sfWidgetFormInputText(),
      'diploma_extra'                      => new sfWidgetFormInputText(),
      'year_graduation_extra'              => new sfWidgetFormInputText(),
      'diploma_qualification_extra'        => new sfWidgetFormInputText(),
      'speciality_diploma_extra'           => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'study_extra'                        => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'name_educational_institution_extra' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'diploma_extra'                      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'year_graduation_extra'              => new sfValidatorPass(array('required' => false)),
      'diploma_qualification_extra'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'speciality_diploma_extra'           => new sfValidatorString(array('max_length' => 150, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('educational_institution_extra[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EducationalInstitutionExtra';
  }

}
