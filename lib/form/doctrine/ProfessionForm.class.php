<?php

/**
 * Profession form.
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ProfessionForm extends BaseProfessionForm
{
  public function configure()
  {  
	$yearDate = range(date('Y'), date('Y')-30);
       $this->widgetSchema['termination_date'] = new sfWidgetFormDate(array(
            'format' => ' %day% - %month% - %year%',
            'years'  => array_combine($yearDate, $yearDate)
    ));
	
    $this->widgetSchema->setLabels(array(
      'main_profession' => 'Основная',
      'other_profession' => 'Другая',
      'total_length' => 'Общий стаж',
      'continuous_service' => 'Непрерывный стаж',
      'last_job' => 'Последнее место работы',
      'termination_date' => 'Дата увольнения'
    ));

    
  }
}