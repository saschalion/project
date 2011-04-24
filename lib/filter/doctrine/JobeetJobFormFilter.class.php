<?php

/**
 * JobeetJob filter form.
 *
 * @package    jobeet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class JobeetJobFormFilter extends BaseJobeetJobFormFilter
{
  public function configure()
  {
      $this->widgetSchema->setLabels(
              array(
                  'tab_id'     => 'Таб. номер',
                  'last_name'  => 'Фамилия',
                  'first_name' => 'Имя',
                  'price'      => 'Оклад',
				  'category_id' => 'Должность',
                  'status_id' => 'Статус',
                  'sf_guard_user_id' => 'Добавил',
                  'city_id' => 'Город'
              )
      );

  }
}