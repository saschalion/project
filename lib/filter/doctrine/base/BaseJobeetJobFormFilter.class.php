<?php

/**
 * JobeetJob filter form base class.
 *
 * @package    jobeet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseJobeetJobFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'price'                            => new sfWidgetFormFilterInput(),
      'tab_id'                           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'number_insurace'                  => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pension_sertificate'              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nature_work'                      => new sfWidgetFormFilterInput(),
      'type_work'                        => new sfWidgetFormFilterInput(),
      'category_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('JobeetCategory'), 'add_empty' => true)),
      'status_id'                        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'add_empty' => true)),
      'sf_guard_user_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'passport_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Passport'), 'add_empty' => true)),
      'foreign_language_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ForeignLanguage'), 'add_empty' => true)),
      'educational_institution_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EducationalInstitution'), 'add_empty' => true)),
      'educational_institution_extra_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EducationalInstitutionExtra'), 'add_empty' => true)),
      'profession_id'                    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Profession'), 'add_empty' => true)),
      'family_id'                        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Family'), 'add_empty' => true)),
      'military_records_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MilitaryRecords'), 'add_empty' => true)),
      'leaving_table_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('LeavingTable'), 'add_empty' => true)),
      'citizenship'                      => new sfWidgetFormFilterInput(),
      'last_name'                        => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'first_name'                       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'three_name'                       => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'type'                             => new sfWidgetFormFilterInput(),
      'data_birth'                       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'phone'                            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mobile_phone'                     => new sfWidgetFormFilterInput(),
      'city_id'                          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'add_empty' => true)),
      'adress'                           => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'                            => new sfWidgetFormFilterInput(),
      'logo'                             => new sfWidgetFormFilterInput(),
      'more_information'                 => new sfWidgetFormFilterInput(),
      'token'                            => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'                       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'price'                            => new sfValidatorSchemaFilter('text', new sfValidatorNumber(array('required' => false))),
      'tab_id'                           => new sfValidatorPass(array('required' => false)),
      'number_insurace'                  => new sfValidatorPass(array('required' => false)),
      'pension_sertificate'              => new sfValidatorPass(array('required' => false)),
      'nature_work'                      => new sfValidatorPass(array('required' => false)),
      'type_work'                        => new sfValidatorPass(array('required' => false)),
      'category_id'                      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('JobeetCategory'), 'column' => 'id')),
      'status_id'                        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Status'), 'column' => 'id')),
      'sf_guard_user_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'passport_id'                      => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Passport'), 'column' => 'id')),
      'foreign_language_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('ForeignLanguage'), 'column' => 'id')),
      'educational_institution_id'       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('EducationalInstitution'), 'column' => 'id')),
      'educational_institution_extra_id' => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('EducationalInstitutionExtra'), 'column' => 'id')),
      'profession_id'                    => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Profession'), 'column' => 'id')),
      'family_id'                        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Family'), 'column' => 'id')),
      'military_records_id'              => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('MilitaryRecords'), 'column' => 'id')),
      'leaving_table_id'                 => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('LeavingTable'), 'column' => 'id')),
      'citizenship'                      => new sfValidatorPass(array('required' => false)),
      'last_name'                        => new sfValidatorPass(array('required' => false)),
      'first_name'                       => new sfValidatorPass(array('required' => false)),
      'three_name'                       => new sfValidatorPass(array('required' => false)),
      'type'                             => new sfValidatorPass(array('required' => false)),
      'data_birth'                       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'phone'                            => new sfValidatorPass(array('required' => false)),
      'mobile_phone'                     => new sfValidatorPass(array('required' => false)),
      'city_id'                          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('City'), 'column' => 'id')),
      'adress'                           => new sfValidatorPass(array('required' => false)),
      'email'                            => new sfValidatorPass(array('required' => false)),
      'logo'                             => new sfValidatorPass(array('required' => false)),
      'more_information'                 => new sfValidatorPass(array('required' => false)),
      'token'                            => new sfValidatorPass(array('required' => false)),
      'created_at'                       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
    ));

    $this->widgetSchema->setNameFormat('jobeet_job_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JobeetJob';
  }

  public function getFields()
  {
    return array(
      'id'                               => 'Number',
      'price'                            => 'Number',
      'tab_id'                           => 'Text',
      'number_insurace'                  => 'Text',
      'pension_sertificate'              => 'Text',
      'nature_work'                      => 'Text',
      'type_work'                        => 'Text',
      'category_id'                      => 'ForeignKey',
      'status_id'                        => 'ForeignKey',
      'sf_guard_user_id'                 => 'ForeignKey',
      'passport_id'                      => 'ForeignKey',
      'foreign_language_id'              => 'ForeignKey',
      'educational_institution_id'       => 'ForeignKey',
      'educational_institution_extra_id' => 'ForeignKey',
      'profession_id'                    => 'ForeignKey',
      'family_id'                        => 'ForeignKey',
      'military_records_id'              => 'ForeignKey',
      'leaving_table_id'                 => 'ForeignKey',
      'citizenship'                      => 'Text',
      'last_name'                        => 'Text',
      'first_name'                       => 'Text',
      'three_name'                       => 'Text',
      'type'                             => 'Text',
      'data_birth'                       => 'Date',
      'phone'                            => 'Text',
      'mobile_phone'                     => 'Text',
      'city_id'                          => 'ForeignKey',
      'adress'                           => 'Text',
      'email'                            => 'Text',
      'logo'                             => 'Text',
      'more_information'                 => 'Text',
      'token'                            => 'Text',
      'created_at'                       => 'Date',
      'updated_at'                       => 'Date',
    );
  }
}
