<?php

/**
 * MilitaryRecords form.
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class MilitaryRecordsForm extends BaseMilitaryRecordsForm
{
  public function configure()
  {
        unset(
          $this['fitness']
        );

        $this->widgetSchema->setLabels(array(
            'group_accounting' => 'Группа учета',
            'category_accounting' => 'Категория учета',
            'composition' => 'Состав',
            'military_rank' => 'Воинское звание',
            'military_discount_specialty' => 'Воен. учетн. спец.',
            'number_military_discount_specialty' => '№',
            'name_district_military_office' => 'Годность',
            'number_special_accounting' => 'Название районного военкомата'
            )
        );
  }
}