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
    $years = array_combine($years, $years);
    $this->widgetSchema['getting_started'] = new sfWidgetFormDate(array(
      'format' => '%day% - %month% - %year%',
      'years'  => $years
    ));

    $yearsEndWork = range(date('Y'), date('Y')-15);
    $yearsEndWork = array_combine($yearsEndWork, $yearsEndWork);
    $this->widgetSchema['end_work'] = new sfWidgetFormDate(array(
      'format' => '%day% - %month% - %year%',
      'years'  => $yearsEndWork
    ));

    $yearsCommencement = range(date('Y'), date('Y')-1);
    $yearsCommencement = array_combine($yearsCommencement, $yearsCommencement);
    $this->widgetSchema['commencement'] = new sfWidgetFormDate(array(
      'format' => '%day% - %month% - %year%',
      'years'  => $yearsCommencement
    ));

    $yearsEndLeave = range(date('Y'), date('Y')+1);
    $yearsEndLeave = array_combine($yearsEndLeave, $yearsEndLeave);
    $this->widgetSchema['end_leave'] = new sfWidgetFormDate(array(
      'format' => '%day% - %month% - %year%',
      'years'  => $yearsEndLeave
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