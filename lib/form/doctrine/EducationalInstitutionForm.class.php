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
  public function configure()
  {

        unset(
        $this['created_at'], $this['updated_at']
        );
        
        $this->widgetSchema['education_id']->setDefault('1'
        );

        $this->widgetSchema['kind_learning'] = new sfWidgetFormChoice(array(
          'choices'  => Doctrine_Core::getTable('JobeetJob')->getKindLearning(),
          'expanded' => false,
          'default' => ''
        ));

         $this->widgetSchema->setLabels(array(
          'kind_learning' => 'Вид обучения',
          'name_educational_institution' => 'Наименование образовательного учреждения',
          'diploma' => 'Диплом: серия, номер',
          'year_graduation' => 'Год окончания',
          'education_id' => 'Образование',
          'diploma_qualification' => 'Квалификация по диплому',
          'speciality_diploma' => 'Направление или специальность по диплому'
        ));

        
  }
}
