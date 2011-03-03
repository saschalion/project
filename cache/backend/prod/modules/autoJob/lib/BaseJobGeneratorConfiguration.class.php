<?php

/**
 * job module configuration.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage job
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: configuration.php 24171 2009-11-19 16:37:50Z Kris.Wallsmith $
 */
abstract class BaseJobGeneratorConfiguration extends sfModelGeneratorConfiguration
{
  public function getActionsDefault()
  {
    return array();
  }

  public function getFormActions()
  {
    return array(  '_delete' => NULL,  '_list' => NULL,  '_save' => NULL,  '_save_and_add' => NULL,);
  }

  public function getNewActions()
  {
    return array();
  }

  public function getEditActions()
  {
    return array();
  }

  public function getListObjectActions()
  {
    return array(  '_edit' => NULL,  '_delete' => NULL,);
  }

  public function getListActions()
  {
    return array(  '_new' => NULL,);
  }

  public function getListBatchActions()
  {
    return array(  '_delete' => NULL,);
  }

  public function getListParams()
  {
    return '%%tab_id%% - %%=jobeet_category%% - %%first_name%% - %%last_name%% - %%data_id%% - %%education%%';
  }

  public function getListLayout()
  {
    return 'tabular';
  }

  public function getListTitle()
  {
    return 'Сотрудники';
  }

  public function getEditTitle()
  {
    return 'Редактировать';
  }

  public function getNewTitle()
  {
    return 'Новый сотрудник';
  }

  public function getFilterDisplay()
  {
    return array(  0 => 'tab_id',  1 => 'last_name',  2 => 'first_name',);
  }

  public function getFormDisplay()
  {
    return array(  'Начальные сведения' =>   array(    0 => 'sf_guard_user_id',    1 => 'tab_id',    2 => 'number_insurace',    3 => 'pension_sertificate',    4 => 'nature_work',    5 => 'type_work',    6 => 'category_id',    7 => 'status_id',  ),  'Общие сведения' =>   array(    0 => 'last_name',    1 => 'first_name',    2 => 'three_name',    3 => 'type',    4 => 'data_birth',    5 => 'phone',    6 => 'city_id',    7 => 'adress',    8 => 'email',    9 => 'logo',  ),  'Паспорт' =>   array(    0 => 'passport_number',    1 => 'issuance_passports',    2 => 'date_issue_passport',    3 => 'code_division',  ),  'Знание иностранных языков' =>   array(    0 => 'name_foreign_language',    1 => 'degree_knowledge_foreign_languages',  ),  'Образование' =>   array(    0 => 'education_id',    1 => 'name_educational_institution',    2 => 'diploma',    3 => 'year_graduation',    4 => 'diploma_qualification',    5 => 'speciality_diploma',  ),  'Послевузовое профессиональное образование' =>   array(    0 => 'name_educational_institution_extra',    1 => 'diploma_extra',    2 => 'year_graduation_extra',    3 => 'diploma_qualification_extra',    4 => 'speciality_diploma_extra',  ),  'Профессия' =>   array(    0 => 'main_profession',    1 => 'other_profession',    2 => 'total_length',    3 => 'continuous_service',    4 => 'last_job',    5 => 'termination_date',  ),  'Семейное положение' =>   array(    0 => 'marriage_status',    1 => 'children',    2 => 'date_birth_children',  ),  'Воинский учет' =>   array(    0 => 'group_accounting',    1 => 'category_accounting',    2 => 'composition',    3 => 'military_rank',    4 => 'military_discount_specialty',    5 => 'number_military_discount_specialty',    6 => 'name_district_military_office',    7 => 'number_special_accounting',  ),  'Отпуск' =>   array(    0 => 'kind_leave',    1 => 'getting_started',    2 => 'end_work',    3 => 'number_vacation_days',    4 => 'commencement',    5 => 'end_leave',    6 => 'base_release',  ),  'Дополнительные сведения' =>   array(    0 => 'more_information',  ),);
  }

  public function getEditDisplay()
  {
    return array();
  }

  public function getNewDisplay()
  {
    return array();
  }

  public function getListDisplay()
  {
    return array(  0 => 'tab_id',  1 => '=jobeet_category',  2 => 'first_name',  3 => 'last_name',  4 => 'data_id',  5 => 'education',);
  }

