<?php

/**
 * EducationalInstitution form.
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EducationalInstitutionForm extends BaseEducationalInstitutionForm
{
     function doBind(array $values)
  {
    $values['year_graduation']['day']= null;
    $values['year_graduation']['month']= null;
    parent::doBind($values);
  }

  public function configure()
  {

        unset(
        $this['created_at'], $this['updated_at']
        );

        $yearsgraduation = range(date('Y'), date('Y')-30);
        $yearsgraduation = array_combine($yearsgraduation, $yearsgraduation);
        $this->widgetSchema['year_graduation'] = new sfWidgetFormDate(array(
          'format' => '%year%',
          'years'  => $yearsgraduation
        ));    
        
        $this->widgetSchema['education_id']->setDefault('1'
        );

        $this->widgetSchema->setLabels(array(
          'name_educational_institution' => 'Наименование образовательного учреждения',
          'diploma' => 'Диплом: серия, номер',
          'year_graduation' => 'Год окончания',
          'education_id' => 'Образование',
          'diploma_qualification' => 'Квалификация по диплому',
          'speciality_diploma' => 'Направление или специальность по диплому'
        ));
        
        $this->widgetSchema->setHelp(
     'speciality_diploma', "<input type='button' id='show-educational-extra' class='show-button' value='Показать/Скрыть Доп. образование' />"
    );
  }

}
