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
      'price'                              => new sfWidgetFormFilterInput(),
      'tab_id'                             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'number_insurace'                    => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'pension_sertificate'                => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'nature_work'                        => new sfWidgetFormFilterInput(),
      'type_work'                          => new sfWidgetFormFilterInput(),
      'category_id'                        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('JobeetCategory'), 'add_empty' => true)),
      'status_id'                          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'add_empty' => true)),
      'sf_guard_user_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'passport_id'                        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Passport'), 'add_empty' => true)),
      'last_name'                          => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'first_name'                         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'three_name'                         => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'type'                               => new sfWidgetFormFilterInput(),
      'data_birth'                         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'phone'                              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'mobile_phone'                       => new sfWidgetFormFilterInput(),
      'education_id'                       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Education'), 'add_empty' => true)),
      'city_id'                            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'add_empty' => true)),
      'adress'                             => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'email'                              => new sfWidgetFormFilterInput(),
      'logo'                               => new sfWidgetFormFilterInput(),
      'name_foreign_language'              => new sfWidgetFormFilterInput(),
      'degree_knowledge_foreign_languages' => new sfWidgetFormFilterInput(),
      'name_educational_institution'       => new sfWidgetFormFilterInput(),
      'diploma'                            => new sfWidgetFormFilterInput(),
      'year_graduation'                    => new sfWidgetFormFilterInput(),
      'diploma_qualification'              => new sfWidgetFormFilterInput(),
      'speciality_diploma'                 => new sfWidgetFormFilterInput(),
      'name_educational_institution_extra' => new sfWidgetFormFilterInput(),
      'diploma_extra'                      => new sfWidgetFormFilterInput(),
      'year_graduation_extra'              => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'study_extra'                        => new sfWidgetFormFilterInput(),
      'diploma_qualification_extra'        => new sfWidgetFormFilterInput(),
      'speciality_diploma_extra'           => new sfWidgetFormFilterInput(),
      'main_profession'                    => new sfWidgetFormFilterInput(),
      'other_profession'                   => new sfWidgetFormFilterInput(),
      'total_length'                       => new sfWidgetFormFilterInput(),
      'continuous_service'                 => new sfWidgetFormFilterInput(),
      'last_job'                           => new sfWidgetFormFilterInput(),
      'termination_date'                   => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'relation_degree'                    => new sfWidgetFormFilterInput(),
      'marriage_status'                    => new sfWidgetFormFilterInput(),
      'children'                           => new sfWidgetFormFilterInput(),
      'date_birth_children'                => new sfWidgetFormFilterInput(),
      'group_accounting'                   => new sfWidgetFormFilterInput(),
      'category_accounting'                => new sfWidgetFormFilterInput(),
      'composition'                        => new sfWidgetFormFilterInput(),
      'military_rank'                      => new sfWidgetFormFilterInput(),
      'military_discount_specialty'        => new sfWidgetFormFilterInput(),
      'number_military_discount_specialty' => new sfWidgetFormFilterInput(),
      'fitness'                            => new sfWidgetFormFilterInput(),
      'name_district_military_office'      => new sfWidgetFormFilterInput(),
      'number_special_accounting'          => new sfWidgetFormFilterInput(),
      'kind_leave'                         => new sfWidgetFormFilterInput(),
      'getting_started'                    => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'end_work'                           => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'number_vacation_days'               => new sfWidgetFormFilterInput(),
      'commencement'                       => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'end_leave'                          => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
      'base_release'                       => new sfWidgetFormFilterInput(),
      'more_information'                   => new sfWidgetFormFilterInput(),
      'token'                              => new sfWidgetFormFilterInput(array('with_empty' => false)),
      'created_at'                         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
      'updated_at'                         => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate(), 'with_empty' => false)),
    ));

    $this->setValidators(array(
      'price'                              => new sfValidatorPass(array('required' => false)),
      'tab_id'                             => new sfValidatorPass(array('required' => false)),
      'number_insurace'                    => new sfValidatorPass(array('required' => false)),
      'pension_sertificate'                => new sfValidatorPass(array('required' => false)),
      'nature_work'                        => new sfValidatorPass(array('required' => false)),
      'type_work'                          => new sfValidatorPass(array('required' => false)),
      'category_id'                        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('JobeetCategory'), 'column' => 'id')),
      'status_id'                          => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Status'), 'column' => 'id')),
      'sf_guard_user_id'                   => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('User'), 'column' => 'id')),
      'passport_id'                        => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Passport'), 'column' => 'id')),
      'last_name'                          => new sfValidatorPass(array('required' => false)),
      'first_name'                         => new sfValidatorPass(array('required' => false)),
      'three_name'                         => new sfValidatorPass(array('required' => false)),
      'type'                               => new sfValidatorPass(array('required' => false)),
      'data_birth'                         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'phone'                              => new sfValidatorPass(array('required' => false)),
      'mobile_phone'                       => new sfValidatorPass(array('required' => false)),
      'education_id'                       => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('Education'), 'column' => 'id')),
      'city_id'                            => new sfValidatorDoctrineChoice(array('required' => false, 'model' => $this->getRelatedModelName('City'), 'column' => 'id')),
      'adress'                             => new sfValidatorPass(array('required' => false)),
      'email'                              => new sfValidatorPass(array('required' => false)),
      'logo'                               => new sfValidatorPass(array('required' => false)),
      'name_foreign_language'              => new sfValidatorPass(array('required' => false)),
      'degree_knowledge_foreign_languages' => new sfValidatorPass(array('required' => false)),
      'name_educational_institution'       => new sfValidatorPass(array('required' => false)),
      'diploma'                            => new sfValidatorPass(array('required' => false)),
      'year_graduation'                    => new sfValidatorPass(array('required' => false)),
      'diploma_qualification'              => new sfValidatorPass(array('required' => false)),
      'speciality_diploma'                 => new sfValidatorPass(array('required' => false)),
      'name_educational_institution_extra' => new sfValidatorPass(array('required' => false)),
      'diploma_extra'                      => new sfValidatorPass(array('required' => false)),
      'year_graduation_extra'              => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'study_extra'                        => new sfValidatorPass(array('required' => false)),
      'diploma_qualification_extra'        => new sfValidatorPass(array('required' => false)),
      'speciality_diploma_extra'           => new sfValidatorPass(array('required' => false)),
      'main_profession'                    => new sfValidatorPass(array('required' => false)),
      'other_profession'                   => new sfValidatorPass(array('required' => false)),
      'total_length'                       => new sfValidatorPass(array('required' => false)),
      'continuous_service'                 => new sfValidatorPass(array('required' => false)),
      'last_job'                           => new sfValidatorPass(array('required' => false)),
      'termination_date'                   => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'relation_degree'                    => new sfValidatorPass(array('required' => false)),
      'marriage_status'                    => new sfValidatorPass(array('required' => false)),
      'children'                           => new sfValidatorPass(array('required' => false)),
      'date_birth_children'                => new sfValidatorPass(array('required' => false)),
      'group_accounting'                   => new sfValidatorPass(array('required' => false)),
      'category_accounting'                => new sfValidatorPass(array('required' => false)),
      'composition'                        => new sfValidatorPass(array('required' => false)),
      'military_rank'                      => new sfValidatorPass(array('required' => false)),
      'military_discount_specialty'        => new sfValidatorPass(array('required' => false)),
      'number_military_discount_specialty' => new sfValidatorPass(array('required' => false)),
      'fitness'                            => new sfValidatorPass(array('required' => false)),
      'name_district_military_office'      => new sfValidatorPass(array('required' => false)),
      'number_special_accounting'          => new sfValidatorPass(array('required' => false)),
      'kind_leave'                         => new sfValidatorPass(array('required' => false)),
      'getting_started'                    => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'end_work'                           => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'number_vacation_days'               => new sfValidatorPass(array('required' => false)),
      'commencement'                       => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'end_leave'                          => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
      'base_release'                       => new sfValidatorPass(array('required' => false)),
      'more_information'                   => new sfValidatorPass(array('required' => false)),
      'token'                              => new sfValidatorPass(array('required' => false)),
      'created_at'                         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
      'updated_at'                         => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 00:00:00')), 'to_date' => new sfValidatorDateTime(array('required' => false, 'datetime_output' => 'Y-m-d 23:59:59')))),
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
      'id'                                 => 'Number',
      'price'                              => 'Text',
      'tab_id'                             => 'Text',
      'number_insurace'                    => 'Text',
      'pension_sertificate'                => 'Text',
      'nature_work'                        => 'Text',
      'type_work'                          => 'Text',
      'category_id'                        => 'ForeignKey',
      'status_id'                          => 'ForeignKey',
      'sf_guard_user_id'                   => 'ForeignKey',
      'passport_id'                        => 'ForeignKey',
      'last_name'                          => 'Text',
      'first_name'                         => 'Text',
      'three_name'                         => 'Text',
      'type'                               => 'Text',
      'data_birth'                         => 'Date',
      'phone'                              => 'Text',
      'mobile_phone'                       => 'Text',
      'education_id'                       => 'ForeignKey',
      'city_id'                            => 'ForeignKey',
      'adress'                             => 'Text',
      'email'                              => 'Text',
      'logo'                               => 'Text',
      'name_foreign_language'              => 'Text',
      'degree_knowledge_foreign_languages' => 'Text',
      'name_educational_institution'       => 'Text',
      'diploma'                            => 'Text',
      'year_graduation'                    => 'Text',
      'diploma_qualification'              => 'Text',
      'speciality_diploma'                 => 'Text',
      'name_educational_institution_extra' => 'Text',
      'diploma_extra'                      => 'Text',
      'year_graduation_extra'              => 'Date',
      'study_extra'                        => 'Text',
      'diploma_qualification_extra'        => 'Text',
      'speciality_diploma_extra'           => 'Text',
      'main_profession'                    => 'Text',
      'other_profession'                   => 'Text',
      'total_length'                       => 'Text',
      'continuous_service'                 => 'Text',
      'last_job'                           => 'Text',
      'termination_date'                   => 'Date',
      'relation_degree'                    => 'Text',
      'marriage_status'                    => 'Text',
      'children'                           => 'Text',
      'date_birth_children'                => 'Text',
      'group_accounting'                   => 'Text',
      'category_accounting'                => 'Text',
      'composition'                        => 'Text',
      'military_rank'                      => 'Text',
      'military_discount_specialty'        => 'Text',
      'number_military_discount_specialty' => 'Text',
      'fitness'                            => 'Text',
      'name_district_military_office'      => 'Text',
      'number_special_accounting'          => 'Text',
      'kind_leave'                         => 'Text',
      'getting_started'                    => 'Date',
      'end_work'                           => 'Date',
      'number_vacation_days'               => 'Text',
      'commencement'                       => 'Date',
      'end_leave'                          => 'Date',
      'base_release'                       => 'Text',
      'more_information'                   => 'Text',
      'token'                              => 'Text',
      'created_at'                         => 'Date',
      'updated_at'                         => 'Date',
    );
  }
}
