<?php

/**
 * LeavingTable form.
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class LeavingTableForm extends BaseLeavingTableForm
{
  public function configure()
  {
    $this->widgetSchema['kind_leave'] = new sfWidgetFormChoice(array(
      'choices'  => Doctrine_Core::getTable('JobeetJob')->getKindLeave(),
      'expanded' => false
    ));

    $years = range(date('Y'), date('Y')-15);  
    $this->widgetSchema['getting_started'] = new sfWidgetFormDate(array(
      'format' => '%day% - %month% - %year%',
      'years'  => array_combine($years, $years)
    ));

    $yearsEndWork = range(date('Y'), date('Y')-15);
    $this->widgetSchema['end_work'] = new sfWidgetFormDate(array(
      'format' => '%day% - %month% - %year%',
      'years'  => array_combine($yearsEndWork, $yearsEndWork)
    ));

    $yearsCommencement = range(date('Y'), date('Y')-1); 
    $this->widgetSchema['commencement'] = new sfWidgetFormDate(array(
      'format' => '%day% - %month% - %year%',
      'years'  => array_combine($yearsCommencement, $yearsCommencement)
    ));

    $yearsEndLeave = range(date('Y'), date('Y')+1);  
    $this->widgetSchema['end_leave'] = new sfWidgetFormDate(array(
      'format' => '%day% - %month% - %year%',
      'years'  => array_combine($yearsEndLeave, $yearsEndLeave)
    ));

    $this->widgetSchema->setLabels(array(
          'kind_leave'           => 'Вид отпуска',
          'getting_started'      => 'Период работы с',
          'end_work'             => 'по',
          'number_vacation_days' => 'Количество календарных дней отпуска',
          'commencement'         => 'Дата начала',
          'end_leave'            => 'Дата окончания',
          'base_release'         => 'Основание'
        )
      );
  }
}