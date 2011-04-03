<?php

/**
 * BaseJobeetJob
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property float $price
 * @property string $tab_id
 * @property string $number_insurace
 * @property string $pension_sertificate
 * @property string $nature_work
 * @property string $type_work
 * @property integer $category_id
 * @property integer $status_id
 * @property integer $sf_guard_user_id
 * @property integer $passport_id
 * @property integer $foreign_language_id
 * @property integer $educational_institution_id
 * @property integer $educational_institution_extra_id
 * @property integer $profession_id
 * @property integer $family_id
 * @property integer $military_records_id
 * @property integer $leaving_table_id
 * @property string $citizenship
 * @property string $last_name
 * @property string $first_name
 * @property string $three_name
 * @property string $type
 * @property date $data_birth
 * @property string $phone
 * @property string $mobile_phone
 * @property integer $city_id
 * @property string $adress
 * @property string $email
 * @property string $logo
 * @property string $more_information
 * @property string $token
 * @property JobeetCategory $JobeetCategory
 * @property City $City
 * @property Status $Status
 * @property sfGuardUser $User
 * @property Passport $Passport
 * @property ForeignLanguage $ForeignLanguage
 * @property EducationalInstitution $EducationalInstitution
 * @property EducationalInstitutionExtra $EducationalInstitutionExtra
 * @property Profession $Profession
 * @property Family $Family
 * @property MilitaryRecords $MilitaryRecords
 * @property LeavingTable $LeavingTable
 * 
 * @method float                       getPrice()                            Returns the current record's "price" value
 * @method string                      getTabId()                            Returns the current record's "tab_id" value
 * @method string                      getNumberInsurace()                   Returns the current record's "number_insurace" value
 * @method string                      getPensionSertificate()               Returns the current record's "pension_sertificate" value
 * @method string                      getNatureWork()                       Returns the current record's "nature_work" value
 * @method string                      getTypeWork()                         Returns the current record's "type_work" value
 * @method integer                     getCategoryId()                       Returns the current record's "category_id" value
 * @method integer                     getStatusId()                         Returns the current record's "status_id" value
 * @method integer                     getSfGuardUserId()                    Returns the current record's "sf_guard_user_id" value
 * @method integer                     getPassportId()                       Returns the current record's "passport_id" value
 * @method integer                     getForeignLanguageId()                Returns the current record's "foreign_language_id" value
 * @method integer                     getEducationalInstitutionId()         Returns the current record's "educational_institution_id" value
 * @method integer                     getEducationalInstitutionExtraId()    Returns the current record's "educational_institution_extra_id" value
 * @method integer                     getProfessionId()                     Returns the current record's "profession_id" value
 * @method integer                     getFamilyId()                         Returns the current record's "family_id" value
 * @method integer                     getMilitaryRecordsId()                Returns the current record's "military_records_id" value
 * @method integer                     getLeavingTableId()                   Returns the current record's "leaving_table_id" value
 * @method string                      getCitizenship()                      Returns the current record's "citizenship" value
 * @method string                      getLastName()                         Returns the current record's "last_name" value
 * @method string                      getFirstName()                        Returns the current record's "first_name" value
 * @method string                      getThreeName()                        Returns the current record's "three_name" value
 * @method string                      getType()                             Returns the current record's "type" value
 * @method date                        getDataBirth()                        Returns the current record's "data_birth" value
 * @method string                      getPhone()                            Returns the current record's "phone" value
 * @method string                      getMobilePhone()                      Returns the current record's "mobile_phone" value
 * @method integer                     getCityId()                           Returns the current record's "city_id" value
 * @method string                      getAdress()                           Returns the current record's "adress" value
 * @method string                      getEmail()                            Returns the current record's "email" value
 * @method string                      getLogo()                             Returns the current record's "logo" value
 * @method string                      getMoreInformation()                  Returns the current record's "more_information" value
 * @method string                      getToken()                            Returns the current record's "token" value
 * @method JobeetCategory              getJobeetCategory()                   Returns the current record's "JobeetCategory" value
 * @method City                        getCity()                             Returns the current record's "City" value
 * @method Status                      getStatus()                           Returns the current record's "Status" value
 * @method sfGuardUser                 getUser()                             Returns the current record's "User" value
 * @method Passport                    getPassport()                         Returns the current record's "Passport" value
 * @method ForeignLanguage             getForeignLanguage()                  Returns the current record's "ForeignLanguage" value
 * @method EducationalInstitution      getEducationalInstitution()           Returns the current record's "EducationalInstitution" value
 * @method EducationalInstitutionExtra getEducationalInstitutionExtra()      Returns the current record's "EducationalInstitutionExtra" value
 * @method Profession                  getProfession()                       Returns the current record's "Profession" value
 * @method Family                      getFamily()                           Returns the current record's "Family" value
 * @method MilitaryRecords             getMilitaryRecords()                  Returns the current record's "MilitaryRecords" value
 * @method LeavingTable                getLeavingTable()                     Returns the current record's "LeavingTable" value
 * @method JobeetJob                   setPrice()                            Sets the current record's "price" value
 * @method JobeetJob                   setTabId()                            Sets the current record's "tab_id" value
 * @method JobeetJob                   setNumberInsurace()                   Sets the current record's "number_insurace" value
 * @method JobeetJob                   setPensionSertificate()               Sets the current record's "pension_sertificate" value
 * @method JobeetJob                   setNatureWork()                       Sets the current record's "nature_work" value
 * @method JobeetJob                   setTypeWork()                         Sets the current record's "type_work" value
 * @method JobeetJob                   setCategoryId()                       Sets the current record's "category_id" value
 * @method JobeetJob                   setStatusId()                         Sets the current record's "status_id" value
 * @method JobeetJob                   setSfGuardUserId()                    Sets the current record's "sf_guard_user_id" value
 * @method JobeetJob                   setPassportId()                       Sets the current record's "passport_id" value
 * @method JobeetJob                   setForeignLanguageId()                Sets the current record's "foreign_language_id" value
 * @method JobeetJob                   setEducationalInstitutionId()         Sets the current record's "educational_institution_id" value
 * @method JobeetJob                   setEducationalInstitutionExtraId()    Sets the current record's "educational_institution_extra_id" value
 * @method JobeetJob                   setProfessionId()                     Sets the current record's "profession_id" value
 * @method JobeetJob                   setFamilyId()                         Sets the current record's "family_id" value
 * @method JobeetJob                   setMilitaryRecordsId()                Sets the current record's "military_records_id" value
 * @method JobeetJob                   setLeavingTableId()                   Sets the current record's "leaving_table_id" value
 * @method JobeetJob                   setCitizenship()                      Sets the current record's "citizenship" value
 * @method JobeetJob                   setLastName()                         Sets the current record's "last_name" value
 * @method JobeetJob                   setFirstName()                        Sets the current record's "first_name" value
 * @method JobeetJob                   setThreeName()                        Sets the current record's "three_name" value
 * @method JobeetJob                   setType()                             Sets the current record's "type" value
 * @method JobeetJob                   setDataBirth()                        Sets the current record's "data_birth" value
 * @method JobeetJob                   setPhone()                            Sets the current record's "phone" value
 * @method JobeetJob                   setMobilePhone()                      Sets the current record's "mobile_phone" value
 * @method JobeetJob                   setCityId()                           Sets the current record's "city_id" value
 * @method JobeetJob                   setAdress()                           Sets the current record's "adress" value
 * @method JobeetJob                   setEmail()                            Sets the current record's "email" value
 * @method JobeetJob                   setLogo()                             Sets the current record's "logo" value
 * @method JobeetJob                   setMoreInformation()                  Sets the current record's "more_information" value
 * @method JobeetJob                   setToken()                            Sets the current record's "token" value
 * @method JobeetJob                   setJobeetCategory()                   Sets the current record's "JobeetCategory" value
 * @method JobeetJob                   setCity()                             Sets the current record's "City" value
 * @method JobeetJob                   setStatus()                           Sets the current record's "Status" value
 * @method JobeetJob                   setUser()                             Sets the current record's "User" value
 * @method JobeetJob                   setPassport()                         Sets the current record's "Passport" value
 * @method JobeetJob                   setForeignLanguage()                  Sets the current record's "ForeignLanguage" value
 * @method JobeetJob                   setEducationalInstitution()           Sets the current record's "EducationalInstitution" value
 * @method JobeetJob                   setEducationalInstitutionExtra()      Sets the current record's "EducationalInstitutionExtra" value
 * @method JobeetJob                   setProfession()                       Sets the current record's "Profession" value
 * @method JobeetJob                   setFamily()                           Sets the current record's "Family" value
 * @method JobeetJob                   setMilitaryRecords()                  Sets the current record's "MilitaryRecords" value
 * @method JobeetJob                   setLeavingTable()                     Sets the current record's "LeavingTable" value
 * 
 * @package    jobeet
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 7490 2010-03-29 19:53:27Z jwage $
 */