  public function getFieldsDefault()
  {
    return array(
      'id' => array(  'is_link' => true,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'date_preparation' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'tab_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'number_insurace' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'pension_sertificate' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nature_work' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'type_work' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'category_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'status_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'sf_guard_user_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'last_name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'first_name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'three_name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'type' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'data_birth' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'phone' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'education_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'city_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'adress' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'email' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'logo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'passport_number' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'issuance_passports' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'date_issue_passport' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'code_division' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'name_foreign_language' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'degree_knowledge_foreign_languages' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'name_educational_institution' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'diploma' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'year_graduation' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'diploma_qualification' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'speciality_diploma' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'name_educational_institution_extra' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'diploma_extra' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'year_graduation_extra' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'study_extra' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'diploma_qualification_extra' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'speciality_diploma_extra' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'main_profession' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'other_profession' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'total_length' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'continuous_service' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'last_job' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'termination_date' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'marriage_status' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'children' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'date_birth_children' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'group_accounting' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'category_accounting' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'composition' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'military_rank' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'military_discount_specialty' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'number_military_discount_specialty' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'fitness' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'name_district_military_office' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'number_special_accounting' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'kind_leave' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'getting_started' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'end_work' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'number_vacation_days' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'commencement' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'end_leave' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'base_release' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'more_information' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'token' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'created_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'updated_at' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
    );
  }

  public function getFieldsList()
  {
    return array(
      'id' => array(),
      'date_preparation' => array(),
      'tab_id' => array(),
      'number_insurace' => array(),
      'pension_sertificate' => array(),
      'nature_work' => array(),
      'type_work' => array(),
      'category_id' => array(),
      'status_id' => array(),
      'sf_guard_user_id' => array(),
      'last_name' => array(),
      'first_name' => array(),
      'three_name' => array(),
      'type' => array(),
      'data_birth' => array(),
      'phone' => array(),
      'education_id' => array(),
      'city_id' => array(),
      'adress' => array(),
      'email' => array(),
      'logo' => array(),
      'passport_number' => array(),
      'issuance_passports' => array(),
      'date_issue_passport' => array(),
      'code_division' => array(),
      'name_foreign_language' => array(),
      'degree_knowledge_foreign_languages' => array(),
      'name_educational_institution' => array(),
      'diploma' => array(),
      'year_graduation' => array(),
      'diploma_qualification' => array(),
      'speciality_diploma' => array(),
      'name_educational_institution_extra' => array(),
      'diploma_extra' => array(),
      'year_graduation_extra' => array(),
      'study_extra' => array(),
      'diploma_qualification_extra' => array(),
      'speciality_diploma_extra' => array(),
      'main_profession' => array(),
      'other_profession' => array(),
      'total_length' => array(),
      'continuous_service' => array(),
      'last_job' => array(),
      'termination_date' => array(),
      'marriage_status' => array(),
      'children' => array(),
      'date_birth_children' => array(),
      'group_accounting' => array(),
      'category_accounting' => array(),
      'composition' => array(),
      'military_rank' => array(),
      'military_discount_specialty' => array(),
      'number_military_discount_specialty' => array(),
      'fitness' => array(),
      'name_district_military_office' => array(),
      'number_special_accounting' => array(),
      'kind_leave' => array(),
      'getting_started' => array(),
      'end_work' => array(),
      'number_vacation_days' => array(),
      'commencement' => array(),
      'end_leave' => array(),
      'base_release' => array(),
      'more_information' => array(),
      'token' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsFilter()
  {
    return array(
      'id' => array(),
      'date_preparation' => array(),
      'tab_id' => array(),
      'number_insurace' => array(),
      'pension_sertificate' => array(),
      'nature_work' => array(),
      'type_work' => array(),
      'category_id' => array(),
      'status_id' => array(),
      'sf_guard_user_id' => array(),
      'last_name' => array(),
      'first_name' => array(),
      'three_name' => array(),
      'type' => array(),
      'data_birth' => array(),
      'phone' => array(),
      'education_id' => array(),
      'city_id' => array(),
      'adress' => array(),
      'email' => array(),
      'logo' => array(),
      'passport_number' => array(),
      'issuance_passports' => array(),
      'date_issue_passport' => array(),
      'code_division' => array(),
      'name_foreign_language' => array(),
      'degree_knowledge_foreign_languages' => array(),
      'name_educational_institution' => array(),
      'diploma' => array(),
      'year_graduation' => array(),
      'diploma_qualification' => array(),
      'speciality_diploma' => array(),
      'name_educational_institution_extra' => array(),
      'diploma_extra' => array(),
      'year_graduation_extra' => array(),
      'study_extra' => array(),
      'diploma_qualification_extra' => array(),
      'speciality_diploma_extra' => array(),
      'main_profession' => array(),
      'other_profession' => array(),
      'total_length' => array(),
      'continuous_service' => array(),
      'last_job' => array(),
      'termination_date' => array(),
      'marriage_status' => array(),
      'children' => array(),
      'date_birth_children' => array(),
      'group_accounting' => array(),
      'category_accounting' => array(),
      'composition' => array(),
      'military_rank' => array(),
      'military_discount_specialty' => array(),
      'number_military_discount_specialty' => array(),
      'fitness' => array(),
      'name_district_military_office' => array(),
      'number_special_accounting' => array(),
      'kind_leave' => array(),
      'getting_started' => array(),
      'end_work' => array(),
      'number_vacation_days' => array(),
      'commencement' => array(),
      'end_leave' => array(),
      'base_release' => array(),
      'more_information' => array(),
      'token' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsForm()
  {
    return array(
      'id' => array(),
      'date_preparation' => array(),
      'tab_id' => array(),
      'number_insurace' => array(),
      'pension_sertificate' => array(),
      'nature_work' => array(),
      'type_work' => array(),
      'category_id' => array(),
      'status_id' => array(),
      'sf_guard_user_id' => array(),
      'last_name' => array(),
      'first_name' => array(),
      'three_name' => array(),
      'type' => array(),
      'data_birth' => array(),
      'phone' => array(),
      'education_id' => array(),
      'city_id' => array(),
      'adress' => array(),
      'email' => array(),
      'logo' => array(),
      'passport_number' => array(),
      'issuance_passports' => array(),
      'date_issue_passport' => array(),
      'code_division' => array(),
      'name_foreign_language' => array(),
      'degree_knowledge_foreign_languages' => array(),
      'name_educational_institution' => array(),
      'diploma' => array(),
      'year_graduation' => array(),
      'diploma_qualification' => array(),
      'speciality_diploma' => array(),
      'name_educational_institution_extra' => array(),
      'diploma_extra' => array(),
      'year_graduation_extra' => array(),
      'study_extra' => array(),
      'diploma_qualification_extra' => array(),
      'speciality_diploma_extra' => array(),
      'main_profession' => array(),
      'other_profession' => array(),
      'total_length' => array(),
      'continuous_service' => array(),
      'last_job' => array(),
      'termination_date' => array(),
      'marriage_status' => array(),
      'children' => array(),
      'date_birth_children' => array(),
      'group_accounting' => array(),
      'category_accounting' => array(),
      'composition' => array(),
      'military_rank' => array(),
      'military_discount_specialty' => array(),
      'number_military_discount_specialty' => array(),
      'fitness' => array(),
      'name_district_military_office' => array(),
      'number_special_accounting' => array(),
      'kind_leave' => array(),
      'getting_started' => array(),
      'end_work' => array(),
      'number_vacation_days' => array(),
      'commencement' => array(),
      'end_leave' => array(),
      'base_release' => array(),
      'more_information' => array(),
      'token' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsEdit()
  {
    return array(
      'id' => array(),
      'date_preparation' => array(),
      'tab_id' => array(),
      'number_insurace' => array(),
      'pension_sertificate' => array(),
      'nature_work' => array(),
      'type_work' => array(),
      'category_id' => array(),
      'status_id' => array(),
      'sf_guard_user_id' => array(),
      'last_name' => array(),
      'first_name' => array(),
      'three_name' => array(),
      'type' => array(),
      'data_birth' => array(),
      'phone' => array(),
      'education_id' => array(),
      'city_id' => array(),
      'adress' => array(),
      'email' => array(),
      'logo' => array(),
      'passport_number' => array(),
      'issuance_passports' => array(),
      'date_issue_passport' => array(),
      'code_division' => array(),
      'name_foreign_language' => array(),
      'degree_knowledge_foreign_languages' => array(),
      'name_educational_institution' => array(),
      'diploma' => array(),
      'year_graduation' => array(),
      'diploma_qualification' => array(),
      'speciality_diploma' => array(),
      'name_educational_institution_extra' => array(),
      'diploma_extra' => array(),
      'year_graduation_extra' => array(),
      'study_extra' => array(),
      'diploma_qualification_extra' => array(),
      'speciality_diploma_extra' => array(),
      'main_profession' => array(),
      'other_profession' => array(),
      'total_length' => array(),
      'continuous_service' => array(),
      'last_job' => array(),
      'termination_date' => array(),
      'marriage_status' => array(),
      'children' => array(),
      'date_birth_children' => array(),
      'group_accounting' => array(),
      'category_accounting' => array(),
      'composition' => array(),
      'military_rank' => array(),
      'military_discount_specialty' => array(),
      'number_military_discount_specialty' => array(),
      'fitness' => array(),
      'name_district_military_office' => array(),
      'number_special_accounting' => array(),
      'kind_leave' => array(),
      'getting_started' => array(),
      'end_work' => array(),
      'number_vacation_days' => array(),
      'commencement' => array(),
      'end_leave' => array(),
      'base_release' => array(),
      'more_information' => array(),
      'token' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }

  public function getFieldsNew()
  {
    return array(
      'id' => array(),
      'date_preparation' => array(),
      'tab_id' => array(),
      'number_insurace' => array(),
      'pension_sertificate' => array(),
      'nature_work' => array(),
      'type_work' => array(),
      'category_id' => array(),
      'status_id' => array(),
      'sf_guard_user_id' => array(),
      'last_name' => array(),
      'first_name' => array(),
      'three_name' => array(),
      'type' => array(),
      'data_birth' => array(),
      'phone' => array(),
      'education_id' => array(),
      'city_id' => array(),
      'adress' => array(),
      'email' => array(),
      'logo' => array(),
      'passport_number' => array(),
      'issuance_passports' => array(),
      'date_issue_passport' => array(),
      'code_division' => array(),
      'name_foreign_language' => array(),
      'degree_knowledge_foreign_languages' => array(),
      'name_educational_institution' => array(),
      'diploma' => array(),
      'year_graduation' => array(),
      'diploma_qualification' => array(),
      'speciality_diploma' => array(),
      'name_educational_institution_extra' => array(),
      'diploma_extra' => array(),
      'year_graduation_extra' => array(),
      'study_extra' => array(),
      'diploma_qualification_extra' => array(),
      'speciality_diploma_extra' => array(),
      'main_profession' => array(),
      'other_profession' => array(),
      'total_length' => array(),
      'continuous_service' => array(),
      'last_job' => array(),
      'termination_date' => array(),
      'marriage_status' => array(),
      'children' => array(),
      'date_birth_children' => array(),
      'group_accounting' => array(),
      'category_accounting' => array(),
      'composition' => array(),
      'military_rank' => array(),
      'military_discount_specialty' => array(),
      'number_military_discount_specialty' => array(),
      'fitness' => array(),
      'name_district_military_office' => array(),
      'number_special_accounting' => array(),
      'kind_leave' => array(),
      'getting_started' => array(),
      'end_work' => array(),
      'number_vacation_days' => array(),
      'commencement' => array(),
      'end_leave' => array(),
      'base_release' => array(),
      'more_information' => array(),
      'token' => array(),
      'created_at' => array(),
      'updated_at' => array(),
    );
  }


  /**
   * Gets the form class name.
   *
   * @return string The form class name
   */
  public function getFormClass()
  {
    return 'JobeetJobForm';
  }

  public function hasFilterForm()
  {
    return true;
  }

  /**
   * Gets the filter form class name
   *
   * @return string The filter form class name associated with this generator
   */
  public function getFilterFormClass()
  {
    return 'JobeetJobFormFilter';
  }

  public function getPagerClass()
  {
    return 'sfDoctrinePager';
  }

  public function getPagerMaxPerPage()
  {
    return 10;
  }

  public function getDefaultSort()
  {
    return array(null, null);
  }

  public function getTableMethod()
  {
    return '';
  }

  public function getTableCountMethod()
  {
    return '';
  }
}
