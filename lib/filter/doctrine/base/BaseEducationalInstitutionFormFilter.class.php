<?php

/**
 * EducationalInstitution filter form base class.
 *
 * @package    jobeet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseEducationalInstitutionFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'education_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Education'), 'add_empty' => true)),
      'name_educational_institution' => new sfWidgetFormFilterInput(),
      'diploma'                      => new sfWidgetFormFilterInput(),
      'year_graduation'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'diploma_qualification'        => new sfWidgetFormFilterInput(),
      'speciality_diploma'           => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'education_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Education'), 'column' => 'id')),
      'name_educational_institution' => new sfValidatorPass(array('required' => false)),
      'diploma'                      => new sfValidatorPass(array('required' => false)),
      'year_graduation'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'diploma_qualification'        => new sfValidatorPass(array('required' => false)),
      'speciality_diploma'           => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('educational_institution_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'EducationalInstitution';
  }

  public function getFields()
  {
    return array(
      'id'                           => 'Number',
      'education_id'                 => 'ForeignKey',
      'name_educational_institution' => 'Text',
      'diploma'                      => 'Text',
      'year_graduation'              => 'Date',
      'diploma_qualification'        => 'Text',
      'speciality_diploma'           => 'Text',
    );
  }
}
