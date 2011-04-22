<?php

/**
 * Family form.
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class FamilyForm extends BaseFamilyForm
{
  public function configure()
  {
    $this->widgetSchema['relation_degree'] = new sfWidgetFormChoice(array(
      'choices'  => Doctrine_Core::getTable('JobeetJob')->getRelationDegree(),
      'expanded' => false
    ));

    $this->widgetSchema['marriage_status'] = new sfWidgetFormChoice(array(
      'choices'  => array(
          'Не замужем / Холост' => 'Не замужем / Холост',
          'Замужем / Женат'     => 'Замужем / Женат'
      ),
      'expanded' => false
    ));

    $yearDate = range(date('Y'), date('Y')-40);
       $this->widgetSchema['date_birth_children'] = new sfWidgetFormDate(array(
            'format' => ' %day% - %month% - %year%',
            'years'  => array_combine($yearDate, $yearDate)
    ));

    $this->widgetSchema->setLabels(array(
      'marriage_status' => 'Состояние в браке',
      'children' => 'Дети, ФИО',
      'date_birth_children' => 'Дата рождения',
      'relation_degree' => 'Степень родства'
    ));

    $this->widgetSchema->setHelp(
     'date_birth_children', "<input type='button' id='show-leaving' class='show-button'
         value='Показать/Скрыть Отпуск' />"
    );
  }
}
