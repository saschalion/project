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
      'name_educational_institution' => new sfWidgetFormFilterInput(),
      'diploma'                      => new sfWidgetFormFilterInput(),
      'year_graduation'              => new sfWidgetFormFilterInput(),
      'education_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Education'), 'add_empty' => true)),
      'diploma_qualification'        => new sfWidgetFormFilterInput(),
      'speciality_diploma'           => new sfWidgetFormFilterInput(),
      'created_at'                   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'name_educational_institution' => new sfValidatorPass(array('required' => false)),
      'diploma'                      => new sfValidatorPass(array('required' => false)),
      'year_graduation'              => new sfValidatorPass(array('required' => false)),
      'education_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Education'), 'column' => 'id')),
      'diploma_qualification'        => new sfValidatorPass(array('required' => false)),
      'speciality_diploma'           => new sfValidatorPass(array('required' => false)),
      'created_at'                   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
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
      'name_educational_institution' => 'Text',
      'diploma'                      => 'Text',
      'year_graduation'              => 'Text',
      'education_id'                 => 'ForeignKey',
      'diploma_qualification'        => 'Text',
      'speciality_diploma'           => 'Text',
      'created_at'                   => 'Date',
      'updated_at'                   => 'Date',
    );
  }
}
