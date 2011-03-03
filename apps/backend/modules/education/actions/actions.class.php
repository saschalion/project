<?php

require_once dirname(__FILE__).'/../lib/educationGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/educationGeneratorHelper.class.php';

/**
 * education actions.
 *
 * @package    jobeet
 * @subpackage education
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class educationActions extends autoEducationActions
{
     public function preExecute()
    {
        parent::preExecute();
        $this->getResponse()->addStylesheet('style.css', 'last');
        $this->getResponse()->addStylesheet('reset.css', 'last');
        $this->getResponse()->addStylesheet('table_form.css', 'last');
        $this->getResponse()->addStylesheet('form_general_back.css', 'last');

    }
}
