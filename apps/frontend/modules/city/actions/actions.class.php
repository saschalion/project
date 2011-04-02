<?php

/**
 * city actions.
 *
 * @package    jobeet
 * @subpackage city
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class cityActions extends sfActions
{

   public function preExecute()
    {
        parent::preExecute();
        $this->getResponse()->addStylesheet('style.css', 'last');
        $this->getResponse()->addStylesheet('table_form.css', 'last');


    }
    
  public function executeIndex(sfWebRequest $request)
  {
    $this->citys = Doctrine_Core::getTable('City')
      ->createQuery('a')
      ->execute();
  }

  public function executeShow(sfWebRequest $request)
  {
    $this->city = Doctrine_Core::getTable('City')->find(array($request->getParameter('id')));
    $this->forward404Unless($this->city);
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new CityForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new CityForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($city = Doctrine_Core::getTable('City')->find(array($request->getParameter('id'))), sprintf('Object city does not exist (%s).', $request->getParameter('id')));
    $this->form = new CityForm($city);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($city = Doctrine_Core::getTable('City')->find(array($request->getParameter('id'))), sprintf('Object city does not exist (%s).', $request->getParameter('id')));
    $this->form = new CityForm($city);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($city = Doctrine_Core::getTable('City')->find(array($request->getParameter('id'))), sprintf('Object city does not exist (%s).', $request->getParameter('id')));
    $city->delete();

    $this->redirect('city/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $city = $form->save();

      $this->redirect('city/show?id='.$city->getId());
    }
  }
}
