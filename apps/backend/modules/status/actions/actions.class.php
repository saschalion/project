<?php

require_once dirname(__FILE__).'/../lib/statusGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/statusGeneratorHelper.class.php';

/**
 * status actions.
 *
 * @package    jobeet
 * @subpackage status
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class statusActions extends autoStatusActions
{
    public function preExecute()
    {
        parent::preExecute();
        $this->getResponse()->addStylesheet('style.css', 'last');
        $this->getResponse()->addStylesheet('reset.css', 'last');
        $this->getResponse()->addStylesheet('table_form.css', 'last');
        $this->getResponse()->addStylesheet('form_general_back.css', 'last');
        $this->getResponse()->addStylesheet('form_general.css', 'last');
    }
}
