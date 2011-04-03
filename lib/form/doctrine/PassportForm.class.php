<?php

/**
 * Passport form.
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class PassportForm extends BasePassportForm
{
  public function configure()
  {

      unset(
      $this['created_at'], $this['updated_at']
     );

      $this->widgetSchema->setLabels(array(
       'passport_number' => '№, серия<span class="red">*</span>',
      'issuance_passports' => 'Кем выдан<span class="red">*</span>',
      'date_issue_passport' => 'Дата выдачи<span class="red">*</span>',
      'code_division' => 'Код подразделения<span class="red">*</span>'
    ));

      $this->widgetSchema->setHelp(
     'code_division', "<input type='button' id='show-language' class='show-button' value='Показать/Скрыть Иностранные языки' onclick='hideShowLanguage();'>"
    );

  }

}
