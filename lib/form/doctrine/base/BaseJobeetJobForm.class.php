<?php

/**
 * JobeetJob form base class.
 *
 * @method JobeetJob getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseJobeetJobForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                 => new sfWidgetFormInputHidden(),
      'date_preparation'                   => new sfWidgetFormDate(),
      'tab_id'                             => new sfWidgetFormInputText(),
      'number_insurace'                    => new sfWidgetFormInputText(),
      'pension_sertificate'                => new sfWidgetFormInputText(),
      'nature_work'                        => new sfWidgetFormInputText(),
      'type_work'                          => new sfWidgetFormInputText(),
      'category_id'                        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('JobeetCategory'), 'add_empty' => false)),
      'status_id'                          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'add_empty' => false)),
      'sf_guard_user_id'                   => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => true)),
      'last_name'                          => new sfWidgetFormInputText(),
      'first_name'                         => new sfWidgetFormInputText(),
      'three_name'                         => new sfWidgetFormInputText(),
      'type'                               => new sfWidgetFormInputText(),
      'data_birth'                         => new sfWidgetFormDate(),
      'phone'                              => new sfWidgetFormInputText(),
      'education_id'                       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Education'), 'add_empty' => true)),
      'city_id'                            => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'add_empty' => false)),
      'adress'                             => new sfWidgetFormInputText(),
      'email'                              => new sfWidgetFormInputText(),
      'logo'                               => new sfWidgetFormInputText(),
      'passport_number'                    => new sfWidgetFormInputText(),
      'issuance_passports'                 => new sfWidgetFormInputText(),
      'date_issue_passport'                => new sfWidgetFormDate(),
      'code_division'                      => new sfWidgetFormInputText(),
      'name_foreign_language'              => new sfWidgetFormInputText(),
      'degree_knowledge_foreign_languages' => new sfWidgetFormInputText(),
      'name_educational_institution'       => new sfWidgetFormInputText(),
      'diploma'                            => new sfWidgetFormInputText(),
      'year_graduation'                    => new sfWidgetFormInputText(),
      'diploma_qualification'              => new sfWidgetFormInputText(),
      'speciality_diploma'                 => new sfWidgetFormInputText(),
      'name_educational_institution_extra' => new sfWidgetFormInputText(),
      'diploma_extra'                      => new sfWidgetFormInputText(),
      'year_graduation_extra'              => new sfWidgetFormDate(),
      'study_extra'                        => new sfWidgetFormInputText(),
      'diploma_qualification_extra'        => new sfWidgetFormInputText(),
      'speciality_diploma_extra'           => new sfWidgetFormInputText(),
      'main_profession'                    => new sfWidgetFormInputText(),
      'other_profession'                   => new sfWidgetFormInputText(),
      'total_length'                       => new sfWidgetFormInputText(),
      'continuous_service'                 => new sfWidgetFormInputText(),
      'last_job'                           => new sfWidgetFormInputText(),
      'termination_date'                   => new sfWidgetFormDate(),
      'marriage_status'                    => new sfWidgetFormInputText(),
      'children'                           => new sfWidgetFormInputText(),
      'date_birth_children'                => new sfWidgetFormInputText(),
      'group_accounting'                   => new sfWidgetFormInputText(),
      'category_accounting'                => new sfWidgetFormInputText(),
      'composition'                        => new sfWidgetFormInputText(),
      'military_rank'                      => new sfWidgetFormInputText(),
      'military_discount_specialty'        => new sfWidgetFormInputText(),
      'number_military_discount_specialty' => new sfWidgetFormInputText(),
      'fitness'                            => new sfWidgetFormInputText(),
      'name_district_military_office'      => new sfWidgetFormInputText(),
      'number_special_accounting'          => new sfWidgetFormInputText(),
      'kind_leave'                         => new sfWidgetFormInputText(),
      'getting_started'                    => new sfWidgetFormDate(),
      'end_work'                           => new sfWidgetFormDate(),
      'number_vacation_days'               => new sfWidgetFormInputText(),
      'commencement'                       => new sfWidgetFormDate(),
      'end_leave'                          => new sfWidgetFormDate(),
      'base_release'                       => new sfWidgetFormInputText(),
      'more_information'                   => new sfWidgetFormInputText(),
      'token'                              => new sfWidgetFormInputText(),
      'created_at'                         => new sfWidgetFormDateTime(),
      'updated_at'                         => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'date_preparation'                   => new sfValidatorDate(array('required' => false)),
      'tab_id'                             => new sfValidatorString(array('max_length' => 30)),
      'number_insurace'                    => new sfValidatorString(array('max_length' => 12, 'required' => false)),
      'pension_sertificate'                => new sfValidatorString(array('max_length' => 11, 'required' => false)),
      'nature_work'                        => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'type_work'                          => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'category_id'                        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('JobeetCategory'))),
      'status_id'                          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Status'))),
      'sf_guard_user_id'                   => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'required' => false)),
      'last_name'                          => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'first_name'                         => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'three_name'                         => new sfValidatorString(array('max_length' => 100)),
      'type'                               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'data_birth'                         => new sfValidatorDate(),
      'phone'                              => new sfValidatorString(array('max_length' => 12)),
      'education_id'                       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Education'), 'required' => false)),
      'city_id'                            => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('City'))),
      'adress'                             => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'email'                              => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'logo'                               => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'passport_number'                    => new sfValidatorString(array('max_length' => 11)),
      'issuance_passports'                 => new sfValidatorString(array('max_length' => 50, 'required' => false)),
      'date_issue_passport'                => new sfValidatorDate(array('required' => false)),
      'code_division'                      => new sfValidatorString(array('max_length' => 7, 'required' => false)),
      'name_foreign_language'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'degree_knowledge_foreign_languages' => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'name_educational_institution'       => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'diploma'                            => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'year_graduation'                    => new sfValidatorPass(array('required' => false)),
      'diploma_qualification'              => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'speciality_diploma'                 => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'name_educational_institution_extra' => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'diploma_extra'                      => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'year_graduation_extra'              => new sfValidatorDate(array('required' => false)),
      'study_extra'                        => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'diploma_qualification_extra'        => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'speciality_diploma_extra'           => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'main_profession'                    => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'other_profession'                   => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'total_length'                       => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'continuous_service'                 => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'last_job'                           => new sfValidatorString(array('max_length' => 100, 'required' => false)),
      'termination_date'                   => new sfValidatorDate(array('required' => false)),
      'marriage_status'                    => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'children'                           => new sfValidatorString(array('max_length' => 40, 'required' => false)),
      'date_birth_children'                => new sfValidatorPass(array('required' => false)),
      'group_accounting'                   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'category_accounting'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'composition'                        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'military_rank'                      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'military_discount_specialty'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'number_military_discount_specialty' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fitness'                            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'name_district_military_office'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'number_special_accounting'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'kind_leave'                         => new sfValidatorString(array('max_length' => 80, 'required' => false)),
      'getting_started'                    => new sfValidatorDate(array('required' => false)),
      'end_work'                           => new sfValidatorDate(array('required' => false)),
      'number_vacation_days'               => new sfValidatorString(array('max_length' => 2, 'required' => false)),
      'commencement'                       => new sfValidatorDate(array('required' => false)),
      'end_leave'                          => new sfValidatorDate(array('required' => false)),
      'base_release'                       => new sfValidatorString(array('max_length' => 60, 'required' => false)),
      'more_information'                   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'token'                              => new sfValidatorString(array('max_length' => 255)),
      'created_at'                         => new sfValidatorDateTime(),
      'updated_at'                         => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'JobeetJob', 'column' => array('tab_id'))),
        new sfValidatorDoctrineUnique(array('model' => 'JobeetJob', 'column' => array('email'))),
        new sfValidatorDoctrineUnique(array('model' => 'JobeetJob', 'column' => array('passport_number'))),
        new sfValidatorDoctrineUnique(array('model' => 'JobeetJob', 'column' => array('token'))),
      ))
    );

    $this->widgetSchema->setNameFormat('jobeet_job[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'JobeetJob';
  }

}
