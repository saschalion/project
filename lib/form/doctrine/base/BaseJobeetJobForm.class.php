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
      'id'                               => new sfWidgetFormInputHidden(),
      'price'                            => new sfWidgetFormInputText(),
      'tab_id'                           => new sfWidgetFormInputText(),
      'number_insurace'                  => new sfWidgetFormInputText(),
      'pension_sertificate'              => new sfWidgetFormInputText(),
      'nature_work'                      => new sfWidgetFormInputText(),
      'type_work'                        => new sfWidgetFormInputText(),
      'category_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('JobeetCategory'), 'add_empty' => false)),
      'status_id'                        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Status'), 'add_empty' => false)),
      'sf_guard_user_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('User'), 'add_empty' => false)),
      'passport_id'                      => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Passport'), 'add_empty' => true)),
      'foreign_language_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('ForeignLanguage'), 'add_empty' => true)),
      'educational_institution_id'       => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EducationalInstitution'), 'add_empty' => true)),
      'educational_institution_extra_id' => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('EducationalInstitutionExtra'), 'add_empty' => true)),
      'profession_id'                    => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Profession'), 'add_empty' => true)),
      'family_id'                        => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('Family'), 'add_empty' => true)),
      'military_records_id'              => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('MilitaryRecords'), 'add_empty' => true)),
      'leaving_table_id'                 => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('LeavingTable'), 'add_empty' => true)),
      'citizenship'                      => new sfWidgetFormInputText(),
      'last_name'                        => new sfWidgetFormInputText(),
      'first_name'                       => new sfWidgetFormInputText(),
      'three_name'                       => new sfWidgetFormInputText(),
      'type'                             => new sfWidgetFormInputText(),
      'data_birth'                       => new sfWidgetFormDate(),
      'phone'                            => new sfWidgetFormInputText(),
      'mobile_phone'                     => new sfWidgetFormInputText(),
      'city_id'                          => new sfWidgetFormDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'add_empty' => true)),
      'adress'                           => new sfWidgetFormInputText(),
      'email'                            => new sfWidgetFormInputText(),
      'logo'                             => new sfWidgetFormInputText(),
      'more_information'                 => new sfWidgetFormInputText(),
      'token'                            => new sfWidgetFormInputText(),
      'created_at'                       => new sfWidgetFormDateTime(),
      'updated_at'                       => new sfWidgetFormDateTime(),
    ));

    $this->setValidators(array(
      'id'                               => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'price'                            => new sfValidatorNumber(array('required' => false)),
      'tab_id'                           => new sfValidatorString(array('max_length' => 30)),
      'number_insurace'                  => new sfValidatorString(array('max_length' => 12)),
      'pension_sertificate'              => new sfValidatorString(array('max_length' => 15)),
      'nature_work'                      => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'type_work'                        => new sfValidatorString(array('max_length' => 30, 'required' => false)),
      'category_id'                      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('JobeetCategory'))),
      'status_id'                        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Status'))),
      'sf_guard_user_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('User'))),
      'passport_id'                      => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Passport'), 'required' => false)),
      'foreign_language_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('ForeignLanguage'), 'required' => false)),
      'educational_institution_id'       => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('EducationalInstitution'), 'required' => false)),
      'educational_institution_extra_id' => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('EducationalInstitutionExtra'), 'required' => false)),
      'profession_id'                    => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Profession'), 'required' => false)),
      'family_id'                        => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('Family'), 'required' => false)),
      'military_records_id'              => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('MilitaryRecords'), 'required' => false)),
      'leaving_table_id'                 => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('LeavingTable'), 'required' => false)),
      'citizenship'                      => new sfValidatorString(array('max_length' => 150, 'required' => false)),
      'last_name'                        => new sfValidatorString(array('max_length' => 100)),
      'first_name'                       => new sfValidatorString(array('max_length' => 100)),
      'three_name'                       => new sfValidatorString(array('max_length' => 100)),
      'type'                             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'data_birth'                       => new sfValidatorDate(),
      'phone'                            => new sfValidatorString(array('max_length' => 20)),
      'mobile_phone'                     => new sfValidatorString(array('max_length' => 20, 'required' => false)),
      'city_id'                          => new sfValidatorDoctrineChoice(array('model' => $this->getRelatedModelName('City'), 'required' => false)),
      'adress'                           => new sfValidatorString(array('max_length' => 150)),
      'email'                            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'logo'                             => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'more_information'                 => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'token'                            => new sfValidatorString(array('max_length' => 255)),
      'created_at'                       => new sfValidatorDateTime(),
      'updated_at'                       => new sfValidatorDateTime(),
    ));

    $this->validatorSchema->setPostValidator(
      new sfValidatorAnd(array(
        new sfValidatorDoctrineUnique(array('model' => 'JobeetJob', 'column' => array('tab_id'))),
        new sfValidatorDoctrineUnique(array('model' => 'JobeetJob', 'column' => array('email'))),
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
