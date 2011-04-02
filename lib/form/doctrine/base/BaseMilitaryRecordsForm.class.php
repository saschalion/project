<?php

/**
 * MilitaryRecords form base class.
 *
 * @method MilitaryRecords getObject() Returns the current form's model object
 *
 * @package    jobeet
 * @subpackage form
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormGeneratedTemplate.php 29553 2010-05-20 14:33:00Z Kris.Wallsmith $
 */
abstract class BaseMilitaryRecordsForm extends BaseFormDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'id'                                 => new sfWidgetFormInputHidden(),
      'group_accounting'                   => new sfWidgetFormInputText(),
      'category_accounting'                => new sfWidgetFormInputText(),
      'composition'                        => new sfWidgetFormInputText(),
      'military_rank'                      => new sfWidgetFormInputText(),
      'military_discount_specialty'        => new sfWidgetFormInputText(),
      'number_military_discount_specialty' => new sfWidgetFormInputText(),
      'fitness'                            => new sfWidgetFormInputText(),
      'name_district_military_office'      => new sfWidgetFormInputText(),
      'number_special_accounting'          => new sfWidgetFormInputText(),
    ));

    $this->setValidators(array(
      'id'                                 => new sfValidatorChoice(array('choices' => array($this->getObject()->get('id')), 'empty_value' => $this->getObject()->get('id'), 'required' => false)),
      'group_accounting'                   => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'category_accounting'                => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'composition'                        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'military_rank'                      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'military_discount_specialty'        => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'number_military_discount_specialty' => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'fitness'                            => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'name_district_military_office'      => new sfValidatorString(array('max_length' => 255, 'required' => false)),
      'number_special_accounting'          => new sfValidatorString(array('max_length' => 255, 'required' => false)),
    ));

    $this->widgetSchema->setNameFormat('military_records[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MilitaryRecords';
  }

}
