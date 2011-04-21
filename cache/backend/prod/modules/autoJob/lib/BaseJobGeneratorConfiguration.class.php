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
    return array(  'Начальные сведения' =>   array(    0 => 'sf_guard_user_id',    1 => 'tab_id',    2 => 'number_insurace',    3 => 'pension_sertificate',    4 => 'nature_work',    5 => 'type_work',    6 => 'category_id',    7 => 'status_id',    8 => 'price',  ),  'Трудовой договор' =>   array(    0 => 'labor_contract',    1 => 'labor_contract_date',  ),  'Общие сведения' =>   array(    0 => 'last_name',    1 => 'first_name',    2 => 'three_name',    3 => 'type',    4 => 'data_birth',    5 => 'phone',    6 => 'mobile_phone',    7 => 'city_id',    8 => 'citizenship',    9 => 'adress',    10 => 'email',    11 => 'logo',  ),  'Паспорт' =>   array(    0 => 'Passport',  ),  'Знание иностранных языков' =>   array(    0 => 'ForeignLanguage',  ),  'Образование' =>   array(    0 => 'EducationalInstitution',  ),  'Послевузовое профессиональное образование' =>   array(    0 => 'EducationalInstitutionExtra',  ),  'Профессия' =>   array(    0 => 'Profession',  ),  'Воинский учет' =>   array(    0 => 'MilitaryRecords',  ),  'Семейное положение' =>   array(    0 => 'Family',  ),  'Отпуск' =>   array(    0 => 'LeavingTable',  ),  'Дополнительные сведения' =>   array(    0 => 'more_information',  ),);
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
      'price' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'tab_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'number_insurace' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'pension_sertificate' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'nature_work' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'type_work' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'labor_contract' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'labor_contract_date' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'category_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'status_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'sf_guard_user_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'passport_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'foreign_language_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'educational_institution_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'educational_institution_extra_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'profession_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'family_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'military_records_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'leaving_table_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'citizenship' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'last_name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'first_name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'three_name' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'type' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'data_birth' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Date',),
      'phone' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'mobile_phone' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'city_id' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'ForeignKey',),
      'adress' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'email' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
      'logo' => array(  'is_link' => false,  'is_real' => true,  'is_partial' => false,  'is_component' => false,  'type' => 'Text',),
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
      'price' => array(),
      'tab_id' => array(),
      'number_insurace' => array(),
      'pension_sertificate' => array(),
      'nature_work' => array(),
      'type_work' => array(),
      'labor_contract' => array(),
      'labor_contract_date' => array(),
      'category_id' => array(),
      'status_id' => array(),
      'sf_guard_user_id' => array(),
      'passport_id' => array(),
      'foreign_language_id' => array(),
      'educational_institution_id' => array(),
      'educational_institution_extra_id' => array(),
      'profession_id' => array(),
      'family_id' => array(),
      'military_records_id' => array(),
      'leaving_table_id' => array(),
      'citizenship' => array(),
      'last_name' => array(),
      'first_name' => array(),
      'three_name' => array(),
      'type' => array(),
      'data_birth' => array(),
      'phone' => array(),
      'mobile_phone' => array(),
      'city_id' => array(),
      'adress' => array(),
      'email' => array(),
      'logo' => array(),
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
      'price' => array(),
      'tab_id' => array(),
      'number_insurace' => array(),
      'pension_sertificate' => array(),
      'nature_work' => array(),
      'type_work' => array(),
      'labor_contract' => array(),
      'labor_contract_date' => array(),
      'category_id' => array(),
      'status_id' => array(),
      'sf_guard_user_id' => array(),
      'passport_id' => array(),
      'foreign_language_id' => array(),
      'educational_institution_id' => array(),
      'educational_institution_extra_id' => array(),
      'profession_id' => array(),
      'family_id' => array(),
      'military_records_id' => array(),
      'leaving_table_id' => array(),
      'citizenship' => array(),
      'last_name' => array(),
      'first_name' => array(),
      'three_name' => array(),
      'type' => array(),
      'data_birth' => array(),
      'phone' => array(),
      'mobile_phone' => array(),
      'city_id' => array(),
      'adress' => array(),
      'email' => array(),
      'logo' => array(),
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
      'price' => array(),
      'tab_id' => array(),
      'number_insurace' => array(),
      'pension_sertificate' => array(),
      'nature_work' => array(),
      'type_work' => array(),
      'labor_contract' => array(),
      'labor_contract_date' => array(),
      'category_id' => array(),
      'status_id' => array(),
      'sf_guard_user_id' => array(),
      'passport_id' => array(),
      'foreign_language_id' => array(),
      'educational_institution_id' => array(),
      'educational_institution_extra_id' => array(),
      'profession_id' => array(),
      'family_id' => array(),
      'military_records_id' => array(),
      'leaving_table_id' => array(),
      'citizenship' => array(),
      'last_name' => array(),
      'first_name' => array(),
      'three_name' => array(),
      'type' => array(),
      'data_birth' => array(),
      'phone' => array(),
      'mobile_phone' => array(),
      'city_id' => array(),
      'adress' => array(),
      'email' => array(),
      'logo' => array(),
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
      'price' => array(),
      'tab_id' => array(),
      'number_insurace' => array(),
      'pension_sertificate' => array(),
      'nature_work' => array(),
      'type_work' => array(),
      'labor_contract' => array(),
      'labor_contract_date' => array(),
      'category_id' => array(),
      'status_id' => array(),
      'sf_guard_user_id' => array(),
      'passport_id' => array(),
      'foreign_language_id' => array(),
      'educational_institution_id' => array(),
      'educational_institution_extra_id' => array(),
      'profession_id' => array(),
      'family_id' => array(),
      'military_records_id' => array(),
      'leaving_table_id' => array(),
      'citizenship' => array(),
      'last_name' => array(),
      'first_name' => array(),
      'three_name' => array(),
      'type' => array(),
      'data_birth' => array(),
      'phone' => array(),
      'mobile_phone' => array(),
      'city_id' => array(),
      'adress' => array(),
      'email' => array(),
      'logo' => array(),
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
      'price' => array(),
      'tab_id' => array(),
      'number_insurace' => array(),
      'pension_sertificate' => array(),
      'nature_work' => array(),
      'type_work' => array(),
      'labor_contract' => array(),
      'labor_contract_date' => array(),
      'category_id' => array(),
      'status_id' => array(),
      'sf_guard_user_id' => array(),
      'passport_id' => array(),
      'foreign_language_id' => array(),
      'educational_institution_id' => array(),
      'educational_institution_extra_id' => array(),
      'profession_id' => array(),
      'family_id' => array(),
      'military_records_id' => array(),
      'leaving_table_id' => array(),
      'citizenship' => array(),
      'last_name' => array(),
      'first_name' => array(),
      'three_name' => array(),
      'type' => array(),
      'data_birth' => array(),
      'phone' => array(),
      'mobile_phone' => array(),
      'city_id' => array(),
      'adress' => array(),
      'email' => array(),
      'logo' => array(),
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
