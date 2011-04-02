<?php

/**
 * Family filter form base class.
 *
 * @package    jobeet
 * @subpackage filter
 * @author     Your name here
 * @version    SVN: $Id: sfDoctrineFormFilterGeneratedTemplate.php 29570 2010-05-21 14:49:47Z Kris.Wallsmith $
 */
abstract class BaseFamilyFormFilter extends BaseFormFilterDoctrine
{
  public function setup()
  {
    $this->setWidgets(array(
      'relation_degree'     => new sfWidgetFormFilterInput(),
      'marriage_status'     => new sfWidgetFormFilterInput(),
      'children'            => new sfWidgetFormFilterInput(),
      'date_birth_children' => new sfWidgetFormFilterDate(array('from_date' => new sfWidgetFormDate(), 'to_date' => new sfWidgetFormDate())),
    ));

    $this->setValidators(array(
      'relation_degree'     => new sfValidatorPass(array('required' => false)),
      'marriage_status'     => new sfValidatorPass(array('required' => false)),
      'children'            => new sfValidatorPass(array('required' => false)),
      'date_birth_children' => new sfValidatorDateRange(array('required' => false, 'from_date' => new sfValidatorDate(array('required' => false)), 'to_date' => new sfValidatorDateTime(array('required' => false)))),
    ));

    $this->widgetSchema->setNameFormat('family_filters[%s]');

    $this->errorSchema = new sfValidatorErrorSchema($this->validatorSchema);

    $this->setupInheritance();

    parent::setup();
  }

  public function getModelName()
  {
    return 'Family';
  }

  public function getFields()
  {
    return array(
      'id'                  => 'Number',
      'relation_degree'     => 'Text',
      'marriage_status'     => 'Text',
      'children'            => 'Text',
      'date_birth_children' => 'Date',
    );
  }
}
