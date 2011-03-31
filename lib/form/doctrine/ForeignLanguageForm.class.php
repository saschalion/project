<?php

/**
 * ForeignLanguage form.
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class ForeignLanguageForm extends BaseForeignLanguageForm
{
  public function configure()
  {
      unset(
      $this['created_at'], $this['updated_at']
     );

      $this->widgetSchema['degree_knowledge_foreign_languages'] = new sfWidgetFormChoice(array(
      'choices'  => Doctrine_Core::getTable('JobeetJob')->getForeignLanguages(),
      'expanded' => false
    ));

      $this->widgetSchema->setLabels(array(      
      'name_foreign_language' => 'Наименование',
      'degree_knowledge_foreign_languages' => 'Степень знания'
    ));
  }
}