abstract class BaseJobeetJob extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('jobeet_job');
        $this->hasColumn('price', 'float', null, array(
             'type' => 'float',
             ));
        $this->hasColumn('tab_id', 'string', 30, array(
             'type' => 'string',
             'unique' => true,
             'notnull' => true,
             'length' => 30,
             ));
        $this->hasColumn('number_insurace', 'string', 12, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 12,
             ));
        $this->hasColumn('pension_sertificate', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('nature_work', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             ));
        $this->hasColumn('type_work', 'string', 30, array(
             'type' => 'string',
             'length' => 30,
             ));
        $this->hasColumn('category_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('status_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('sf_guard_user_id', 'integer', null, array(
             'type' => 'integer',
             'notnull' => true,
             ));
        $this->hasColumn('passport_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('foreign_language_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('educational_institution_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('educational_institution_extra_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('profession_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('family_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('military_records_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('leaving_table_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('citizenship', 'string', 150, array(
             'type' => 'string',
             'length' => 150,
             ));
        $this->hasColumn('last_name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('first_name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('three_name', 'string', 100, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 100,
             ));
        $this->hasColumn('type', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('data_birth', 'date', null, array(
             'type' => 'date',
             'notnull' => true,
             ));
        $this->hasColumn('phone', 'string', 20, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 20,
             ));
        $this->hasColumn('mobile_phone', 'string', 20, array(
             'type' => 'string',
             'length' => 20,
             ));
        $this->hasColumn('city_id', 'integer', null, array(
             'type' => 'integer',
             ));
        $this->hasColumn('adress', 'string', 150, array(
             'type' => 'string',
             'notnull' => true,
             'length' => 150,
             ));
        $this->hasColumn('email', 'string', 255, array(
             'type' => 'string',
             'unique' => true,
             'length' => 255,
             ));
        $this->hasColumn('logo', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('more_information', 'string', 255, array(
             'type' => 'string',
             'length' => 255,
             ));
        $this->hasColumn('token', 'string', 255, array(
             'type' => 'string',
             'notnull' => true,
             'unique' => true,
             'length' => 255,
             ));

        $this->option('collate', 'utf8_general_ci');
        $this->option('charset', 'utf8');
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('JobeetCategory', array(
             'local' => 'category_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('City', array(
             'local' => 'city_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Status', array(
             'local' => 'status_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('sfGuardUser as User', array(
             'local' => 'sf_guard_user_id',
             'foreign' => 'id',
             'onDelete' => 'cascade'));

        $this->hasOne('Passport', array(
             'local' => 'passport_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('ForeignLanguage', array(
             'local' => 'foreign_language_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('EducationalInstitution', array(
             'local' => 'educational_institution_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('EducationalInstitutionExtra', array(
             'local' => 'educational_institution_extra_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Profession', array(
             'local' => 'profession_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('Family', array(
             'local' => 'family_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('MilitaryRecords', array(
             'local' => 'military_records_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $this->hasOne('LeavingTable', array(
             'local' => 'leaving_table_id',
             'foreign' => 'id',
             'onDelete' => 'CASCADE'));

        $timestampable0 = new Doctrine_Template_Timestampable();
        $this->actAs($timestampable0);
    }
}