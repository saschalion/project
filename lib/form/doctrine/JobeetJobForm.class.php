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
 

          $this->embedRelations(array(
    'Passport' => array(
      'considerNewFormEmptyFields'    => array('passport_number'),
      'noNewForm'                     => true,
      'newFormLabel'                  => null,
      'newFormClass'                  => 'Passport',
      'newFormClassArgs'              => array(array('sf_user' => $this->getOption('sf_user'))),
      'displayEmptyRelations'         => true,
      'formClass'                     => null,
      'formClassArgs'                 => array(array('ah_add_delete_checkbox' => false)),
      'newFormAfterExistingRelations' => true,
      'formFormatter'                 => null,
      'multipleNewForms'              => true,
      'newFormsInitialCount'          => 2,
      'newFormsContainerForm'         => 'ahNewRelationsContainerForm', // pass BaseForm object here or we will create ahNewRelationsContainerForm
      'newRelationButtonLabel'        => '+',
      'newRelationAddByCloning'       => true,
      'newRelationUseJSFramework'     => 'jQuery',
      'customEmbeddedFormLabelMethod' => 'getLabelTitle'
    )
  ));

        $this->embedRelations(array(
    'ForeignLanguage' => array(
      'considerNewFormEmptyFields'    => array('passport_number'),
      'noNewForm'                     => true,
      'newFormLabel'                  => 'Add',
      'newFormClass'                  => 'ForeignLanguage',
      'newFormClassArgs'              => array(array('sf_user' => $this->getOption('sf_user'))),
      'displayEmptyRelations'         => true,
      'formClass'                     => null,
      'formClassArgs'                 => array(array('ah_add_delete_checkbox' => false)),
      'newFormAfterExistingRelations' => true,
      'formFormatter'                 => null,
      'multipleNewForms'              => true,
      'newFormsInitialCount'          => 2,
      'newFormsContainerForm'         => 'ahNewRelationsContainerForm', // pass BaseForm object here or we will create ahNewRelationsContainerForm
      'newRelationButtonLabel'        => '+',
      'newRelationAddByCloning'       => true,
      'newRelationUseJSFramework'     => 'jQuery',
      'customEmbeddedFormLabelMethod' => 'getLabelTitle'
    )
  ));

         $this->embedRelations(array(
    'EducationalInstitution' => array(
      'considerNewFormEmptyFields'    => array('passport_number'),
      'noNewForm'                     => true,
      'newFormLabel'                  => null,
      'newFormClass'                  => 'EducationalInstitution',
      'newFormClassArgs'              => array(array('sf_user' => $this->getOption('sf_user'))),
      'displayEmptyRelations'         => true,
      'formClass'                     => null,
      'formClassArgs'                 => array(array('ah_add_delete_checkbox' => false)),
      'newFormAfterExistingRelations' => true,
      'formFormatter'                 => null,
      'multipleNewForms'              => true,
      'newFormsInitialCount'          => 2,
      'newFormsContainerForm'         => 'ahNewRelationsContainerForm', // pass BaseForm object here or we will create ahNewRelationsContainerForm
      'newRelationButtonLabel'        => '+',
      'newRelationAddByCloning'       => true,
      'newRelationUseJSFramework'     => 'jQuery',
      'customEmbeddedFormLabelMethod' => 'getLabelTitle'
    )
  ));

       $this->embedRelations(array(
    'EducationalInstitutionExtra' => array(
      'considerNewFormEmptyFields'    => array('passport_number'),
      'noNewForm'                     => true,
      'newFormLabel'                  => null,
      'newFormClass'                  => 'EducationalInstitutionExtra',
      'newFormClassArgs'              => array(array('sf_user' => $this->getOption('sf_user'))),
      'displayEmptyRelations'         => true,
      'formClass'                     => null,
      'formClassArgs'                 => array(array('ah_add_delete_checkbox' => false)),
      'newFormAfterExistingRelations' => true,
      'formFormatter'                 => null,
      'multipleNewForms'              => true,
      'newFormsInitialCount'          => 2,
      'newFormsContainerForm'         => 'ahNewRelationsContainerForm', // pass BaseForm object here or we will create ahNewRelationsContainerForm
      'newRelationButtonLabel'        => '+',
      'newRelationAddByCloning'       => true,
      'newRelationUseJSFramework'     => 'jQuery',
      'customEmbeddedFormLabelMethod' => 'getLabelTitle'
    )
  ));

        $this->embedRelations(array(
    'Profession' => array(
      'considerNewFormEmptyFields'    => array('passport_number'),
      'noNewForm'                     => true,
      'newFormLabel'                  => null,
      'newFormClass'                  => 'Profession',
      'newFormClassArgs'              => array(array('sf_user' => $this->getOption('sf_user'))),
      'displayEmptyRelations'         => true,
      'formClass'                     => null,
      'formClassArgs'                 => array(array('ah_add_delete_checkbox' => false)),
      'newFormAfterExistingRelations' => true,
      'formFormatter'                 => null,
      'multipleNewForms'              => true,
      'newFormsInitialCount'          => 2,
      'newFormsContainerForm'         => 'ahNewRelationsContainerForm', // pass BaseForm object here or we will create ahNewRelationsContainerForm
      'newRelationButtonLabel'        => '+',
      'newRelationAddByCloning'       => true,
      'newRelationUseJSFramework'     => 'jQuery',
      'customEmbeddedFormLabelMethod' => 'getLabelTitle'
    )
  ));

     $this->embedRelations(array(
    'Family' => array(
      'considerNewFormEmptyFields'    => array('passport_number'),
      'noNewForm'                     => true,
      'newFormLabel'                  => null,
      'newFormClass'                  => 'Family',
      'newFormClassArgs'              => array(array('sf_user' => $this->getOption('sf_user'))),
      'displayEmptyRelations'         => true,
      'formClass'                     => null,
      'formClassArgs'                 => array(array('ah_add_delete_checkbox' => false)),
      'newFormAfterExistingRelations' => true,
      'formFormatter'                 => null,
      'multipleNewForms'              => true,
      'newFormsInitialCount'          => 2,
      'newFormsContainerForm'         => 'ahNewRelationsContainerForm', // pass BaseForm object here or we will create ahNewRelationsContainerForm
      'newRelationButtonLabel'        => '+',
      'newRelationAddByCloning'       => true,
      'newRelationUseJSFramework'     => 'jQuery',
      'customEmbeddedFormLabelMethod' => 'getLabelTitle'
    )
  ));

     $this->embedRelations(array(
    'MilitaryRecords' => array(
      'considerNewFormEmptyFields'    => array('passport_number'),
      'noNewForm'                     => true,
      'newFormLabel'                  => null,
      'newFormClass'                  => 'MilitaryRecords',
      'newFormClassArgs'              => array(array('sf_user' => $this->getOption('sf_user'))),
      'displayEmptyRelations'         => true,
      'formClass'                     => null,
      'formClassArgs'                 => array(array('ah_add_delete_checkbox' => false)),
      'newFormAfterExistingRelations' => true,
      'formFormatter'                 => null,
      'multipleNewForms'              => true,
      'newFormsInitialCount'          => 2,
      'newFormsContainerForm'         => 'ahNewRelationsContainerForm', // pass BaseForm object here or we will create ahNewRelationsContainerForm
      'newRelationButtonLabel'        => '+',
      'newRelationAddByCloning'       => true,
      'newRelationUseJSFramework'     => 'jQuery',
      'customEmbeddedFormLabelMethod' => 'getLabelTitle'
    )
  ));

     $this->embedRelations(array(
    'LeavingTable' => array(
      'considerNewFormEmptyFields'    => array('passport_number'),
      'noNewForm'                     => true,
      'newFormLabel'                  => null,
      'newFormClass'                  => 'LeavingTable',
      'newFormClassArgs'              => array(array('sf_user' => $this->getOption('sf_user'))),
      'displayEmptyRelations'         => true,
      'formClass'                     => null,
      'formClassArgs'                 => array(array('ah_add_delete_checkbox' => false)),
      'newFormAfterExistingRelations' => true,
      'formFormatter'                 => null,
      'multipleNewForms'              => true,
      'newFormsInitialCount'          => 2,
      'newFormsContainerForm'         => 'ahNewRelationsContainerForm', // pass BaseForm object here or we will create ahNewRelationsContainerForm
      'newRelationButtonLabel'        => '+',
      'newRelationAddByCloning'       => true,
      'newRelationUseJSFramework'     => 'jQuery',
      'customEmbeddedFormLabelMethod' => 'getLabelTitle'
    )
  ));


    $this->widgetSchema['logo'] = new sfWidgetFormInputFile(array(
    'label' => 'Фотография'
    ));

      $this->validatorSchema['email'] = new sfValidatorAnd(array(
      $this->validatorSchema['email'],
    ));

    $this->validatorSchema['logo'] = new sfValidatorFile(array(
      'required'   => false,
      'path'       => sfConfig::get('sf_upload_dir').'/jobs',
      'mime_types' => 'web_images',
    ));

     $this->widgetSchema['type'] = new sfWidgetFormChoice(array(
      'choices'  => Doctrine_Core::getTable('JobeetJob')->getTypesType(),
      'expanded' => true,
      'default'  => 'M'
     )); 

    $this->widgetSchema['type_work'] = new sfWidgetFormChoice(array(
      'choices'  => Doctrine_Core::getTable('JobeetJob')->getTypesTypeWork(),
      'expanded' => true,
      'default'  => 'Основная'
    ));

    $this->widgetSchema['nature_work'] = new sfWidgetFormChoice(array(
      'choices'  => Doctrine_Core::getTable('JobeetJob')->getNatureWork(),
      'expanded' => true,
      'default'  => 'Постоянная'
    ));

   $this->widgetSchema->setLabels(array(
      'Passport'    => false,
      'ForeignLanguage'    => false,
      'EducationalInstitution'    => false,
      'EducationalInstitutionExtra'    => false,
      'Profession'    => false,
      'Family'    => false,
      'MilitaryRecords' => false,
      'LeavingTable' => false,
      'labor_contract' => 'Трудовой договор',
      'labor_contract_date' => 'Дата',
      'citizenship' => 'Гражданство',
      'tab_id' => 'Табельный номер<span class="red">*</span>',
      'number_insurace' => 'ИНН<span class="red">*</span>',
      'nature_work' => 'Характер работ',
      'pension_sertificate' => 'Номер свидетельства ОПС<span class="red">*</span>',
      'type_work' => 'Вид работы',   
      'category_id' => 'Должность',
      'last_name' => 'Фамилия<span class="red">*</span>',
      'first_name' => 'Имя<span class="red">*</span>',
      'three_name' => 'Отчество<span class="red">*</span>',
      'type' => 'Пол',
      'mobile_phone' => 'Мобильный телефон',
      'status_id' => 'Статус',
      'data_birth' => 'Дата рождения<span class="red">*</span>',
      'phone' => 'Телефон<span class="red">*</span>',
      'city_id' => 'Место рождения',
      'adress' => 'Адрес<span class="red">*</span>',
      'email' => '',
      'logo' => 'Фото',  
      'more_information' => 'Сведения',
      'price' => 'Оклад, руб'
));
   

    $this->widgetSchema->setHelp(
     'passport_number', 'Пример: 4502 605593'
    );

    $this->widgetSchema->setHelp(
     'phone', 'Пример: +7(495)156-89-36'
    );

    $this->widgetSchema->setHelp(
     'mobile_phone', 'Пример: +7(913)156-89-36'
    );

    $this->widgetSchema->setHelp(
     'logo', "<input type='button' id='show-passport' 
         value='Показать/Скрыть Паспорт' />

         <input type='button' id='show-educational' 
         value='Показать/Скрыть Образование' />

         <input type='button' id='show-profession' 
         value='Показать/Скрыть Профессию' />"
    );

    $this->widgetSchema['sf_guard_user_id'] = new sfWidgetFormInputHidden();
    $this->validatorSchema['sf_guard_user_id'] = new sfValidatorPass();

    $this->validatorSchema['city_id'] = new sfValidatorPass();
    $this->validatorSchema['category_id'] = new sfValidatorPass();
    $this->validatorSchema['status_id'] = new sfValidatorPass();

parent::configure();

    $this->widgetSchema['logo'] = new sfWidgetFormInputFileEditable(array(
      'label'     => 'Фотография',
      'file_src'  => '/uploads/jobs/'.$this->getObject()->getLogo(),
      'is_image'  => true,
      'edit_mode' => !$this->isNew(),
      'template'  => '<div class="img-block">%file%
          <br />%input%<br />%delete% %delete_label%</div>'
    ));

    $this->validatorSchema['logo_delete'] = new sfValidatorPass();
  }
}