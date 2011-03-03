<?php

/**
 * City filter form.
 *
 * @package    jobeet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class CityFormFilter extends BaseCityFormFilter
{
  public function configure()
  {
       $this->widgetSchema->setLabels(array(
       'name'    => 'Город'
       ));
  }
}
