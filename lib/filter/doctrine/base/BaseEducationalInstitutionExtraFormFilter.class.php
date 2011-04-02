<?php

/**
 * EducationalInstitutionExtra filter form base class.
 *
 * @package    jobeet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEducationalInstitutionExtraFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'kind_learning'                      => new sfWidgetFormFilterInput(),
      'name_educational_institution_extra' => new sfWidgetFormFilterInput(),
      'diploma_extra'                      => new sfWidgetFormFilterInput(),
      'year_graduation_extra'              => new sfWidgetFormFilterInput(),
      'study_extra'                        => new sfWidgetFormFilterInput(),
      'diploma_qualification_extra'        => new sfWidgetFormFilterInput(),
      'speciality_diploma_extra'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'kind_learning'                      => new sfValidatorPass(array('required' => false)),
      'name_educational_institution_extra' => new sfValidatorPass(array('required' => false)),
      'diploma_extra'                      => new sfValidatorPass(array('required' => false)),
      'year_graduation_extra'              => new sfValidatorPass(array('required' => false)),
      'study_extra'                        => new sfValidatorPass(array('required' => false)),
      'diploma_qualification_extra'        => new sfValidatorPass(array('required' => false)),
      'speciality_diploma_extra'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('educational_institution_extra_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EducationalInstitutionExtra';
  }

  public function getFields()
  {
    return array(
      'id'                                 => 'Number',
      'kind_learning'                      => 'Text',
      'name_educational_institution_extra' => 'Text',
      'diploma_extra'                      => 'Text',
      'year_graduation_extra'              => 'Text',
      'study_extra'                        => 'Text',
      'diploma_qualification_extra'        => 'Text',
      'speciality_diploma_extra'           => 'Text',
    );
  }
}
