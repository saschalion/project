<?php

/**
 * BaseEducationalInstitutionExtra
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $study_extra
 * @property string $name_educational_institution_extra
 * @property string $diploma_extra
 * @property year $year_graduation_extra
 * @property string $diploma_qualification_extra
 * @property string $speciality_diploma_extra
 * @property Doctrine_Collection $EducationalInstitutionExtra
 * 
 * @method string                      getStudyExtra()                         Returns the current record's "study_extra" value
 * @method string                      getNameEducationalInstitutionExtra()    Returns the current record's "name_educational_institution_extra" value
 * @method string                      getDiplomaExtra()                       Returns the current record's "diploma_extra" value
 * @method year                        getYearGraduationExtra()                Returns the current record's "year_graduation_extra" value
 * @method string                      getDiplomaQualificationExtra()          Returns the current record's "diploma_qualification_extra" value
 * @method string                      getSpecialityDiplomaExtra()             Returns the current record's "speciality_diploma_extra" value
 * @method Doctrine_Collection         getEducationalInstitutionExtra()        Returns the current record's "EducationalInstitutionExtra" collection
 * @method EducationalInstitutionExtra setStudyExtra()                         Sets the current record's "study_extra" value
 * @method EducationalInstitutionExtra setNameEducationalInstitutionExtra()    Sets the current record's "name_educational_institution_extra" value
 * @method EducationalInstitutionExtra setDiplomaExtra()                       Sets the current record's "diploma_extra" value
 * @method EducationalInstitutionExtra setYearGraduationExtra()                Sets the current record's "year_graduation_extra" value
 * @method EducationalInstitutionExtra setDiplomaQualificationExtra()          Sets the current record's "diploma_qualification_extra" value
 * @method EducationalInstitutionExtra setSpecialityDiplomaExtra()             Sets the current record's "speciality_diploma_extra" value
 * @method EducationalInstitutionExtra setEducationalInstitutionExtra()        Sets the current record's "EducationalInstitutionExtra" collection
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseEducationalInstitutionExtra extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('educational_institution_extra');
        $this->hasColumn('study_extra', 'string', 30, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 30,
             ));
        $this->hasColumn('name_educational_institution_extra', 'string', 150, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 150,
             ));
        $this->hasColumn('diploma_extra', 'string', 20, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 20,
             ));
        $this->hasColumn('year_graduation_extra', 'year', null, array(
             'type' => 'year',
             'notnull' => false,
             ));
        $this->hasColumn('diploma_qualification_extra', 'string', 100, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 100,
             ));
        $this->hasColumn('speciality_diploma_extra', 'string', 150, array(
             'type' => 'string',
             'notnull' => false,
             'length' => 150,
             ));

        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('JobeetJob as EducationalInstitutionExtra', array(
             'local' => 'id',
             'foreign' => 'educational_institution_extra_id'));
    }
}