<?php

require_once dirname(__FILE__).'/../lib/passportGeneratorConfiguration.class.php';
require_once dirname(__FILE__).'/../lib/passportGeneratorHelper.class.php';

/**
 * passport actions.
 *
 * @package    jobeet
 * @subpackage passport
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class passportActions extends autoPassportActions
{
    public function preExecute()
        {
            parent::preExecute();
              $this->form = new sfForm();
  $this->form->setWidgets(array(
    'name'    => new sfWidgetFormInputText(),
    'email'   => new sfWidgetFormInputText(array('default' => 'me@example.com')),
    'subject' => new sfWidgetFormChoice(array('choices' => array('Subject A', 'Subject B', 'Subject C'))),
    'message' => new sfWidgetFormTextarea(),
  ));

        }

}
