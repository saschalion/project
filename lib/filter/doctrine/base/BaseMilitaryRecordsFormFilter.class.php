<?php

/**
 * MilitaryRecords filter form base class.
 *
 * @package    jobeet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseMilitaryRecordsFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'group_accounting'                   => new sfWidgetFormFilterInput(),
      'category_accounting'                => new sfWidgetFormFilterInput(),
      'composition'                        => new sfWidgetFormFilterInput(),
      'military_rank'                      => new sfWidgetFormFilterInput(),
      'military_discount_specialty'        => new sfWidgetFormFilterInput(),
      'number_military_discount_specialty' => new sfWidgetFormFilterInput(),
      'fitness'                            => new sfWidgetFormFilterInput(),
      'name_district_military_office'      => new sfWidgetFormFilterInput(),
      'number_special_accounting'          => new sfWidgetFormFilterInput(),
    ));

    $this->setValidators(array(
      'group_accounting'                   => new sfValidatorPass(array('required' => false)),
      'category_accounting'                => new sfValidatorPass(array('required' => false)),
      'composition'                        => new sfValidatorPass(array('required' => false)),
      'military_rank'                      => new sfValidatorPass(array('required' => false)),
      'military_discount_specialty'        => new sfValidatorPass(array('required' => false)),
      'number_military_discount_specialty' => new sfValidatorPass(array('required' => false)),
      'fitness'                            => new sfValidatorPass(array('required' => false)),
      'name_district_military_office'      => new sfValidatorPass(array('required' => false)),
      'number_special_accounting'          => new sfValidatorPass(array('required' => false)),
    ));

    $this->widgetSchema->setNameFormat('military_records_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'MilitaryRecords';
  }

  public function getFields()
  {
    return array(
      'id'                                 => 'Number',
      'group_accounting'                   => 'Text',
      'category_accounting'                => 'Text',
      'composition'                        => 'Text',
      'military_rank'                      => 'Text',
      'military_discount_specialty'        => 'Text',
      'number_military_discount_specialty' => 'Text',
      'fitness'                            => 'Text',
      'name_district_military_office'      => 'Text',
      'number_special_accounting'          => 'Text',
    );
  }
}
