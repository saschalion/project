<?php

/**
 * EducationalInstitutionExtra form.
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class EducationalInstitutionExtraForm extends BaseEducationalInstitutionExtraForm
{
  public function configure()
  {
      unset(
      $this['study_extra']
    );

        $this->widgetSchema['kind_learning'] = new sfWidgetFormChoice(array(
          'choices'  => Doctrine_Core::getTable('JobeetJob')->getKindLearning(),
          'expanded' => false,
          'default' => ''
        ));

       $this->widgetSchema->setLabels(array(
          'kind_learning' => 'Вид обучения', 
          'name_educational_institution_extra' => 'Наименование образовательного учреждения',
          'diploma_extra' => 'Диплом: серия, номер',
          'year_graduation_extra' => 'Год окончания',
          'diploma_qualification_extra' => 'Квалификация по диплому',
          'speciality_diploma_extra' => 'Направление или специальность по диплому'
        ));
  }
}
