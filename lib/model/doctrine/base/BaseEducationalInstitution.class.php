<?php

/**
 * BaseEducationalInstitution
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name_educational_institution
 * @property string $diploma
 * @property date $year_graduation
 * @property integer $education_id
 * @property string $diploma_qualification
 * @property string $speciality_diploma
 * @property Education $Education
 * @property Doctrine_Collection $EducationalInstitution
 * 
 * @method string                 getNameEducationalInstitution()   Returns the current record's "name_educational_institution" value
 * @method string                 getDiploma()                      Returns the current record's "diploma" value
 * @method date                   getYearGraduation()               Returns the current record's "year_graduation" value
 * @method integer                getEducationId()                  Returns the current record's "education_id" value
 * @method string                 getDiplomaQualification()         Returns the current record's "diploma_qualification" value
 * @method string                 getSpecialityDiploma()            Returns the current record's "speciality_diploma" value
 * @method Education              getEducation()                    Returns the current record's "Education" value
 * @method Doctrine_Collection    getEducationalInstitution()       Returns the current record's "EducationalInstitution" collection
 * @method EducationalInstitution setNameEducationalInstitution()   Sets the current record's "name_educational_institution" value
 * @method EducationalInstitution setDiploma()                      Sets the current record's "diploma" value
 * @method EducationalInstitution setYearGraduation()               Sets the current record's "year_graduation" value
 * @method EducationalInstitution setEducationId()                  Sets the current record's "education_id" value
 * @method EducationalInstitution setDiplomaQualification()         Sets the current record's "diploma_qualification" value
 * @method EducationalInstitution setSpecialityDiploma()            Sets the current record's "speciality_diploma" value
 * @method EducationalInstitution setEducation()                    Sets the current record's "Education" value
 * @method EducationalInstitution setEducationalInstitution()       Sets the current record's "EducationalInstitution" collection
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEducationalInstitution extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('educational_institution');
        $this->hasColumn('name_educational_institution', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('diploma', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('year_graduation', 'date', null, array(
             'type' => 'date',
             ));
        $this->hasColumn('education_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('diploma_qualification', 'string', 100, array(
             'type' => 'string',
             'length' => 100,
             ));
        $this->hasColumn('speciality_diploma', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));

        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Education', array(
             'local' => 'education_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasMany('JobeetJob as EducationalInstitution', array(
             'local' => 'id',
             'foreign' => 'educational_institution_id'));
    }
}