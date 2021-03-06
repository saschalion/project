<?php

/**
 * BaseFamily
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $relation_degree
 * @property string $marriage_status
 * @property string $children
 * @property date $date_birth_children
 * @property Doctrine_Collection $Family
 * 
 * @method string              getRelationDegree()      Returns the current record's "relation_degree" value
 * @method string              getMarriageStatus()      Returns the current record's "marriage_status" value
 * @method string              getChildren()            Returns the current record's "children" value
 * @method date                getDateBirthChildren()   Returns the current record's "date_birth_children" value
 * @method Doctrine_Collection getFamily()              Returns the current record's "Family" collection
 * @method Family              setRelationDegree()      Sets the current record's "relation_degree" value
 * @method Family              setMarriageStatus()      Sets the current record's "marriage_status" value
 * @method Family              setChildren()            Sets the current record's "children" value
 * @method Family              setDateBirthChildren()   Sets the current record's "date_birth_children" value
 * @method Family              setFamily()              Sets the current record's "Family" collection
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseFamily extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('family');
        $this->hasColumn('relation_degree', 'string', 40, array(
             'type' => 'string',
             'length' => 40,
             ));
        $this->hasColumn('marriage_status', 'string', 40, array(
             'type' => 'string',
             'length' => 40,
             ));
        $this->hasColumn('children', 'string', 40, array(
             'type' => 'string',
             'length' => 40,
             ));
        $this->hasColumn('date_birth_children', 'date', null, array(
             'type' => 'date',
             ));

        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('JobeetJob as Family', array(
             'local' => 'id',
             'foreign' => 'family_id'));
    }
}