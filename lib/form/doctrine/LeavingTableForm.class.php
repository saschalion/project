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
      $this->widgetSchema->setLabels(array(     
          'kind_leave' => 'Вид отпуска',
          'getting_started' => 'Период работы с',
          'end_work' => 'по',
          'number_vacation_days' => 'Количество календарных дней отпуска',
          'commencement' => 'Дата начала',
          'end_leave' => 'Дата окончания',
          'base_release' => 'Основание' 
        )
      );
  }
}
