<?php

require_once dirname(__FILE__).'/../lib/jobGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/jobGeneratorHelper.class.php';

/**
 * job actions.
 *
 * @package    jobeet
 * @subpackage job
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class jobActions extends autoJobActions
{
    public function preExecute()
    {
        parent::preExecute();
        $this->getResponse()->addStylesheet('style.css', 'last');
        $this->getResponse()->addStylesheet('reset.css', 'last');
        $this->getResponse()->addStylesheet('table_form.css', 'last');
        $this->getResponse()->addStylesheet('form_general_back.css', 'last');

//        $dbhost = "localhost";
//        $dbname = "jobeet";
//        $dbuser = "root";
//        $dbpass = "666";
//        $db = new PDO ( 'mysql:host=' . $dbhost . ';dbname=' . $dbname, $dbuser, $dbpass );
//
//        $sql = "SELECT username from jobeet_job, sf_guard_user WHERE jobeet_id = sf_guard_user_id;";
//        $result = $db->prepare( $sql );
//        $result->execute();
//        $tdata = $result->fetchAll();
//        $this->faqItem = $tdata;
    }
}
