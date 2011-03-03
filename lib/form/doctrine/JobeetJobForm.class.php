<?php

/**
 * JobeetJob form.
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
// lib/form/doctrine/JobeetJobForm.class.php
// lib/form/doctrine/JobeetJobForm.class.php
// lib/form/doctrine/JobeetJobForm.class.php



class JobeetJobForm extends BaseJobeetJobForm
{
  public function configure()
  {
    unset(
      $this['created_at'], $this['updated_at'],
      $this['expires_at'], $this['is_activated'],
      $this['token'], $this['name']
     );
 

//          $this->embedRelations(array(
//    'City' => array(
//      'considerNewFormEmptyFields'    => array('name', 'repo_path', 'repo_username', 'repo_password'),
//      'noNewForm'                     => false,
//      'newFormLabel'                  => null,
//      'newFormClass'                  => null,
//      'newFormClassArgs'              => array(array('sf_user' => $this->getOption('sf_user'))),
//      'displayEmptyRelations'         => true,
//      'formClass'                     => null,
//      'formClassArgs'                 => array(array('ah_add_delete_checkbox' => false)),
//      'newFormAfterExistingRelations' => true,
//      'formFormatter'                 => null,
//      'multipleNewForms'              => true,
//      'newFormsInitialCount'          => 2,
//      'newFormsContainerForm'         => 'ahNewRelationsContainerForm', // pass BaseForm object here or we will create ahNewRelationsContainerForm
//      'newRelationButtonLabel'        => '+',
//      'newRelationAddByCloning'       => true,
//      'newRelationUseJSFramework'     => 'jQuery',
//      'customEmbeddedFormLabelMethod' => 'getLabelTitle'
//    )
//  ));





    $this->widgetSchema['logo'] = new sfWidgetFormInputFile(array(
    'label' => 'Фотография'
    ));

//    $this->widgetSchema['sf_guard_user_id'] = new sfWidgetFormInput(array(
//        'label' => 'Пользователь'
//    ));
//
//
//
//    $this->widgetSchema['sf_guard_user_id']->setDefault($this->getObject()->getUser()
//);

    $this->validatorSchema['email'] = new sfValidatorAnd(array(
      $this->validatorSchema['email'],
      new sfValidatorEmail(),
    ));

    $this->validatorSchema['logo'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/jobs',
      'mime_types' => 'web_images',
    ));


     $this->widgetSchema['type'] = new sfWidgetFormChoice(array(
      'choices'  => Doctrine_Core::getTable('JobeetJob')->getTypesType(),
      'expanded' => true
    ));
    
     $this->widgetSchema['nature_work'] = new sfWidgetFormChoice(array(
      'choices'  => Doctrine_Core::getTable('JobeetJob')->getNatureWork(),
      'expanded' => true
    ));

    $this->widgetSchema['type_work'] = new sfWidgetFormChoice(array(
      'choices'  => Doctrine_Core::getTable('JobeetJob')->getTypesTypeWork(),
      'expanded' => true
    ));

    $this->widgetSchema['degree_knowledge_foreign_languages'] = new sfWidgetFormChoice(array(
      'choices'  => Doctrine_Core::getTable('JobeetJob')->getForeignLanguages(),
      'expanded' => false
    ));

   $this->widgetSchema->setLabels(array(
      'City'    => false,
      'date_preparation' => 'Дата составления',
      'tab_id' => 'Табельный номер',
      'number_insurace' => 'ИНН',
      'nature_work' => 'Характер работ',
      'pension_sertificate' => 'Номер свидетельства ОПС',
      'type_work' => 'Вид работы',
      'sf_guard_user_id' => 'Пользователь',
      'category_id' => 'Должность',
      'last_name' => 'Фамилия',
      'first_name' => 'Имя',
      'three_name' => 'Отчество',
      'type' => 'Пол',
      'status_id' => 'Статус',
      'data_birth' => 'Дата рождения',
      'phone' => 'Телефон',
      'city_id' => 'Город',
      'adress' => 'Адрес',
      'passport_number' => '№, серия',
      'issuance_passports' => 'Кем выдан',
      'date_issue_passport' => 'Дата выдачи',
      'code_division' => 'Код подразделения',
      'email' => '',
      'logo' => 'Фото',
      'name_foreign_language' => 'Наименование',
      'degree_knowledge_foreign_languages' => 'Степень знания',
      'name_educational_institution' => 'Наименование образовательного учреждения',
      'diploma' => 'Диплом: серия, номер',
      'year_graduation' => 'Год окончания',
      'education_id' => 'Образование',
      'diploma_qualification' => 'Квалификация по диплому',
      'speciality_diploma' => 'Направление или специальность по диплому',
      'name_educational_institution_extra' => 'Наименование образовательного учреждения',
      'diploma_extra' => 'Диплом: серия, номер',
      'year_graduation_extra' => 'Год окончания',
      'diploma_qualification_extra' => 'Квалификация по диплому',
      'speciality_diploma_extra' => 'Направление или специальность по диплому',
      'main_profession' => 'Основная',
      'other_profession' => 'Другая',
      'total_length' => 'Общий стаж',
      'continuous_service' => 'Непрерывный стаж',
      'last_job' => 'Последнее место работы',
      'termination_date' => 'Дата увольнения',
      'marriage_status' => 'Состояние в браке',
      'children' => 'Дети, ФИО',
      'date_birth_children' => 'Дата рождения',
      'group_accounting' => 'Группа учета',
      'category_accounting' => 'Категория учета',
      'composition' => 'Состав',
      'military_rank' => 'Воинское звание',
      'military_discount_specialty' => 'Воен. учетн. спец.',
      'number_military_discount_specialty' => '№',
      'name_district_military_office' => 'Годность',
      'number_special_accounting' => 'Название районного военкомата',
      'kind_leave' => 'Вид отпуска',
      'getting_started' => 'Период работы с',
      'end_work' => 'по',
      'number_vacation_days' => 'Количество календарных дней отпуска',
      'commencement' => 'Дата начала',
      'end_leave' => 'Дата окончания',
      'base_release' => 'Основание',
      'more_information' => 'Сведения'
));

//    $this->widgetSchema['sf_guard_user_id'] = new sfWidgetFormInputHidden();
//
//    $this->validatorSchema['sf_guard_user_id'] = new sfValidatorPass();

    $this->widgetSchema->setHelp(
     'passport_number', 'Пример: 4502 605593'
         );

    $this->widgetSchema->setHelp(
     'phone', 'Пример: +7(905)156-89-36'
         );

parent::configure();

    $this->widgetSchema['logo'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Фотография',
      'file_src'  => '/uploads/jobs/'.$this->getObject()->getLogo(),
      'is_image'  => true,
      'edit_mode' => !$this->isNew(),
      'template'  => '<div>%file%<br />%input%<br />%delete% %delete_label%</div>',
    ));

    $this->validatorSchema['logo_delete'] = new sfValidatorPass();
  }
}